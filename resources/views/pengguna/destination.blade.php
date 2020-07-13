@extends('pengguna.master')

@section('content')

    <!-- bradcam_area  -->
    <div class="bradcam_area bradcam_bg_2">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text text-center">
                        <h3>Destinations</h3>
                        <p>Pixel perfect design with awesome contents</p>
                    </div>
                </div>
            </div>
        </div>
    </div>



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

            <div class="">
                {{ $wisata->links() }}
            </div>
        </div>
    </div>


    @endsection
