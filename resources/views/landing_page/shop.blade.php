@extends('landing_page.layouts.main')
@section('main-container')
    <div class="main-container">
        <!-- Breadcrumb Section Begin -->
        <section class="breadcrumb-option">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcrumb__text">
                            <h4>Shop</h4>
                            <div class="breadcrumb__links">
                                <a href="{{ route('landing.page') }}">Home</a>
                                <a href="{{ route('shop.page') }}">Shop</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Breadcrumb Section End -->

        <!-- Shop Section Begin -->
        <section class="shop spad">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="shop__sidebar">
                            <div class="shop__sidebar__search">
                                <form action="#">
                                    <input type="text" placeholder="Search...">
                                    <button type="submit"><span class="icon_search"></span></button>
                                </form>
                            </div>
                            <div class="shop__sidebar__accordion">
                                <div class="accordion" id="accordionExample">
                                    <div class="card">
                                        <div class="card-heading">
                                            <a data-toggle="collapse" data-target="#collapseOne">Categories</a>
                                        </div>


                                        <div id="collapseOne" class="collapse show" data-parent="#accordionExample">
                                            <div class="card-body">
                                                <div class="shop__sidebar__categories"
                                                    style="max-height: 200px; overflow-y: auto;">
                                                    <ul class="nice-scroll">
                                                        @foreach ($category as $data)
                                                            <li>
                                                                <a href="{{ route('shop.category', $data->id) }}">
                                                                    {{ $data->categoryname }}
                                                                </a>
                                                            </li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    {{-- size section in sidebar --}}
                                    <div class="card">
                                        <div class="card-heading">
                                            <a data-toggle="collapse" data-target="#collapseFour">Size</a>
                                        </div>
                                        <div id="collapseFour" class="collapse show" data-parent="#accordionExample">
                                            <div class="card-body">
                                                <div class="shop__sidebar__size">
                                                    <label for="xs">xs
                                                        <input type="radio" id="xs">
                                                    </label>
                                                    <label for="sm">s
                                                        <input type="radio" id="sm">
                                                    </label>
                                                    <label for="md">m
                                                        <input type="radio" id="md">
                                                    </label>
                                                    <label for="xl">xl
                                                        <input type="radio" id="xl">
                                                    </label>
                                                    <label for="2xl">2xl
                                                        <input type="radio" id="2xl">
                                                    </label>
                                                    <label for="xxl">xxl
                                                        <input type="radio" id="xxl">
                                                    </label>
                                                    <label for="3xl">3xl
                                                        <input type="radio" id="3xl">
                                                    </label>
                                                    <label for="4xl">4xl
                                                        <input type="radio" id="4xl">
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- color section in sidebar --}}
                                    <div class="card">
                                        <div class="card-heading">
                                            <a data-toggle="collapse" data-target="#collapseFive">Colors</a>
                                        </div>
                                        <div id="collapseFive" class="collapse show" data-parent="#accordionExample">
                                            <div class="card-body">
                                                <div class="shop__sidebar__color">
                                                    <label class="c-1" for="sp-1">
                                                        <input type="radio" id="sp-1">
                                                    </label>
                                                    <label class="c-2" for="sp-2">
                                                        <input type="radio" id="sp-2">
                                                    </label>
                                                    <label class="c-3" for="sp-3">
                                                        <input type="radio" id="sp-3">
                                                    </label>
                                                    <label class="c-4" for="sp-4">
                                                        <input type="radio" id="sp-4">
                                                    </label>
                                                    <label class="c-5" for="sp-5">
                                                        <input type="radio" id="sp-5">
                                                    </label>
                                                    <label class="c-6" for="sp-6">
                                                        <input type="radio" id="sp-6">
                                                    </label>
                                                    <label class="c-7" for="sp-7">
                                                        <input type="radio" id="sp-7">
                                                    </label>
                                                    <label class="c-8" for="sp-8">
                                                        <input type="radio" id="sp-8">
                                                    </label>
                                                    <label class="c-9" for="sp-9">
                                                        <input type="radio" id="sp-9">
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{--  tags in the card --}}
                                    {{-- <div class="card">
                                    <div class="card-heading">
                                        <a data-toggle="collapse" data-target="#collapseSix">Tags</a>
                                    </div>
                                    <div id="collapseSix" class="collapse show" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <div class="shop__sidebar__tags">
                                                @foreach ($category as $data)
                                                <a href="#">{{$data->categoryname}}</a>
                                                @endforeach
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="shop__product__option">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="shop__product__option__left">
                                        <p>Showing results</p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="shop__product__option__right">
                                        <p>Sort by Price:</p>
                                        <select>
                                            <option value="">Low To High</option>
                                            <option value="">$0 - $55</option>
                                            <option value="">$55 - $100</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            @foreach ($productData as $data)
                                <div class="col-lg-4 col-md-6 col-sm-6">

                                    <div class="product__item">
                                      
                                        <div class="product__item__pic set-bg"
                                            data-setbg="{{ url('storage/' . $data->productthumbnail) }}">
                                            <a href="{{ route('shop.details', $data->id) }}">
                                                <ul class="product__hover">
                                                    <li><a href="#"><img
                                                                src="{{ url('landing_page/img/icon/heart.png') }}"
                                                                alt=""></a></li>
                                                    <li><a href="#"><img
                                                                src="{{ url('landing_page/img/icon/compare.png') }}"
                                                                alt=""> <span>Compare</span></a></li>
                                                    <li><a href="{{ route('shop.details', $data->id) }}"><img
                                                                src="{{ url('landing_page/img/icon/cart.png') }}"
                                                                alt=""><span>Details</span></a></li>
                                                </ul>
                                            </a>
                                        </div>

                                        <div class="product__item__text">
                                            <h6>{{ $data->productname }}</h6>
                                            <a href="#" class="add-cart">+ Add To Cart</a>

                                            <h5>$49.00</h5>
                                            <div class="product__color__select">
                                                <label for="pc-4">
                                                    <input type="radio" id="pc-4">
                                                </label>
                                                <label class="active black" for="pc-5">
                                                    <input type="radio" id="pc-5">
                                                </label>
                                                <label class="grey" for="pc-6">
                                                    <input type="radio" id="pc-6">
                                                </label>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            @endforeach


                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="product__pagination">
                                    <a class="active" href="#">1</a>
                                    <a href="#">2</a>
                                    <a href="#">3</a>
                                    <span>...</span>
                                    <a href="#">21</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Shop Section End -->
    </div>
@endsection
