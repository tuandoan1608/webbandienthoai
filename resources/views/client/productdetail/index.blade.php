@extends('client.master')
@section('css')
    <style>
        .countdown {
            font-family: arial;
            text-transform: uppercase;
        }

        .countdown>div {
            display: inline-block;
        }

        .countdown>div>span {
            display: block;
            text-align: center;
        }

        .countdown-container {
            border: 2px solid #dbdbdb;
    margin: 20px 2px 0;
    padding: 5px;
        }

        .countdown-container .countdown-heading {
            font-size: 11px;
            margin: 3px;
            color: #666
        }

        .countdown-container .countdown-value {
            font-size: 20px;
            background: #6273c9;
      
            color: #fff;
            text-shadow: 2px 2px 2px rgba(0, 0, 0, 0.4)
        }

    </style>
@endsection
@section('content')


    @include('client.layout.banner')

    <!-- product-area end -->
    <!-- Begin Li's Static Banner Area -->
    <div class="li-static-banner li-static-banner-4 text-center pt-20">
        <div class="container">
            <div class="row">
                <!-- Begin Single Banner Area -->
                <div class="col-lg-6">
                    <div class="single-banner pb-sm-30 pb-xs-30">
                        <a href="#">
                            <img src="/theme/client/images/banner/2_3.jpg" alt="Li's Static Banner">
                        </a>
                    </div>
                </div>
                <!-- Single Banner Area End Here -->
                <!-- Begin Single Banner Area -->
                <div class="col-lg-6">
                    <div class="single-banner">
                        <a href="#">
                            <img src="/theme/client/images/banner/2_4.jpg" alt="Li's Static Banner">
                        </a>
                    </div>
                </div>
                <!-- Single Banner Area End Here -->
            </div>
        </div>
    </div>



    <section class="product-area li-laptop-product Special-product pt-60 pb-45">
        <div class="container">
            <div class="row">
                <!-- Begin Li's Section Area -->
                <div class="col-lg-12">
                    <div class="li-section-title">
                        <h2>
                            <span>Hot sales</span>
                        </h2>
                    </div>
                    <div class="row">
                        <div class="special-product-active owl-carousel">
                            @foreach ($productphone as $item)
                                @if ($item->startsale==1)
                                    
                                <div class="col-lg-12">
                                    <!-- single-product-wrap start -->
                                    <div class="single-product-wrap">
                                        <div class="product-image">
                                            <a href="/san-pham/{{ $item->slug }}">
                                                <img src="{{ Storage::url($item->image) }}" alt="{{ $item->name }}">
                                            </a>
                                            <span class="sticker">Hot</span>
                                        </div>
                                      
                                        <div class="product_desc">
                                            <div class="product_desc_info">
                                                <div class="product-review">
                                                    <?php 
                                                    $sumrating = DB::table('rating')->where('product_id',$item->id)->sum('rating');
                                                    $countrating = DB::table('rating')->where('product_id',$item->id)->count('product_id');
                                                   if($countrating==0){
                                                    $tbrating= 0;
                                                   
                                                   } else {
                                                        $tbrating= $sumrating/$countrating;
                                                    }
                                                  ?>
                                                    <h5 class="manufacturer">
                                                        <a href="product-details.html">Lược đánh giá: {{ $tbrating }} </a>
                                                    </h5>
                                                    <div class="rating-box">
                                                       
                                                     
                                                         @if($tbrating==0)
                                                         <ul class="rating">
                                                            <li><i class="fa fa-star-o"></i></li>
                                                            <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                            <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                            <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                            <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                      </ul>
                                                       @elseif($tbrating==5)
                                                       <ul class="rating">
                                                            
                                                        <li><i class="fa fa-star-o"></i></li>
                                                        <li><i class="fa fa-star-o"></i></li>
                                                        <li><i class="fa fa-star-o"></i></li>
                                                        <li><i class="fa fa-star-o"></i></li>
                                                        <li><i class="fa fa-star-o"></i></li>
                                                    </ul>
                                                        @elseif ($tbrating>=4&&$tbrating<5)
                                                        <ul class="rating">
                                                            
                                                            <li><i class="fa fa-star-o"></i></li>
                                                            <li><i class="fa fa-star-o"></i></li>
                                                            <li><i class="fa fa-star-o"></i></li>
                                                            <li><i class="fa fa-star-o"></i></li>
                                                            <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                        </ul>
                                                        @elseif ($tbrating>=3&&$tbrating<4)
                                                        <ul class="rating">
                                                            
                                                            <li><i class="fa fa-star-o"></i></li>
                                                            <li><i class="fa fa-star-o"></i></li>
                                                            <li><i class="fa fa-star-o"></i></li>
                                                            <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                            <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                        </ul>
                                                        @elseif ($tbrating>=2&&$tbrating<3)
                                                        <ul class="rating">
                                                            
                                                            <li><i class="fa fa-star-o"></i></li>
                                                            <li><i class="fa fa-star-o"></i></li>
                                                            <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                            <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                            <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                        </ul>
                                                        @elseif ($tbrating>=1&&$tbrating<2)
                                                        <ul class="rating">
                                                            
                                                            <li><i class="fa fa-star-o"></i></li>
                                                            <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                            <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                            <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                            <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                        </ul>
                                                        @endif
                                                     
                                                    </div>
                                                </div>
                                                <h4><a class="product_name" href="/san-pham/{{ $item->slug }}">{{ $item->name }}</a>
                                                </h4>
                                             
                                                <div class="price-box">
                                                    <span class="new-price new-price-2 "> <?php  
                                                        $pr= $item->price;
                                                       $dc= $item->discount;
                                                       $dis=$pr*(100-$dc)/100;
                                                         echo number_format($dis);
                                                         
                                                         ?> VND</span>
                                                         <br>
                                                    <span class="old-price">{{ number_format($item->price) }}VND</span>
                                                    
                                                    <span class="discount-percentage">-{{ $item->discount }}%</span>
                                                </div>
                                                <div class="countersection">
                                                    <div class='countdown' data-date="{{ $item->enddate }}"></div>
                                                </div>
                                            </div>
                                            
                                        </div>
                                        <div class="add-actions">
                                            <ul class="add-actions-link">
                                                <li class="add-cart active"><button type="button" onclick="compare({{ $item->id  }});" id="compare" style="background: none;border:none" data-id="{{ $item->id }}" >
                                                    So sánh
                                                </button></li>
                                                <li><a class="links-details" href="/wishlist/{{ $item->id }}"><i class="fa fa-heart-o"></i></a></li>
                                               
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- single-product-wrap end -->
                                </div>
                                
                                    
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
                <!-- Li's Section Area End Here -->
            </div>
        </div>
    </section>

    <section class="product-area li-laptop-product pt-60 pb-45 pt-sm-50 pt-xs-60">
        <div class="container">
            <div class="row">
                @foreach ($category as $cate)
                @if ($cate->categoryproduct->count()>0)
                <!-- Begin Li's Section Area -->
                <div class="col-lg-12">
                    <div class="li-section-title">
                        <h2>
                            <span>{{ $cate->categoryproduct->first()->category->name }} </span>
                        </h2>
                        
                    </div>
                    <div class="row">
                        <div class="product-active owl-carousel">
                        
                          
                          @foreach ($cate->categoryproduct as $item)
                          <div class="col-lg-12">
                              <!-- single-product-wrap start -->
                              <div class="single-product-wrap">
                                  <div class="product-image">
                                      <a href="/san-pham/{{ $item->slug }}">
                                          <img src="{{ Storage::url($item->image) }}" alt="Li's Product Image">
                                      </a>
                                   
                                  </div>
                                  <div class="product_desc">
                                      <div class="product_desc_info">
                                        <div class="product-review">
                                            <?php 
                                            $sumrating = DB::table('rating')->where('product_id',$item->id)->sum('rating');
                                            $countrating = DB::table('rating')->where('product_id',$item->id)->count('product_id');
                                           if($countrating==0){
                                            $tbrating= 0;
                                           
                                           } else {
                                                $tbrating= $sumrating/$countrating;
                                            }
                                          ?>
                                            <h5 class="manufacturer">
                                                <a href="product-details.html">Lược đánh giá: {{ $tbrating }} </a>
                                            </h5>
                                            <div class="rating-box">
                                               
                                             
                                                 @if($tbrating==0)
                                                 <ul class="rating">
                                                    <li><i class="fa fa-star-o"></i></li>
                                                    <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                    <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                    <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                    <li class="no-star"><i class="fa fa-star-o"></i></li>
                                              </ul>
                                               @elseif($tbrating==5)
                                               <ul class="rating">
                                                    
                                                <li><i class="fa fa-star-o"></i></li>
                                                <li><i class="fa fa-star-o"></i></li>
                                                <li><i class="fa fa-star-o"></i></li>
                                                <li><i class="fa fa-star-o"></i></li>
                                                <li><i class="fa fa-star-o"></i></li>
                                            </ul>
                                                @elseif ($tbrating>=4&&$tbrating<5)
                                                <ul class="rating">
                                                    
                                                    <li><i class="fa fa-star-o"></i></li>
                                                    <li><i class="fa fa-star-o"></i></li>
                                                    <li><i class="fa fa-star-o"></i></li>
                                                    <li><i class="fa fa-star-o"></i></li>
                                                    <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                </ul>
                                                @elseif ($tbrating>=3&&$tbrating<4)
                                                <ul class="rating">
                                                    
                                                    <li><i class="fa fa-star-o"></i></li>
                                                    <li><i class="fa fa-star-o"></i></li>
                                                    <li><i class="fa fa-star-o"></i></li>
                                                    <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                    <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                </ul>
                                                @elseif ($tbrating>=2&&$tbrating<3)
                                                <ul class="rating">
                                                    
                                                    <li><i class="fa fa-star-o"></i></li>
                                                    <li><i class="fa fa-star-o"></i></li>
                                                    <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                    <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                    <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                </ul>
                                                @elseif ($tbrating>=1&&$tbrating<2)
                                                <ul class="rating">
                                                    
                                                    <li><i class="fa fa-star-o"></i></li>
                                                    <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                    <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                    <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                    <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                </ul>
                                                @endif
                                             
                                            </div>
                                        </div>
                                          <h4><a class="product_name"
                                                  href="/san-pham/{{ $item->slug }}">{{ $item->name }}</a>
                                          </h4>
                                          <div class="price-box">
                                              <span class="new-price">{{ number_format($item->price) }}.đ</span>
                                          </div>
                                      </div>

                                  </div>
                                  <div class="add-actions">
                                    <ul class="add-actions-link">
                                        <li class="add-cart active"><button type="button" onclick="compare({{ $item->id  }});" id="compare" style="background: none;border:none" data-id="{{ $item->id }}" >
                                            So sánh
                                        </button></li>
                                        <li><a class="links-details" href="/wishlist/{{ $item->id }}"><i class="fa fa-heart-o"></i></a></li>
                                        
                                    </ul>
                                </div>
                              </div>
                              <!-- single-product-wrap end -->
                          </div>
                      @endforeach
                 
                        

                        </div>
                    </div>
                </div>
                @endif
                @endforeach
                <!-- Li's Section Area End Here -->
            </div>
        </div>
    </section>
   
  
   


@endsection
@section('script')
<script>
   
        function compare(id){
       
            var token=document.head.querySelector('[name=csrf-token]').content;
            $.ajax({
                url:'/compare/add/' +id,
                data:{
               
                    _token:token
                },
                success:function(data){
                    location.replace('/compare');
                }
            })
        }
        $('#compare').on('click',function(){
           
        })

</script>

@endsection
