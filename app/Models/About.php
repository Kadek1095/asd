<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use function PHPUnit\Framework\returnSelf;

class About
{
    private static $about = [
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
    ];

    public static function all()
    {
        return self::$about;
    }
}
