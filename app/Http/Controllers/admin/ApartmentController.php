<?php

namespace App\Http\Controllers\admin;

use Illuminate\Support\Facades\DB;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;
use App\Apartment;
use App\Extra;
use App\Message;
use App\View;

class ApartmentController extends Controller
{
    // INDEX
    public function index()
    {
        $currentUser = Auth::user();

        $userAp = count($currentUser->apartments);
        // dd($userAp);
        $currentUserId = Auth::id();

        $apartments = Apartment::where('user_id', $currentUserId)->get();

        // link sponsorships to single apartment 
        foreach($apartments as $apartment){
            if($apartment->sponsorships){
                $apartment = $apartment->extras;
            }   
        }
        $thisUserMessages = [];
        foreach ($apartments as $apartment) {
            $thisApMessages = Message::where('apartment_id', $apartment->id)->get();

            if(!$thisApMessages->isEmpty()){
                array_push($thisUserMessages, $thisApMessages);
            }
        }
        //////////////////////////////////////////
        // get sponsored apartments for thisuser

        $now = Carbon::now();

        $nowParsed = $now->format('Y-m-d H:i:s');

        $inProgress = DB::table('apartment_sponsorship')->whereDate('end_date', '>=', $nowParsed)->get();

        $sponsoredApIds = [];

        foreach ($inProgress as $entry) {
            
            $apartmentId = $entry->apartment_id;
            if(!in_array($apartmentId, $sponsoredApIds)){
                array_push($sponsoredApIds, $apartmentId);
            }
        }

        $sponsoredArray = [];
        foreach ($sponsoredApIds as $id) {
            $sponsoredAp = Apartment::where('id', $id)->where('user_id', $currentUserId)->get();

            if(!$sponsoredAp->isEmpty()){
                array_push($sponsoredArray, $sponsoredAp->first());
            }
        }

        $data = [
            'apartments' => $apartments,
            'messagesArray' => $thisUserMessages,
            'user' => $currentUser,
            'apartment_number' => $userAp,
            'sponsored' => $sponsoredArray
        ];

        return view('admin.apartments.index', $data);
    }

    // CREATE
    public function create()
    {
        // TO-DO: Da aggiungere qui le eventuali foreign key necessarie
        // quando si crea un nuovo appartamento
        $extras = Extra::All();

        $data = [
            'extras' => $extras
        ];

        return view('admin.apartments.create', $data);
    }

    // STORE
    public function store(Request $request)
    {

        // validazione
        $request->validate($this->getValidationRules());

        $new_ap_data = $request->all();

        // CREATE NEW SLUG
        $new_slug = Str::Slug($new_ap_data['title'], '-');
        $base_slug = $new_slug;

        // initialize cycle's condition and counter
        $same_slug_found = Apartment::where('slug', '=', $new_slug)->first();
        $counter = 1;

        // searching for duplicate slugs
        while($same_slug_found){
            // append counter number to base slug (if there is a duplicate)
            $new_slug = $base_slug . '-' . $counter;

            // increase counter
            $counter++;

            // verify new_slug is now unique
            $same_slug_found = Apartment::where('slug', '=', $new_slug)->first();
            // if it's not it goes back into cycle
        }

        $new_ap_data['slug'] = $new_slug;

        // if an image is loaded, it's saved in storage
        // add result of Storage::put() in $new_ap_data
        if (isset($new_ap_data['cover'])) {

            $new_img_path = Storage::put('apartments_covers', $new_ap_data['cover']);

            if($new_img_path){
                $new_ap_data['cover'] = $new_img_path;
            }
        }

        $new_ap = new Apartment();

        //take current user id
        $new_ap->user_id = Auth::id();

        // fill
        $new_ap->fill($new_ap_data);

        $new_ap->save();

        // setting extras
        if(isset($new_ap_data['extras'])){
            $new_ap->extras()->sync($new_ap_data['extras']);
        }

        return redirect()->route('admin.apartments.show', ['apartment' => $new_ap->id]);
    }

    // SHOW
    public function show($id)
    {
        $apartment = Apartment::findOrFail($id);
        $extras = $apartment->extras;

        $views = View::where('apartment_id', $id)->get();

        $yearsWithOrders = [];

        foreach ($views as $view) {

            $date = date($view->date_month_year);

            $parsedDate = Carbon::parse($date);

            if(!in_array($parsedDate->year, $yearsWithOrders)){

                array_push($yearsWithOrders, $parsedDate->year);
            }

        }

        // dd($views);
        foreach ($yearsWithOrders as $year) {


            $viewsByMonth = $views->toQuery()->selectRaw('count(views.id) as count, DATE_FORMAT(created_at, \'%M\') as month')->groupBy('month')->whereYear('created_at', $year)->get();


            foreach ($viewsByMonth as $month) {
                $monthlyStatsForYears[$year]["labels"][]= $month->month;
                $monthlyStatsForYears[$year]["data"][]= $month->count;

            }

            // dump($monthlyStatsForYears);
        }


        $data = [
            'apartment' => $apartment,
            'extras' => $extras,
            'views' => $monthlyStatsForYears,
            'availableYears' => $yearsWithOrders
            
        ];

        return view('admin.apartments.show', $data);
    }

    // EDIT
    public function edit($id)
    {
        $this_ap = Apartment::findOrFail($id);
        $extras = Extra::All();

        $data = [
            'apartment' => $this_ap,
            'extras' => $extras
        ];

        return view('admin.apartments.edit', $data);
    }

    // UPDATE
    public function update(Request $request, $id)
    {

        // validazione
        $request->validate($this->getValidationRules());

        $mod_ap_data = $request->all();

        $mod_ap = Apartment::findOrFail($id);

        // if title is modified, slug uniqueness has to checked
        if($mod_ap_data['title'] != $mod_ap->title){

            // CREATE NEW SLUG
            $new_slug = Str::Slug($mod_ap_data['title'], '-');
            $base_slug = $new_slug;

            // initialize cycle's condition and counter
            $same_slug_found = Apartment::where('slug', '=', $new_slug)->first();
            $counter = 1;

            // searching for duplicate slugs
            while($same_slug_found){
                // append counter number to base slug (if there is a duplicate)
                $new_slug = $base_slug . '-' . $counter;

                // increase counter
                $counter++;

                // verify new_slug is now unique
                $same_slug_found = Apartment::where('slug', '=', $new_slug)->first();
                // if it's not it goes back into cycle
            }

        $new_ap_data['slug'] = $new_slug;
        }

        // if an image is loaded, it's saved in storage
        // add result of Storage::put() in $new_ap_data
        if (isset($mod_ap_data['cover'])) {

            $mod_img_path = Storage::put('apartments_covers', $mod_ap_data['cover']);

            if($mod_img_path){
                $mod_ap_data['cover'] = $mod_img_path;
            }
        }

        $mod_ap->update($mod_ap_data);

        $mod_ap->save();

        // setting extras
        // if checkboxes are modified, sync new values
        if(isset($mod_ap_data['extras'])){
            $mod_ap->extras()->sync($mod_ap_data['extras']);

        // if checkboxes are left empty, sync with empty array
        } else{
            $mod_ap->extras()->sync([]);
        }

        return redirect()->route('admin.apartments.show', ['apartment' => $mod_ap->id]);

    }

    // DESTROY
    public function destroy($id)
    {
        $this_ap = Apartment::find($id);
        $this_ap->extras()->sync([]);
        $this_ap->sponsorships()->sync([]);
        $this_ap->views()->delete();
        $this_ap->messages()->delete();
        $this_ap->delete();

        return redirect()->route('admin.apartments.index');
    }

    // Validation rules ghesboro
    private function getValidationRules() {
        $validation_rules = [
            'title' => 'required|min:5|max:255',
            'description' => 'nullable|max:65000',
            'rooms' => 'required|numeric',
            'beds' => 'required|numeric',
            'baths' => 'required|numeric',
            'square_meters' => 'nullable|numeric',
            'price' => 'required|numeric',
            'address' => 'required|min:5|max:255',
            'longitude' => 'required|numeric',
            'latitude' => 'required|numeric',
            'extras' => 'nullable|exists:extras,id',
            'cover' => 'nullable|mimes:jpg,png,jpeg,gif,svg,webp'
        ];

        return $validation_rules;
    }
}
