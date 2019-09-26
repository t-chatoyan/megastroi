<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Work;
use App\WorkPrice;

class WorkController extends Controller
{
    public function work(Request $request){
        return view('auth/admin/work/work');
    }

    public function workView(){
        $datas = Work::all()->toArray();
        return view('auth/admin/work/workView' , ['works' => $datas]);
    }

    public function workdelete($id){
        $dataDelete = Work::find($id);
        $dataDelete->delete();
        return redirect()->route('workView');
    }

    public function workSave(Request $request){
        $name = $request['name'];

        $work = new Work();

        $work['name'] = $name;
        $work->save();
        return redirect()->route('workView');
    }



    public function workPrice(Request $request){
        $datas = Work::all()->toArray();
        return view('auth/admin/work/workPrice' , ['works' => $datas]);
    }

    public function workPriceView(){
        $work = Work::with('workPrice')->get();
        return view('auth/admin/work/workPriceView' , [ 'workPrices' => $work]);
    }

    public function workPricedelete($id){
        $dataDelete = WorkPrice::find($id);
        $dataDelete->delete();
        return redirect()->route('workPriceView');
    }

    public function workPriceSave(Request $request){
        $name = $request['name'];
        $workId = $request['workId'];
        $price = $request['price'];

        $work = new WorkPrice();

        $work['work_id'] = $workId;
        $work['name'] = $name;
        $work['price'] = $price;
        $work->save();
        return redirect()->route('workPriceView');
    }
}
