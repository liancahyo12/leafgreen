<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller; 
use App\Models\Post;
use App\Models\sosial_media;
use App\Models\company;
use App\Models\client;
use App\Models\portfolio;
use App\Models\certification;
use App\Models\award;
use App\Models\product;
use App;

class HomeController extends Controller
{
    function index(){
    
        return view("page.welcome", [
                    'company' => company::where('status', 1)->first(),
                    'client' => client::where('status', 1)->get(),
                    'product' => product::where('status', 1)->get(),
                    'portfolio' => portfolio::where('status', 1)->orderBy("created_at", "desc")->limit(3)->get(),
                ]);
    }

    function blog(){
    
        return view("page.blog", [
            'post' => Post::where([['status', '=', 1], ['post_status', '=', 2]])->get(),
        ]);
    }

    function post($date, $post){
    
        return view("page.post", [
            'post' => Post::where([['status', '=', 1], ['post_status', '=', 2], ['post_date', '=', $date], ['slug', '=', $post]])->first(),
        ]);
    }

    function ceo(){
    
        return view("page.ceo", [
            'company' => company::where('status', 1)->first([
                'ceo_greet'
            ]),
        ]);
    }
    function advisor(){
    
        return view("page.advisor", [
            'company' => company::where('status', 1)->first([
            'profile',]),
        ]);
    }
    function affiliations(){
    
        return view("page.affiliations");
    }
    function awards(){
    
        return view("page.awards",[
            'award' => award::where('status', 1)->get(),
        ]);
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
    
        return view("page.history", [
            'company' => company::where('status', 1)->first([
                'history'
            ]),
        ]);
    }
    function media(){
    
        return view("page.media");
    }
    function portfolio(){
    
        return view("page.portfolio", [
            'portfolio' => portfolio::where('status', 1)->orderBy("created_at", "desc")->get(),
        ]);
    }

    function portfolio_p($date, $portfolio){
    
        return view("page.portfolio-p", [
            'portfolio' => portfolio::where([['status', '=', 1], ['created_at', '=', $date], ['slug', '=', $portfolio]])->first(),
        ]);

    }
    
    function product(){
        
        return view("page.product", [
            'product' => product::where('status', 1)->get(),
        ]);
    }

    function product_p($product){
    
        return view("page.product-p", [
            'product' => product::where([['status', '=', 1], ['slug', '=', $product]])->first(),
        ]);

    }

    function report(){
    
        return view("page.report");
    }
    function certifications(){
    
        return view("page.certifications", [
            'certification' => certification::where('status', 1)->get(),
        ]);
    }
    function structure(){
    
        return view("page.structure", [
            'company' => company::where('status', 1)->first([
                'structure_org',
                'nama'
            ]),
        ]);
    }
    function visimisi(){
    
        return view("page.visimisi", [
            'company' => company::where('status', 1)->first([
                'visi',
                'misi'
            ]),
        ]);
    }
    function contactus(){
    
        return view("page.contactus", [
            'company' => company::where('status', 1)->first([
                'email',
            ]),
        ]);
    }
    
    function changeLang($langcode){
    
        App::setLocale($langcode);
        session()->put("lang_code",$langcode);
        return redirect()->back();
    }  
}
