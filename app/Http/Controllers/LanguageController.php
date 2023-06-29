<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use phpDocumentor\Reflection\Types\String_;
use Session;
session_start();

class LanguageController extends Controller
{
    public function index(Request $request,$language)
    {

        If($language){
            Session::put('language',$language);
        }
        return redirect()->back();
        Session::save();

    }
}
