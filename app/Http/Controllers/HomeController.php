<?php

namespace App\Http\Controllers;

use App\Homedata;
use App\HomeUl;
use App\AsphaltImage;
use App\Work;
use App\AboutAS;
use App\Partner;
use App\Contact;


class HomeController extends Controller
{
    public $contact;

    public function __construct(){
        $this->contact = Contact::first();
    }

    public function index(){

        $datas    = Homedata::all()->toArray();
        $homeData = HomeUl::all()->toArray();
        $images   = AsphaltImage::all()->toArray();
        return view('front/index' , ['datas' => $datas , 'images' => $images , 'homeData' => $homeData , 'contact' => $this->contact]);
    }

    public function price(){
        $work = Work::with('workPrice')->get();
        return view('front/price' , [ 'workPrices' => $work , 'contact' => $this->contact]);
    }

    public function about(){
        $about = AboutAS::first();
        return view('front/about' , [ 'about' => $about , 'contact' => $this->contact]);
    }

    public function partners(){
        $partners = Partner::all()->toArray();
        return view('front/partner' , [ 'partners' => $partners , 'contact' => $this->contact]);
    }
    public function contact(){
        return view('front/contact' , [ 'contact' => $this->contact ]);
    }
}
