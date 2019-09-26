<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AsphaltImage;
use App\Partner;

class UploadController extends Controller
{
    /**
     * UploadController constructor.
     */
    public function __construct(){

    }

    public function index(Request $request){
        return view('auth/admin/upload');
    }

    public function upload(Request $request){
        $fileName = null;
        if (request()->hasFile('file')) {
            $file = request()->file('file');
            $fileName = 'asphalt' . time() . '.' . $file->getClientOriginalExtension();
            $file->move( public_path().'/images', $fileName);
        }

        if( $request['name'] && $fileName ){
            $images = new AsphaltImage();

            $images->name = $request['name'];
            $images->img = $fileName;

            $images->save();
        }

        return redirect()->route('uploadView');
    }

    public function uploadView(){
        $data = AsphaltImage::all()->toArray();
        return view('auth/admin/uploadView' , ['images' => $data]);
    }

    public function delete( $id ){

        $img = AsphaltImage::find($id);
        if($img) {
            $image_path = public_path() . '/images/' . $img['img'];
            unlink($image_path);
            $img->delete();
        }
        return redirect()->route('uploadView');
    }
    public function partners(Request $request){
        return view('auth/admin/partners');
    }

    public function partnersSave(Request $request){
        $fileName = null;
        if (request()->hasFile('file')) {
            $file = request()->file('file');
            $fileName = 'asphalt' . time() . '.' . $file->getClientOriginalExtension();
            $file->move( public_path().'/images', $fileName);
        }

        if( $request['name'] && $fileName ){
            $images = new Partner();

            $images->name = $request['name'];
            $images->img = $fileName;

            $images->save();
        }

        return redirect()->route('partnersView');
    }

    public function partnersView(){
        $data = Partner::all()->toArray();
        return view('auth/admin/partnersView' , ['images' => $data]);
    }

    public function partnersdelete( $id ){
        $img = Partner::find($id);
        if($img) {
            $image_path = public_path() . '/images/' . $img['img'];
            unlink($image_path);
            $img->delete();
        }
        return redirect()->route('partnersView');
    }
}
