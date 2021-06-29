@extends('client.master')
@section('content')
    <div class="breadcrumb-area">
        <div class="container">
            <div class="breadcrumb-content">
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li class="active">Đơn hàng của tôi</li>
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
                            <form action="#">
                                <div class="table-content table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                          
                                                <th class="li-product-thumbnail">Mã đơn hàng</th>
                                                <th class="cart-product-name">Tổng giá</th>
                                                <th class="li-product-price">Trạng thái</th>
                                                <th class="li-product-stock-status">Ngày mua</th>
                                                <th class="li-product-add-cart"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                           @foreach ($myorder as $item)
                                           <tr>
                                            <td class="li-product-remove">{{ $item->order_code }}</td>
                                            <td class="li-product-price">{{ number_format($item->amount) }} đ</td>
                                            <td class="li-product-stock-status">
                                                @if ($item->status==5)
                                                    Hoàn thành
                                                @elseif ($item->status==4)
                                                Xuất kho
                                                @elseif ($item->status==3)
                                                Đã đóng gói
                                                @elseif ($item->status==2)
                                                Đã xác nhận
                                                @else
                                                Chưa xác nhận
                                                @endif
                                            </td>
                                            <td class="">{{ $item->created_at }}</td>
                                            <td class="">
                                                @if ($item->status==1)
                                                <a href="/my-oders/huy-don-hang/{{ $item->id }}">Huỷ đơn hàng</a>
                                                <a href="/my-oders/chi-tiet/{{ $item->id }}">Xem chi tiết</a>
                                                @else
                                                <a href="/my-oders/chi-tiet/{{ $item->id }}">Xem chi tiết</a> 
                                                @endif
                                            </td>
                                            
                                        </tr>
                                           @endforeach
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
          
        </div>


   

    @endsection
    @section('sr')
        <script src="/theme/client/js/jquery.countdown.min.js"></script>
        <script>
            $("#checkout").on('click', function() {
                let qty = $('#qty').val();
                let token = document.head.querySelector('[name=csrf-token]').content;
                let id = $('#checkout').val();
                $.ajax({
                    url: '/carts/' + id,
                    type: 'post',
                    data: {
                        id: id,
                        qty: qty,
                        _token: token
                    },
                    success: function(data) {
                        if (data.code == 200) {
                            // window.location.href('http://127.0.0.1:8000/checkout');
                            window.location.replace('/checkout');
                        }
                    }
                })

            })

        </script>
    @endsection
