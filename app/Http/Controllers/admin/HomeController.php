<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
// HomeController privato, reinderizza solo alla pagina di log in effettuato
class HomeController extends Controller
{
    public function index () {
        $current_user = Auth::user();
        
        $data = [
            'current_user' => $current_user
        ];
        
        // Qui la pagina per gli utenti appena loggati, admin.home
        return view('admin.home', $data);
    }
}