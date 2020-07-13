@extends('pengguna.master')

@section('content')

<!-- header-end -->
<div class="destination_banner_wrap overlay">
    <div class="destination_text text-center">
        @foreach ($wisata as $w)
        <h3>{{$w->nama_wisata}}</h3>
        @endforeach
    </div>
</div>

<div class="destination_details_info">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-9">
                <div class="destination_info">
                    <h3>Description</h3>

                    <div class="card mb-3">
                        @foreach ($wisata as $w)
                            @if($w->gambar)
                                <img src="{{asset('/storage/'.$w->gambar)}}">
                            @else
                                <img src="https://duniatravel.co.id/wp-content/uploads/logo-wonderful-indonesia.jpg" alt="" width="80%">
                            @endif
                        <div class="card-body">
                            <h3 class="card-title">{{$w->nama_wisata}}</h3><hr>
                            <p class="card-text">{{$w->deskripsi}}</p><hr>
                            <p class="card-text"><b>Wilayah : </b>{{$w->wilayah->nama_wilayah}}</p><hr>
                            <p class="card-text"><b>Jam Buka : </b>{{$w->jam_buka}}</p><hr>
                            <p class="card-text"><b>Jam Tutup : </b>{{$w->jam_tutup}}</p><hr>
                            <p class="card-text"><small class="text-muted">Last updated {{$w->created_at}}</small></p>
                        @endforeach
                        </div>
                      </div>
                </div>
                </div>
                <div class="bordered_1px"></div>
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
