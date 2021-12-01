@extends('layouts.app')

@section('title')
    Wakamono Club    
@endsection

@section('content')
    
        <!-- HERO SECTION -->

        <div class="container">
            <div class="hero-section" data-aos="zoom-in-up" data-aos-duration="1500">
                <div class="row margin-thumbnails">
                    <div class="col-lg-8">
                        <img class="image-thumbnails" src="{{ url('frontend/img/'.$last1_berita->thumbnails)}}" alt="">
                    </div>
                    <div class="col-lg-2">
                        <img class="margin-thumbnails image-quotes" src="{{ url('frontend/img/'.$first_quote->thumbnailsquotes)}}" alt="">
                        <img class="image-quotessub" src="{{ url('frontend/img/'.$second_quote->thumbnailsquotes)}}" alt="">
                    </div>
                    <div class="col-lg-2 ">
                        <h4 class="paragraph-quotes">{{ $first_quote->titlequotes ?? '' }}</h4>
                        <a class="linkdetail" href="{{ route('detailquotes', [$first_quote->slugquotes]) }}">Baca Selengkapnya</a>
                        <h4 class="paragraph-quotes1">{{ $second_quote->titlequotes ?? '' }}
                        </h4>
                        <a class="linkdetail" href="{{ route('detailquotes', [$second_quote->slugquotes]) }}">Baca Selengkapnya</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8">
                        <p class="paragraph-thumbnails"> <b>- Wakomono Club </b></p>
                        <h3 class="title-thumbnails">{{ $last1_berita->title ?? '' }}</h3>
                        <h4 class="paragraph-title">{!!Str::limit($last1_berita->content ,  180 ,'....')!!}</h4>
                        <a href="{{ route('detail', [$last1_berita->slug]) }}" class="btn btn-warning mt-2">Selengkapnya</a>
                    </div>
                </div>
                </figure>
            </div>
        </div>
    
            <!-- BERITA TERKINI -->
    <div class="berita-bg" style="margin-top: 75px">
        <div class="container">
            <div class="Berita-harian" data-aos="zoom-in-up" data-aos-duration="2000">
                <div class="row">
                    <div class="col-lg-10 title-berita mb-4">
                        <h3> Berita Hari Ini</h3>
                    </div>
                    <div class="col-lg-2">
                       <p class="link-lainnya"> <a href={{url('/list')}}>Lainnya ></a> </p>
                    </div>
                </div>
                <div class="row">
                    @foreach ($last4_berita as $item)
                    <div class="col-lg-6">
                        <img class="image-thumbnailsberita" src="{{asset('frontend/img/' . $item->thumbnails)}}" alt="">
                        <p> <b>- Wakomono Club </b></p>
                        <h3 class="title-thumbnails">{{ $item->title}}</h3>
                        <div class="paragraph-title"> {!!Str::limit($item->content ,  180 ,'....')!!}</div>
                        <a type="button" href="{{route('detail', [$item->slug])}}" class="btn btn-warning mt-2 mb-4">Selengkapnya</a>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    
            <!-- QUOTES TERKINI -->
        <div class="container">
            <div class="Quotes-terkini" data-aos="zoom-in-up" data-aos-duration="2500">
                <div class="row">
                    <div class="col-lg-10 title-berita mb-4">
                        <h3>Quotes Terbaru</h3>
                    </div>
                    <div class="col-lg-2">
                    <p class="link-lainnya">  <a class= href="{{url('/listquotes')}}">Lainnya ></a> </p>
                   
                    </div>
                </div>


                <div class="row">
                    <div class="col-lg-7">
                        <img class="image-thumbnailsberita" src="{{ url('frontend/img/'.$third_quote->thumbnailsquotes)}}" alt="">
                    </div>
                    <div class="col-lg-5">
                        <p> {{ $third_quote->created_at ?? '' }} </p>
                        <h3 class="title-thumbnails">{{ $third_quote->titlequotes ?? '' }}</h3>
                        <h4 class="paragraph-title"> {!!Str::limit($third_quote->contentquotes ,  180 ,'....')!!}</h4>
                        <a type="button" href="{{ route('detailquotes', [$third_quote->slugquotes]) }}" class="btn btn-warning mt-3 mb-2">Selengkapnya</a>
                    </div>
                </div>


                <div class="row subquotes-terkini ">
                    @foreach ($last4_quote as $item1)
                    <div class="col-lg-2 ">
                        <img class="image-thumbnails-quotes" src="{{ url('frontend/img/'.$item1->thumbnailsquotes)}}" alt="">
                    </div>
                    <div class="col-lg-3">
                        <p class="tanggal-quotes-terkini"> <a href="" class="tanggal-quotes-terkini"> {{ $item1->created_at ?? '' }} </a> </p>
                        <h5 class="title-quotes-terkini">
                            <a href="{{ route('detailquotes', [$item1->slugquotes]) }}" class="title-quotes-terkini">{{ $item1->titlequotes ?? '' }}</a></h5>
                        <a class="paragraph-quotes-terkini" href="{{ route('detailquotes', [$item1->slugquotes]) }}">{!!Str::limit($item1->contentquotes ,  150 ,'....')!!}</a>
                    </div>
                    <div class="col-lg-1">
    
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

@endsection