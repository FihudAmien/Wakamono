@extends('layouts.detail')

@section('title')
    Detail Berita
@endsection

@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active"><a href="{{url('/')}}">News</a></li>
            <li class="breadcrumb-item" aria-current="page">Detail Berita</li>
        </ol>
    </nav>
    <section class="article-clean">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-xl-8 offset-lg-1 offset-xl-2">
                    <div class="intro">
                        <h1 class="text-center">{{ $item->title }}<br></h1>
                        <p class="text-center"><span class="by">oleh</span> <a href="{{url('/')}}">Wakamono.club</a><span class="date">{{ $item->created_at->format('l, d F Y H:i')}}</span></p>
                        <img class="img-fluid" src="{{asset('frontend/img/' . $item->thumbnails)}}">
                    </div>
                    <div class="text">
                        {!! $item->content !!}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection