<main id="main">
    <div class="container">

        <!--MAIN SLIDE-->
        <div class="wrap-main-slide">
            <div class="slide-carousel owl-carousel style-nav-1" data-items="1" data-loop="1" data-nav="true" data-dots="false">
                <div class="item-slide">
                <a href="/shop">
                    <img src="{{asset('asset/banner/banner1.png')}}" alt="" class="img-slide"></a>
                </div>
                <div class="item-slide">
                <a href="/shop">
                    <img src="{{asset('asset/banner/banner2.jpg')}}" alt="" class="img-slide"></a>
                </div>
                <div class="item-slide">
                <a href="/shop">
                    <img src="{{asset('asset/banner/banner3.jpg')}}" alt="" class="img-slide"></a>
                </div>
                <div class="item-slide">
                <a href="/shop">
                    <img src="{{asset('asset/banner/banner9.webp')}}" alt="" class="img-slide"></a>
                </div>
                <div class="item-slide">
                <a href="/shop">
                    <img src="{{asset('asset/banner/banner6.webp')}}" alt="" class="img-slide"></a>
                </div>
                
            </div>
        </div>

        <!--BANNER-->
        <div class="wrap-banner style-twin-default">
            <div class="banner-item">
                <a href="/shop" class="link-banner banner-effect-1">
                    <figure><img src="{{asset('asset/banner/short_bnr1.png')}}" alt="" width="580" height="190"></figure>
                </a>
            </div>
            <div class="banner-item">
                <a href="/shop" class="link-banner banner-effect-1">
                    <figure><img src="{{asset('asset/banner/short_bnr2.png')}}" alt="" width="580" height="190"></figure>
                </a>
            </div>
            <div class="banner-item">
                <a href="/shop" class="link-banner banner-effect-1">
                    <figure><img src="{{asset('asset/banner/short_bnr3.png')}}" alt="" width="580" height="190"></figure>
                </a>
            </div>
            
        </div>
        <div class="wrap-banner style-twin-default">
            <div class="banner-item">
                <a href="/shop" class="link-banner banner-effect-1">
                    <figure><img src="{{asset('asset/banner/short_bnr4.png')}}" alt="" width="580" height="190"></figure>
                </a>
            </div>
            <div class="banner-item">
                <a href="/shop" class="link-banner banner-effect-1">
                    <figure><img src="{{asset('asset/banner/short_bnr5.png')}}" alt="" width="580" height="190"></figure>
                </a>
            </div>
            <div class="banner-item">
                <a href="/shop" class="link-banner banner-effect-1">
                    <figure><img src="{{asset('asset/banner/short_bnr6.png')}}" alt="" width="580" height="190"></figure>
                </a>
            </div>
            
        </div>

        <!--On Sale-->
        @if($sproducts->count()>0)
            <div class="wrap-show-advance-info-box style-1 has-countdown">
                <h3 class="title-box">On Sale</h3>
                <div class="wrap-top-banner">
                <a href="#" class="link-banner banner-effect-2">
                    <figure><img src="{{asset('asset/banner/salebanner_1.webp')}}" width="1170" height="100" alt=""></figure>
                </a>
            </div>
                
                <div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container " data-items="5" data-loop="false" data-nav="true" data-dots="false" data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"4"},"1200":{"items":"5"}}'>

                    @foreach ($sproducts as $product)
                        <div class="product product-style-2 equal-elem ">
                            <div class="product-thumnail">
                                <a href="{{route('product.details', ['slug'=>$product->slug])}}" title="{{$product->name}}">
                                    <figure><img src="{{ asset('asset/product_image')}}/{{$product->image}}" width="800" height="800" alt="{{$product->name}}"></figure>
                                </a>
                                <div class="group-flash">
                                    <span class="flash-item sale-label">sale</span>
                                </div>
                            </div>
                            <div class="product-info">
                                <a href="{{route('product.details', ['slug'=>$product->slug])}}" class="product-name"><span>{{$product->name}}</span></a>
                                <div class="wrap-price"><ins><p class="product-price">${{$product->sale_price}}</p></ins><del><p class="product-price">${{$product->regular_price}}</p></del></div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        @endif

        <!--Latest Products-->
        <div class="wrap-show-advance-info-box style-1">
            <h3 class="title-box">All New Products</h3>
            <div class="wrap-top-banner">
                <a href="#" class="link-banner banner-effect-2">
                    <figure><img src="{{asset('asset/banner/petFood1.jpg')}}" width="1170" height="100" alt=""></figure>
                </a>
            </div>
            <div class="wrap-products">
                <div class="wrap-product-tab tab-style-1">						
                    <div class="tab-contents">
                        <div class="tab-content-item active" id="digital_1a">
                            <div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container" data-items="5" data-loop="false" data-nav="true" data-dots="false" data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"4"},"1200":{"items":"5"}}' >
                                @foreach ($lproducts as $product)
                                    <div class="product product-style-2 equal-elem ">
                                        <div class="product-thumnail">
                                            <a href="{{route('product.details', ['slug'=>$product->slug])}}" title="{{$product->name}}">
                                                <figure><img src="{{ asset('asset/product_image')}}/{{$product->image}}" width="800" height="800" alt="{{$product->name}}"></figure>
                                            </a>
                                            <div class="group-flash">
                                                <span class="flash-item new-label">new</span>
                                            </div>
                                            <div class="wrap-btn">
                                                <a href="#" class="function-link">quick view</a>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <a href="{{route('product.details', ['slug'=>$product->slug])}}" class="product-name"><span>{{$product->name}}</span></a>
                                            <div class="wrap-price"><span class="product-price">${{$product->regular_price}}</span></div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>							
                    </div>
                </div>
            </div>
        </div>








        

        <!--Product Categories-->
        <div class="wrap-show-advance-info-box style-1">
            <h3 class="title-box">Product Categories</h3>
            <div class="wrap-top-banner">
                <a href="#" class="link-banner banner-effect-2">
                    <figure><img src="{{asset('asset/banner/homebanner_3.jpg')}}" width="1170" height="240" alt=""></figure>
                </a>
            </div>
            <div class="wrap-products">
                <div class="wrap-product-tab tab-style-1">
                    <div class="tab-control">
                        @foreach ($categories as $key=>$category)
                            <a href="#category_{{$category->id}}" class="tab-control-item {{$key==0 ? 'active':''}}">{{$category->name}}</a>
                        @endforeach
                    </div>
                    <div class="tab-contents">
                        @foreach($categories as $key=>$category)
                        <div class="tab-content-item {{$key==0 ? 'active':''}}" id="category_{{$category->id}}">
                            <div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container" data-items="5" data-loop="false" data-nav="true" data-dots="false" data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"4"},"1200":{"items":"5"}}' >
                               
                                    @php
                                        $c_products = DB::table('products')->where('category_id', $category->id)->get()->take($no_of_products);
                                    @endphp

                                    @foreach ($c_products as $c_product)
                                        <div class="product product-style-2 equal-elem ">
                                            <div class="product-thumnail">
                                                <a href="{{route('product.details', ['slug'=>$c_product->slug])}}" title="{{$c_product->name}}">
                                                    <figure><img src="{{ asset('asset/product_image')}}/{{$c_product->image}}" width="800" height="800" alt="{{$product->name}}"></figure>
                                                </a>
                                            </div>
                                            <div class="product-info">
                                                <a href="{{route('product.details', ['slug'=>$c_product->slug])}}" class="product-name"><span>{{$c_product->name}}</span></a>
                                                <div class="wrap-price"><span class="product-price">${{$c_product->regular_price}}</span></div>
                                            </div>
                                        </div>
                                    @endforeach
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>	
        
        
        <!--grooming-->
        <div class="wrap-show-advance-info-box style-1">
            <h3 class="title-box">How to train your pets?</h3>
            <div class="wrap-top-banner">
                <a href="#" class="link-banner banner-effect-2">
                   
                </a>
            </div>
            <div class="wrap-products">
                <div class="wrap-product-tab tab-style-1">						
                    <div class="tab-contents">
                        <div class="tab-content-item active" id="digital_1a">
                            <div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container" data-items="5" data-loop="false" data-nav="true" data-dots="false" data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"4"},"1200":{"items":"5"}}' >
                                 @foreach ($blogs as $blog)
                                    <div class="product product-style-2 equal-elem ">
                                        <div class="product-thumnail">
                                            <a href="{{route('blog.details',['slug'=>$blog->slug])}}" title="{{$blog->name}}">
                                                <figure><img src="{{ asset('asset/blog')}}/{{$blog->image}}.jpg" width="800" height="800" alt="{{$blog->name}}"></figure>
                                            </a>
                                            
                                        </div>
                                        <div class="blog-details">
                                    
                
                              <h5>--by {{$blog->writer}}</h5>
                             <p>{{$blog->short_description}}</p>
                             <a href="{{route('blog.details',['slug'=>$blog->slug])}}">Read more</a>
                             </div>
                                        <div class="product-info">
                                            <a href="{{route('blog.details',['slug'=>$blog->slug])}}" class="product-name"><span>{{$blog->name}}</span></a>
                                            
                                        </div>
                                    </div>
                                @endforeach 
                                
                            </div>
                        </div>							
                    </div>
                </div>
            </div>
        </div>


        <!--endblog-->

    </div>

</main>
