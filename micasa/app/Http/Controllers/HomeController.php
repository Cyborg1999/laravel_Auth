<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(){
        $role=Auth::user()->role;
       /* switch ($role){
            case '1':
                return view( 'admin');
                break;
            case '2':
                return view('seller');
                break;
            default:
                return view('dashboard');
                break;
        }*/
        if ($role == '1'){
            return view( 'admin');
        }
        if ($role == '2'){
            return view( 'seller');
        }
        else{
            return view('dashboard');
        }
    }
}
