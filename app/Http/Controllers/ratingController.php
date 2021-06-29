<?php

namespace App\Http\Controllers;

use App\rating;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ratingController extends Controller
{
    public function postRating(Request $request)
    {
       $yourRating= rating::where('product_id',$request->product_id)->where('custommer_id',Auth::guard('custommer')->user()->id)->count();
       if($yourRating>0){
        $rating=rating::where('product_id',$request->product_id)->where('custommer_id',Auth::guard('custommer')->user()->id)->first();
        $rating->product_id=$request->product_id;
        $rating->custommer_id=Auth::guard('custommer')->user()->id;
        $rating->rating=$request->star;
        $rating->comment=$request->comment;
        $rating->save();
       }else{
           $rating =new rating();
           $rating->product_id=$request->product_id;
           $rating->custommer_id=Auth::guard('custommer')->user()->id;
           $rating->rating=$request->star;
           $rating->comment=$request->comment;
           $rating->save();
       }
        return back();
    }
}
