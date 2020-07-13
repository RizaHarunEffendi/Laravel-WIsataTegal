@extends('pengguna.master')

@section('content')

<!-- slider_area_start -->
<div class="slider_area">
    <div class="slider_active owl-carousel">
        <div class="single_slider  d-flex align-items-center slider_bg_1 overlay">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-12 col-md-12">
                        <div class="slider_text text-center">
                            <h3>Tegal</h3>
                            <p>Pixel perfect design with awesome contents</p>
                            <a href="#" class="boxed-btn3">Explore Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="single_slider  d-flex align-items-center slider_bg_2 overlay">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-12 col-md-12">
                        <div class="slider_text text-center">
                            <h3>Bumijawa</h3>
                            <p>Pixel perfect design with awesome contents</p>
                            <a href="#" class="boxed-btn3">Explore Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="single_slider  d-flex align-items-center slider_bg_3 overlay">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-12 col-md-12">
                        <div class="slider_text text-center">
                            <h3>Brebes</h3>
                            <p>Pixel perfect design with awesome contents</p>
                            <a href="#" class="boxed-btn3">Explore Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- slider_area_end -->

<div class="popular_places_area">
    <div class="container">
        <div class="row justify-content-center">

            <div class="col-lg-6">
                <div class="section_title text-center mb_70">
                    <h3>Popular Places</h3>
                    <p>Suffered alteration in some form, by injected humour or good day randomised booth anim 8-bit hella wolf moon beard words.</p>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($wisata as $w)
            <div class="col-lg-4 col-md-6">
                <div class="single_place">
                    <div class="thumb">
                        @if($w->gambar)
                            <img width="25%" src="{{asset('/storage/'.$w->gambar)}}">
                        @else
                            <img src="https://duniatravel.co.id/wp-content/uploads/logo-wonderful-indonesia.jpg" alt="" width="25%">
                        @endif
                    </div>
                    <div class="place_info">
                        <a href="{{ route('detail', [$w->id]) }}"><h3>{{$w->nama_wisata}}</h3></a>
                    <p>{{$w->wilayah->nama_wilayah}}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>



        <div class="row">
            <div class="col-lg-12">
                <div class="more_place_btn text-center">
                    <a class="boxed-btn4" href="{{ route('destination') }}">More Places</a>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- testimonial_area  -->
<div class="testimonial_area">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="testmonial_active owl-carousel">
                    <div class="single_carousel">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="single_testmonial text-center">
                                    <div class="author_thumb">
                                        <img src="/Travelo/img/testmonial/author.png" alt="">
                                    </div>
                                    <p>"Timeline ngerjian tugas - 70% mikirin + rebahan, 20 deadline + panic, 10% ngerjain + ngumpulin -".</p>
                                    <div class="testmonial_author">
                                        <h3>- Mohamad Dani</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single_carousel">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="single_testmonial text-center">
                                    <div class="author_thumb">
                                        <img src="/Travelo/img/testmonial/author.png" alt="">
                                    </div>
                                    <p>"Working in conjunction with humanitarian aid agencies, we have supported programmes to help alleviate human suffering.</p>
                                    <div class="testmonial_author">
                                        <h3>- Tom Mouse</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single_carousel">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="single_testmonial text-center">
                                    <div class="author_thumb">
                                        <img src="/Travelo/img/testmonial/author.png" alt="">
                                    </div>
                                    <p>"Working in conjunction with humanitarian aid agencies, we have supported programmes to help alleviate human suffering.</p>
                                    <div class="testmonial_author">
                                        <h3>- Jerry Mouse</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
