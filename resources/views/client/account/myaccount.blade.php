@extends('client.master')
@section('content')

    <div class="content-wraper" style="margin-top:-20px">
        <div class="container">
            <div class="row">
                <div class="col-lg-2" style="background-color: #f7f7f7">
                    <div class="profile">


                        <div class="">
                            <div class="float-left">
                                <a class="user-page-brief__edit" href="/user/account/profile"><img width="50px"
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

                                <li><a href="/my-orders"><img src="https://img.icons8.com/dusk/32/000000/list.png" /> Đơn
                                        mua</a></li>
                                <li><a href="#"><img
                                            src="https://img.icons8.com/ios-filled/32/fa314a/appointment-reminders--v1.png" />
                                        Thông báo</a></li>

                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-10">

                    <div class="border"></div>
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <h4>Hồ sơ của tôi</h4>
                                    <p>Quản lý thông tin hồ sơ để bảo mật tài khoản</p>
                                    <hr>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <form action="/my-account/update/{{ $account->id }}" method="POST">
                                        @csrf
                                        <div class="form-group row">
                                            <label for="username" class="col-4 col-form-label">Họ và tên lót</label>
                                            <div class="col-8">
                                                <input id="username" name="firstname" placeholder=""
                                                    class="form-control here" value="{{ $account->firstname }}" required="required" type="text">
                                            </div>
                                        </div>
                                      
                                        <div class="form-group row">
                                            <label for="lastname" class="col-4 col-form-label">Tên</label>
                                            <div class="col-8">
                                                <input id="lastname" name="lastname" placeholder=""
                                                    class="form-control here" value="{{ $account->lastname }}" type="text">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="text" class="col-4 col-form-label">Số điện thoại</label>
                                            <div class="col-8">
                                                <input id="text" name="phone" placeholder=""
                                                    class="form-control here" value="{{ $account->phone }}" required="required" type="number">
                                            </div>
                                        </div>
                                       
                                        <div class="form-group row">
                                            <label for="email" class="col-4 col-form-label">Email</label>
                                            <div class="col-8">
                                                <input id="email" name="email" placeholder="" value="{{ $account->email }}" class="form-control here"
                                                    required="required" type="text">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="website" class="col-4 col-form-label">Địa chỉ</label>
                                            <div class="col-8">
                                                <textarea id="publicinfo" name="address"  cols="40" rows="4"
                                                    class="form-control">{{ $account->address }}</textarea>
                                            </div>
                                        </div>
                                       
                                       
                                        <div class="form-group row">
                                            <div class="offset-4 col-8">
                                                <button name="submit" type="submit" class="btn btn-primary">Cập nhật thông tin</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                        </div>
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
