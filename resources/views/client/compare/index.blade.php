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

            <div class="row">
                @if ($compare != null)
                    @if (count($compare) == 1)
                        @foreach ($compare as $items)


                            <div class="col-lg-4 col-md-4 col-sm-6 mt-40">
                                <!-- single-product-wrap start -->
                                <div class="" style="position: relative">
                                    <div class="product-images">
                                        <a href="/san-pham/{{ $items['item']['slug'] }}">
                                            <img width="250px" height="300px"
                                                src="{{ Storage::url($items['item']['image']) }}"
                                                alt="Li's Product Image">
                                        </a>
                                        <a href="/compare/remove/{{ $items['item']['id'] }}"
                                            style="position: absolute;top:0;right:0"><i>x</i></a>
                                    </div>
                                    <div class="product_desc">
                                        <div class="product_desc_info">

                                            <h4><a class="product_name"
                                                    href="/san-pham/{{ $items['item']['slug'] }}">{{ $items['item']['name'] }}</a>
                                            </h4>
                                            <div class="price-box">
                                                <span class="new-price">{{ number_format($items['item']['price']) }}
                                                    .đ</span>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                                <br>
                                <div>
                                    <table class="table table-bordered">
                                        <thead>
                                            <th colspan="2">Thông số kĩ thuật</th>
                                        </thead>
                                        <tbody>
                                            @foreach ($items['item']->getspe as $spe)
                                                <tr>
                                                    <td>
                                                        <p>{{ $spe->spename->name }}</p>
                                                    </td>
                                                    <td>{{ $spe->content }}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>

                            </div>



                        @endforeach
                        <div class="col-lg-4 col-md-4 col-sm-6 mt-40">
                            <!-- single-product-wrap start -->
                            <div class="imgcompare" style="position: relative;height:377px">
                                <button type="button" class="btncompare" data-toggle="modal" data-target="#exampleModal">
                                    <img src="https://img.icons8.com/material-two-tone/48/000000/plus-math--v1.png" />
                                </button>

                            </div>
                            <br>
                            <div>
                                <table class="table table-bordered">
                                    <thead>
                                        <th colspan="2">Thông số kĩ thuật</th>
                                    </thead>
                                    <tbody>

                                        <tr>
                                            <td>
                                                <p></p>
                                            </td>
                                            <td></td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                            <!-- single-product-wrap end -->
                        </div>
                    @elseif(count($compare) ==2)
                        @foreach ($compare as $items)


                            <div class="col-lg-4 col-md-4 col-sm-6 mt-40">
                                <!-- single-product-wrap start -->
                                <div class="" style="position: relative">
                                    <div class="product-images ">
                                        <a href="/san-pham/{{ $items['item']['slug'] }}">
                                            <img width="250px" height="300px"
                                                src="{{ Storage::url($items['item']['image']) }}"
                                                alt="Li's Product Image">
                                        </a>

                                    </div>
                                    <a href="/compare/remove/{{ $items['item']['id'] }}"
                                        style="position: absolute;top:0;right:0"><i>x</i></a>
                                    <div class="product_desc">
                                        <div class="product_desc_info">

                                            <h4><a class="product_name"
                                                    href="/san-pham/{{ $items['item']['slug'] }}">{{ $items['item']['name'] }}</a>
                                            </h4>
                                            <div class="price-box">
                                                <span class="new-price">{{ number_format($items['item']['price']) }}
                                                    .đ</span>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                                <br>
                                <div>
                                    <table class="table table-bordered">
                                        <thead>
                                            <th colspan="2">Thông số kĩ thuật</th>
                                        </thead>
                                        <tbody>
                                            @foreach ($items['item']->getspe as $spe)
                                                <tr>
                                                    <td>
                                                        <p>{{ $spe->spename->name }}</p>
                                                    </td>
                                                    <td>{{ $spe->content }}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>

                            </div>



                        @endforeach



                    @endif
                @else
                    <div class="col-lg-4 col-md-4 col-sm-6 mt-40">
                        <!-- single-product-wrap start -->
                        <div class="imgcompare" style="position: relative;height:377px">
                        <button type="button" class="btncompare" data-toggle="modal" data-target="#exampleModal">
                            <img src="https://img.icons8.com/material-two-tone/48/000000/plus-math--v1.png" />
                        </button>

                    </div>
                        <br>
                        <div>
                            <table class="table table-bordered">
                                <thead>
                                    <th colspan="2">Thông số kĩ thuật</th>
                                </thead>
                                <tbody>

                                    <tr>
                                        <td>
                                            <p></p>
                                        </td>
                                        <td></td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                        <!-- single-product-wrap end -->
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 mt-40">
                        <!-- single-product-wrap start -->
                        <div class="imgcompare" style="position: relative;height:377px">
                                <button type="button" class="btncompare" data-toggle="modal" data-target="#exampleModal">
                                    <img src="https://img.icons8.com/material-two-tone/48/000000/plus-math--v1.png" />
                                </button>

                            </div>
                        <br>
                        <div>
                            <table class="table table-bordered">
                                <thead>
                                    <th colspan="2">Thông số kĩ thuật</th>
                                </thead>
                                <tbody>

                                    <tr>
                                        <td>
                                            <p></p>
                                        </td>
                                        <td></td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                        <!-- single-product-wrap end -->
                    </div>
                @endif

            </div>



        </div>


        <!-- Button trigger modal -->


        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 style="text-align: center" class="modal-title" id="exampleModalLabel">Chập tên để tìm</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                              <span class="input-group-text"><img src="https://img.icons8.com/ios-glyphs/30/000000/search.png"/></span>
                            </div>
                            <input type="text" class="form-control search-input" placeholder="Nhập từ khoá tìm kiếm">
                          </div>

                        <div class="mb-3"  id="productList">

                        </div>
                    </div>
                   
                </div>
            </div>
        </div>

    @endsection
    @section('sr')
        <script src="/theme/client/js/jquery.countdown.min.js"></script>
        <script>
            $(document).ready(function() {

                $('.search-input').keyup(function() { //bắt sự kiện keyup khi người dùng gõ từ khóa tim kiếm
                    var query = $(this).val(); //lấy gía trị ng dùng gõ
                    if (query != '') //kiểm tra khác rỗng thì thực hiện đoạn lệnh bên dưới
                    {   let token = document.head.querySelector('[name=csrf-token]').content;
                        $.ajax({
                            url: "/compare/search", // đường dẫn khi gửi dữ liệu đi 'search' là tên route mình đặt bạn mở route lên xem là hiểu nó là cái j.
                            method: "POST", // phương thức gửi dữ liệu.
                            data: {
                                query: query,
                                _token: token
                            },
                            success: function(data) { //dữ liệu nhận về
                                $('#productList').fadeIn();
                               
                                    $('#productList').html( data); 
                            }
                        });
                    }
                });

                $(document).on('click', 'li', function() {
                 
                    $('#productList').fadeOut();
                });

            });

        </script>
    @endsection
