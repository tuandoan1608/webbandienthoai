@extends('client.master')
@section('content')
    <div class="breadcrumb-area">
        <div class="container">
            <div class="breadcrumb-content">
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li class="active">Danh sách yêu thích</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="content-wraper">
        <div class="container">

            <div class="wishlist-area pt-60 pb-60">
                <div class="container">
                    <div class="row">
                        <div class="col-12">

                            <div class="table-content table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th class="li-product-remove">Xoá</th>
                                            <th class="li-product-thumbnail">Hình ảnh</th>
                                            <th class="cart-product-name">Sản phẩm</th>
                                            <th class="li-product-price">Giá</th>

                                            <th class="li-product-add-cart">Action</th>
                                        </tr>
                                    </thead>

                                    @if ($wishlists != null)
                                        <tbody>
                                            @foreach ($wishlists as $item)
                                                <tr>
                                                    <td class="li-product-remove"><a class="delete" data-url="/wishlist/remote/{{ $item['item']['id']}}"><i
                                                                class="fa fa-times"></i></a></td>
                                                    <td class="li-product-thumbnail"><a href="#"><img width="100px"
                                                                height="100px"
                                                                src="{{ Storage::url($item['item']['image']) }}"
                                                                alt=""></a></td>
                                                    <td class="li-product-name"><a href="#">{{ $item['item']['name'] }}
                                                        </a></td>
                                                    <td class="li-product-price"><span
                                                            class="amount">{{ number_format($item['item']['price']) }}
                                                            đ</span></td>

                                                    <td class="li-product-add-cart"><a href="/san-pham/{{ $item['item']['slug'] }}">Xem chi tiết</a></td>
                                                </tr>
                                            @endforeach


                                        </tbody>
                                    @else 
                                  <tbody>
                                      <tr><td colspan="5">Không có sản phẩm nào trong danh sách yêu thích</td></tr>
                                  </tbody>
                                    @endif


                                </table>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>




    @endsection
    @section('script')

        <script>
            $('.delete').on('click',function(){
                var url=$(this).data('url');
                var token=document.head.querySelector('[name=csrf-token]').content;
                var that=$(this);
                $.ajax({
                    url:url,
                    success:function(){
                      location.reload();
                    }
                })
            })
        </script>
    @endsection
