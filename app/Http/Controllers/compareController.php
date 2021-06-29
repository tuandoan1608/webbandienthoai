<?php

namespace App\Http\Controllers;

use App\Compare;
use App\product;
use Illuminate\Http\Request;
use Session;

use function Symfony\Component\String\b;

class compareController extends Controller
{
    public function index()
    {
        $oldcompare=Session::get('compare');
        $compares=new Compare($oldcompare);
        $compare=$compares->item;
        return view('client.compare.index',compact('compare'));
    }
    public function add(Request $request ,$id)
    {
        
        $product=product::find($id);
        $oldcompare=Session('compare')? Session::get('compare'):null;
        $compare=new Compare($oldcompare);
        $compares=$compare->item;
        if($compares){
            if(count($compares)==2){
                $request->session()->forget('compare');
                $oldcompare=Session('compare')? Session::get('compare'):null;
                $compare=new Compare($oldcompare);
                $compare->add($product,$id);
                $request->session()->put('compare',$compare);
            }else{
                $compare->add($product,$id);
                $request->session()->put('compare',$compare);
            }
        }else{
            $compare->add($product,$id);
            $request->session()->put('compare',$compare);
        }
       return back();
    }
    public function delete($id)
    {
        $oldcompare=Session::has('compare')?Session::get('compare'):null;
        $compare= new Compare($oldcompare);
        $compare->delete($id);
        Session::put('compare', $compare);
        return back();
    }
    
}
