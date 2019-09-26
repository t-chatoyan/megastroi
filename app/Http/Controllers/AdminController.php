<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Homedata;
use App\HomeUl;
use App\AboutAS;
use Illuminate\Http\Request;

class AdminController extends Controller
{
//    about as
    public function index(Request $request){
        return redirect('admin/about');
    }
//    about as
    public function about(Request $request){
        $about = AboutAS::first();
        return view('auth/admin/about' , ['about' => $about]);
    }
    public function aboutSave(Request $request){
        $text = $request['text'];

        $about_new = AboutAS::first();
        $about_id =  $about_new['id'];
        if($about_id){
            $about = AboutAS::find($about_id);
        }else{
            $about = new AboutAS;
        }
        $about['text'] = $text;
        $about->save();
        return redirect()->route('adminAbout');
    }
//    contact

    public function contact(Request $request){
        $contact = Contact::first();
        return view('auth/admin/contact' , ['contact' => $contact]);
    }
    public function contactSave(Request $request){
        $phone = $request['phone'];
        $fax= $request['fax'];
        $email = $request['email'];
        $address = $request['address'];

        $contact_new = Contact::first();
        $contact_id =  $contact_new['id'];
        if($contact_id){
            $contact = Contact::find($contact_id);
        }else{
            $contact = new Contact;
        }
        $contact['phone'] = $phone;
            $contact['fax'] = $fax;
            $contact['email'] = $email;
            $contact['address'] = $address;
        $contact->save();
        return redirect()->route('contact');
    }

//    home data

    public function homeData(Request $request){
        return view('auth/admin/homeData');
    }

    public function homeDataView(){
        $datas = Homedata::all()->toArray();
        return view('auth/admin/homeDataView' , ['datas' => $datas]);
    }

    public function homeDatadelete($id){
        $dataDelete = Homedata::find($id);
        $dataDelete->delete();
        return redirect()->route('homeDataView');
    }

    public function homeDataSave(Request $request){
        $name = $request['name'];
        $description= $request['description'];

        $homeData_id =  $request['id'];
        if($homeData_id){
            $homeData = Homedata::find($homeData_id);
        }else{
            $homeData = new Homedata();
        }
        $homeData['name'] = $name;
        $homeData['description'] = $description;
        $homeData->save();
        return redirect()->route('homeDataView');
    }

//    home content

    public function homeUl(Request $request){
        return view('auth/admin/homeUl');
    }

    public function homeUlView(){
        $datas = HomeUl::all()->toArray();
        return view('auth/admin/homeUlView' , ['datas' => $datas]);
    }

    public function homeUldelete($id){
        $dataDelete = HomeUl::find($id);
        $dataDelete->delete();
        return redirect()->route('homeUlView');
    }

    public function homeUlSave(Request $request){
        $leftName = $request['left_name'];
        $rightName= $request['right_name'];

        $homeUl_id =  $request['id'];
        if($homeUl_id){
            $homeUl = HomeUl::find($homeUl_id);
        }else{
            $homeUl = new HomeUl();
        }
        $homeUl['left_name'] = "$leftName";
        $homeUl['right_name'] = "$rightName";
        $homeUl->save();
        return redirect()->route('homeUlView');
    }
}
