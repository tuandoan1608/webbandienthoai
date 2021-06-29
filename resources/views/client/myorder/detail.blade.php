@extends('client.master')
@section('content')

    <div class="content-wraper" style="margin-top:-20px">
        <div class="container">
            <div class="row">
                <div class="col-lg-2" style="background-color: #f7f7f7">
                    <div class="profile">


                        <div class="">
                            <div class="float-left">
                                <a class="user-page-brief__edit" href="/my-account"><img width="50px"
                                        height="50px" src="/theme/client/images/about-us/icon/user.png" alt="">
                            </div>
                            <div class="user-page-brief__username">sin12123</div>
                            <div><svg width="12" height="12" viewBox="0 0 12 12" xmlns="http://www.w3.org/2000/svg"
                                    style="margin-right: 4px;">
                                    <path
                                        d="M8.54 0L6.987 1.56l3.46 3.48L12 3.48M0 8.52l.073 3.428L3.46 12l6.21-6.18-3.46-3.48"
                                        fill="#9B9B9B" fill-rule="evenodd"></path>
                                </svg>Sửa hồ sơ
                                </a>
                            </div>
                        </div>

                    </div>
                    <div class="profile-sidbar">
                        <div>
                            <ul>
                              
                                <li><a href="/my-orders"><img src="https://img.icons8.com/dusk/32/000000/list.png" /> Đơn mua</a></li>
                                <li><a href="#"><img src="https://img.icons8.com/ios-filled/32/fa314a/appointment-reminders--v1.png" />
                                    Thông báo</a></li>

                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-10">
                    <div class="myorder-top">
                        <div class="row">
                            <div class="col-md-2">
                                <a href="/my-orders">Trở lại</a>
                            </div>
                            <div class="col-md-10 ">

                                <div class="order-code float-right">
                                   @if ($order->status==1)
                                   <p style="color: black">Đơn hàng đã đặt</p>
                                   @elseif ($order->status==2)
                                   <p style="color: black">Đơn hàng đã xác nhận</p>   
                                   @elseif ($order->status==3)
                                   <p style="color: black">Đơn hàng đã xuất kho</p>   
                                   @elseif ($order->status==4)
                                   <p style="color: black">Đơn hàng đã giao</p>   
                                   @elseif ($order->status==5)
                                   <p style="color: black">Đơn hàng đã hoàn thành</p>   
                                   @endif
                                </div>
                                <div class="gach float-right">|</div>
                                <div class="order-status float-right">
                                    <p style="color: black">Mã đơn hàng: <span style="color: red">{{ $order->order_code }}</span></p>
                                </div>




                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="form-group">
                            <ul class="progressbar">
                                @if ($order->status == 1)
                                    <li class="complete  l1">Đơn hàng đã đặt</li>
                                    <li class="active l2">Đang đóng gói</li>
                                    <li class=" l3">Xuất kho</li>
                                    <li class=" l3">Giao hàng</li>
                                    <li class=" l3">Hoàn thành</li>
                                @elseif ($order->status==2)
                                    <li class="complete l1">Đơn hàng đã đặt</li>
                                    <li class="complete l2">Đã đóng gói</li>
                                    <li class="active l3">Đang xuất kho</li>
                                    <li class=" l3">Giao hàng</li>
                                    <li class=" l3">Hoàn thành</li>
                                @elseif ($order->status==3)
                                    <li class="complete  l1">Đơn hàng đã đặt</li>
                                    <li class="complete l2">Đã đóng gói</li>
                                    <li class="complete l3">Đã Xuất kho</li>
                                    <li class="active l3">Đang giao hàng</li>
                                    <li class=" l3">Hoàn thành</li>
                                @elseif ($order->status==4)
                                    <li class="active l1">Đơn hàng đã đặt</li>
                                    <li class="complete l2">Đóng gói</li>
                                    <li class="complete l3">Đã Xuất kho</li>
                                    <li class="complete l3">Đã giao hàng</li>
                                    <li class="active l3">Hoàn thành</li>
                                @elseif ($order->status==5)
                                    <li class="complete l1">Đơn hàng đã đặt</li>
                                    <li class="complete l2">Đã đóng gói</li>
                                    <li class="complete l3">Đã Xuất kho</li>
                                    <li class="complete l3">Đã giao hàng</li>
                                    <li class="complete  l3">Hoàn thành</li>
                                @endif
                            </ul>
                        </div>

                    </div>
                    <div style="background-color: rgb(248, 218, 229);height:80px;margin-top:100px">

                    </div>
                    <div class="pg">
                        <img width="100%"  src="/theme/client/images/about-us/pg-order.jpg" alt="">
                    </div>
                    <div class="address">
                        <span>Địa chỉ nhận hàng</span>
                        <p class="thongtin">{{ $order->firstname }} {{ $order->lastname }}</p>
                        <p class="thongtin">{{ $order->phone }}</p>
                        <p class="thongtin">{{ $order->address }}</p>
                    </div>
                    <hr style="margin: 5px">
                    <div>

                        @foreach ($orderdetail as $item)
                            <div class="row">
                                <div class="sanpham float-left">

                                    <img class="float-left" width="100px" height="100px"
                                        src="{{ Storage::url($item->productimage) }}" alt="">
                                    <p class="thongtin float-left">{{ $item->productname }}</p>
                                    <p class="thongtin ">Dung lượng: {{ $item->size }} GB, màu: {{ $item->color }}</p>
                                    <p class="thongtin ">x{{ $item->soluong }}</p>

                                </div>
                                <p style="color: red; position: absolute;right:10px;padding-top:10px">
                                    {{ number_format($item->total_price) }} đ</p>
                            </div>
                        @endforeach

                    </div>
              
                    <div>
                        <table class="table table-border float-right">
                            <tr>
                                <td>Tổng tiền hàng</td>
                                <td>{{ number_format($order->amount) }} đ</td>
                            </tr>
                            <tr>
                                <td>Tổng số tiền</td>
                                <td><p style="color: red">{{ number_format($order->amount) }} đ</p></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>




@endsection
@section('sr')
    <script src="/theme/client/js/jquery.countdown.min.js"></script>
    <script>


    </script>
@endsection
