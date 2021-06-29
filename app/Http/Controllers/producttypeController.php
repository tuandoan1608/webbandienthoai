<?php

namespace App\Http\Controllers;

use App\category;
use App\Components\Recusive;
use App\Http\Requests\producttypeRequest;
use App\producttype;
use Illuminate\Http\Request;
use Laracasts\Flash\Flash;
use Illuminate\support\Str;
class producttypeController extends Controller
{
    private $producttype;
    private $category;
    public function __construct(producttype $producttype,category $category)
    {
        $this->category = $category;
       $this->producttype=$producttype;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        $producttype= $this->producttype->paginate(10);
        
       return view('admin.productTypes.list',compact('producttype'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $category=category::where('status',1)->get();
       
        return view('admin.productTypes.add',compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(producttypeRequest $request)
    {
        $data=$request->all();
        
        $data['slug']=Str::slug($request->name);
        if(producttype::create($data)){
            Flash::success('Thêm thành công');
            return back();
        }else{
            Flash::error('có lỗi xảy ra');
           
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }
    public function getcate()
    {   
        $this->authorize('category-list');
        $data = category::where('status', 1)->get();
        $recusive = new Recusive($data);
        $option = $recusive->categoryRecure();
        return $option;
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $producttype=producttype::find($id);
        $category=category::where('status',1)->get();
        return response()->json(['category'=>$category,'producttype'=>$producttype],200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(producttypeRequest $request, $id)
    
    {   
        $producttype=producttype::find($id);
        $data=$request->all();
        $data['slug']=Str::slug($request->name);
       
        
        $producttype->update([
            'name'=>$request->name,
            'slug'=>$request->name,
            'categori_id'=>$request->categori_id,
            'status'=>$request->status
        ]);
       
        return response()->json(['success'=>'Cập nhật thành công']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $producttype=producttype::find($id);
       $producttype->delete();
       return response()->json(['code'=>200]);
    }



    public function addloai()
    {
        $option = $this->getcate();
        return response()->json(['option' => $option]);
    }
    public function saveloai(Request $request)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->name);
        $this->producttype->create($data);
        return response()->json(['success' => 'thêm thành công']);
    }
}
