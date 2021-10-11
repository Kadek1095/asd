<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        return view('about', [
            "tittle" => "about",
            "firstnm" => "Kadek",
            "lastnm" => "Kusuma",
            "age" => "20",
            "nationaly" => "Indonesia",
            "freelance" => "aviable",
            "address" => "Seririt",
            "phone" => "082339790472",
            "email" => "dekkusuma9@gmail.com",
            "skype" => " - ",
            "languages" => "Indonesia"
        ]);
    }
}
