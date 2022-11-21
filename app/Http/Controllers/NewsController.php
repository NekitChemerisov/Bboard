<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller
{
    public function news(){
    $info = file_get_contents('https://24.kz/ru/');
    preg_match_all("/<p[^>]*?>(.*?)<\/p>/si", $info, $matches);
    //print_r($matches[1]);

    return view("news",compact('matches'));
    }

    
}
