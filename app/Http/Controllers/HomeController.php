<?php
/**
 * Created by PhpStorm.
 * User: Tomica
 * Date: 22/06/2017
 * Time: 16:02
 */

namespace App\Http\Controllers;


class HomeController extends Controller
{
    public function show(){
        return view('home');
    }

}