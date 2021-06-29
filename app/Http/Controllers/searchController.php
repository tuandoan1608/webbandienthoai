<?php

namespace App\Http\Controllers;

use App\category;
use App\Components\converString;
use App\Components\convertstring;
use App\product;
use App\producttype;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class searchController extends Controller
{
    public function search(Request $request)
    {
        $product = product::whereIn('producttype_id', $request->brand)
            ->paginate(20);

        $cate = category::where('slug', $slug)->first();
        $brand = producttype::where('categori_id', $cate->id)->get();
    
        return back()->with(compact('product'));
    }
    public function searchByName(Request $request)
    {
        $con = new converString();
       
        $product = product::where('name', 'like', "%{$request->search }%")->get();
        return view('client.search.index', compact('product',));
    }
    public function searchindex(Request $request)
    {
        $q = product::query();
        $dot = $request->dotxettuyen;
        $status = $request->matrangthai;
        $mahoso = $request->mahoso;
        $hoten = $request->hoten;
        $email = $request->email;
        $dienthoai = $request->dienthoai;
        $socmnd = $request->socmnd;

        $q->when($dot, function ($query) use ($dot) {
            $query->where('dotxettuyen', $dot);
        });
        $q->when($status, function ($query) use ($status) {
            $query->where('matrangthai', $status);
        });
        $q->when($mahoso, function ($query) use ($mahoso) {
            $query->where('mahoso', $mahoso);
        });
        $q->when($hoten, function ($query) use ($hoten) {
            $query->where('hoten', 'LIKE', '%' . $hoten . '%');
        });
        $q->when($email, function ($query) use ($email) {
            $query->where('email', $email);
        });
        $q->when($dienthoai, function ($query) use ($dienthoai) {
            $query->where('dienthoai', $dienthoai);
        });
        $q->when($socmnd, function ($query) use ($socmnd) {
            $query->where('socmnd', $socmnd);
        });

        $hoso = $q->get();
    }
    function getSearchAjax(Request $request)
    {

        if ($request->get('query')) {
            $query = $request->get('query');
            $data = product::where('name', 'LIKE', "%{$query}%")
                ->get();
            if (count($data)>=1) {
                $output = '<ul class="dropdown-menu" style="display:block;  position:relative">';
                foreach ($data as $row) {
                    $output .= '
               <li style="width:464px; " ><img width="80px" height="80px" src="' . Storage::url($row->image) . '"></img>
               <a href="/san-pham/' . $row->slug . '">' . $row->name . '</a></li>
               
               <a href="/compare/add/' . $row->id . '" style="float-right">Thêm so sánh</a>
               ';
                }
                $output .= '</ul>';
            } else {
                $output = '<ul class="dropdown-menu" style="display:block; position:relative">';
            
                    $output .= '
               <li style="width:464px; text-align: center;">không có sản phẩm nào cho từ khoá "' . $query . '"
               </li>';
                
                $output .= '</ul>';
            }
            echo $output;
        }
    }
}
