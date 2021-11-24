<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{   public function dashboard()
    {  
        $arr["title"]="prueba";
        return view("home.home",$arr);
    }

}
