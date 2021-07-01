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
            ->get();
        $out="";
        foreach($product as $item){
           $out.=   '<div class="col-lg-4 col-md-4 col-sm-6 mt-40">
                                                <!-- single-product-wrap start -->
                                                <div class="single-product-wrap">
                                                    <div class="product-image">
                                                        <a href="/san-pham/'. $item->slug .'">
                                                            <img src="'. Storage::url($item->image) .'"></a>
                                                    </div>
                                                    <div class="product_desc">
                                                        <div class="product_desc_info">

                                                            <h4><a class="product_name"
                                                                    href="/san-pham/'. $item->slug .'">'. $item->name .'</a>
                                                            </h4>
                                                            <div class="price-box">
                                                                <span class="new-price">'. number_format($item->price) .'
                                                                    .đ</span>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="add-actions">
                                                        <ul class="add-actions-link">
                                                            <li class="add-cart active"><button type="button" onclick="compare('. $item->id  .');" id="compare" style="background: none;border:none" data-id="'. $item->id .'" >
                                                                So sánh
                                                            </button></li>
                                                            <li><a class="links-details" href="/wishlist/'. $item->id .'"><i class="fa fa-heart-o"></i></a></li>

                                                        </ul>
                                                    </div>
                                                </div>
                                                <!-- single-product-wrap end -->
                                            </div>';

        }


        return response($out);
    }
    public function searchByName(Request $request)
    {
        $con = new converString();

        $product = product::where('name', 'like', "%{$request->search }%")->get();
        return view('client.search.index', compact('product',));
    }
    public function searchindex(Request $request)
    {

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
