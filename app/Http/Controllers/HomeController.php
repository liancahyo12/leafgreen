<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller; 
use App\Models\post;
use App;

class HomeController extends Controller
{
    function index(){
    
        return view("page.welcome");
    }

    function blog(){
    
        return view("page.blog", [
            'post' => post::where([['status', '=', 1], ['post_status', '=', 2]])->get(),
        ]);
    }

    function post($date, $post){
    
        return view("page.post", [
            'post' => post::where([['status', '=', 1], ['post_status', '=', 2], ['post_date', '=', $date], ['slug', '=', $post]])->first(),
        ]);
    }

    function ceo(){
    
        return view("page.ceo");
    }
    function advisor(){
    
        return view("page.advisor");
    }
    function affiliations(){
    
        return view("page.affiliations");
    }
    function awards(){
    
        return view("page.awards");
    }
    function csr(){
    
        return view("page.csr");
    }
    function financial(){
    
        return view("page.financial");
    }
    function gcg(){
    
        return view("page.gcg");
    }
    function history(){
    
        return view("page.history");
    }
    function media(){
    
        return view("page.media");
    }
    function portfolio(){
    
        return view("page.portfolio");
    }
    function product(){
    
        return view("page.product");
    }
    function report(){
    
        return view("page.report");
    }
    function certifications(){
    
        return view("page.certifications");
    }
    function structure(){
    
        return view("page.structure");
    }
    function visimisi(){
    
        return view("page.visimisi");
    }
    function contactus(){
    
        return view("page.contactus");
    }
    
    function changeLang($langcode){
    
        App::setLocale($langcode);
        session()->put("lang_code",$langcode);
        return redirect()->back();
    }  
}
