<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use App\Apartment;
use App\Extra;

class ApartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $apartments = Apartment::all();

        $data = [
            'apartments' => $apartments
        ];

        return view('admin.apartments.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
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
            $same_slug_found = Post::where('slug', '=', $new_slug)->first();
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
        $new_ap->user_id = Auth::id();
        $new_ap->fill($new_ap_data);

        $new_ap->save();
        

        return redirect()->route('admin.apartments.show', ['apartment' => $new_ap->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $apartment = Apartment::findOrFail($id);

        $data = [
            'apartment' => $apartment
        ];

        return view('admin.apartments.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    // Validation rules
    // private function getValidationRules() {
    //     $validation_rules = [
    //         blablabla
    //     ];

    //     return $validation_rules;
    // }
}
