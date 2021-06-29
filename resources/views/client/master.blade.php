<!doctype html>
<html class="no-js" lang="zxx">

<!-- index-431:41-->

<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Home Version Four || limupa - Digital Products Store ECommerce Bootstrap 4 Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png">
    <!-- Material Design Iconic Font-V2.2.0 -->
    <link rel="stylesheet" href="/theme/client/css/material-design-iconic-font.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="/theme/client/css/font-awesome.min.css">
    <!-- Font Awesome Stars-->
    <link rel="stylesheet" href="/theme/client/css/fontawesome-stars.css">
    <!-- Meanmenu CSS -->
    <link rel="stylesheet" href="/theme/client/css/meanmenu.css">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="/theme/client/css/owl.carousel.min.css">
    <!-- Slick Carousel CSS -->
    <link rel="stylesheet" href="/theme/client/css/slick.css">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="/theme/client/css/animate.css">
    <!-- Jquery-ui CSS -->
    <link rel="stylesheet" href="/theme/client/css/jquery-ui.min.css">
    <!-- Venobox CSS -->
    <link rel="stylesheet" href="/theme/client/css/venobox.css">
    <!-- Nice Select CSS -->
    <link rel="stylesheet" href="/theme/client/css/nice-select.css">
    <!-- Magnific Popup CSS -->
    <link rel="stylesheet" href="/theme/client/css/magnific-popup.css">
    <!-- Bootstrap V4.1.3 Fremwork CSS -->
    <link rel="stylesheet" href="/theme/client/css/bootstrap.min.css">
    <!-- Helper CSS -->
    <link rel="stylesheet" href="/theme/client/css/helper.css">
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="/theme/client/style.css">
    <link rel="stylesheet" href="/theme/client/css.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="/theme/client/css/responsive.css">
    <!-- Modernizr js -->

    <script src="/theme/client/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="/theme/client/js/vendor/modernizr-2.8.3.min.js"></script>
    <script src="/theme/client/js/countdown.js"></script>

    @yield('css')


</head>

<body>
    <!--[if lt IE 8]>
  <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
 <![endif]-->
    <!-- Begin Body Wrapper -->
    <div class="body-wrapper">
        <!-- Begin Header Area -->
        @include('client.layout.header')
        <!-- Header Area End Here -->
        <!-- Begin Slider With Banner Area -->

        <!-- Slider With Banner Area End Here -->
        <!-- Begin Static Top Area -->

        <!-- Static Top Area End Here -->
        <!-- product-area start -->
        @yield('content')
        <!-- Group Featured Product Area End Here -->
        <!-- Begin Footer Area -->
        @include('client.layout.footer')
        <!-- Footer Area End Here -->
        <!-- Begin Quick View | Modal Area -->

        <!-- Quick View | Modal Area End Here -->
    </div>



    <!-- Modal -->
    <div class="modal fade" id="exampleModalcompare" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                  <input type="search" name="" id="">
                    @if ($compare != null)
                      
                          <table>
                            <tbody>
                              @foreach ($compare as $item)
                              <tr>
                                <td><a href="">x</a></td>
                                <td> <img width="100px" height="100px" src="{{ Storage::url($item['item']['image'] )}}" alt=""></td>
                                <td> <p>{{ $item['item']['name'] }}</p></td>
                              </tr>
                              @endforeach
                            </tbody>
                          </table>
                             
                              
                               
                        
                         
                       
                    @endif
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/typeahead.js/0.11.1/typeahead.bundle.min.js"></script>
    <!-- Popper js -->
    <script src="/theme/client/js/vendor/popper.min.js"></script>
    <!-- Bootstrap V4.1.3 Fremwork js -->
    <script src="/theme/client/js/bootstrap.min.js"></script>
    <!-- Ajax Mail js -->
    <script src="/theme/client/js/ajax-mail.js"></script>
    <!-- Meanmenu js -->
    <script src="/theme/client/js/jquery.meanmenu.min.js"></script>
    <!-- Wow.min js -->
    <script src="/theme/client/js/wow.min.js"></script>
    <!-- Slick Carousel js -->
    <script src="/theme/client/js/slick.min.js"></script>
    <!-- Owl Carousel-2 js -->
    <script src="/theme/client/js/owl.carousel.min.js"></script>
    <!-- Magnific popup js -->
    <script src="/theme/client/js/jquery.magnific-popup.min.js"></script>
    <!-- Isotope js -->
    <script src="/theme/client/js/isotope.pkgd.min.js"></script>
    <!-- Imagesloaded js -->
    <script src="/theme/client/js/imagesloaded.pkgd.min.js"></script>
    <!-- Mixitup js -->
    <script src="/theme/client/js/jquery.mixitup.min.js"></script>
    <!-- Countdown -->
    @yield('sr')
    <!-- Counterup -->
    <script src="/theme/client/js/jquery.counterup.min.js"></script>
    <!-- Waypoints -->
    <script src="/theme/client/js/waypoints.min.js"></script>
    <!-- Barrating -->
    <script src="/theme/client/js/jquery.barrating.min.js"></script>
    <!-- Jquery-ui -->
    <script src="/theme/client/js/jquery-ui.min.js"></script>
    <!-- Venobox -->
    <script src="/theme/client/js/venobox.min.js"></script>
    <!-- Nice Select js -->
    <script src="/theme/client/js/jquery.nice-select.min.js"></script>
    <!-- ScrollUp js -->
    <script src="/theme/client/js/scrollUp.min.js"></script>
    <!-- Main/Activator js -->
    <script src="/theme/client/js/main.js"></script>
    <script>
        $('#errors').delay(2000).slideUp();

    </script>
    @yield('script')

</body>

<!-- index-431:47-->

</html>
