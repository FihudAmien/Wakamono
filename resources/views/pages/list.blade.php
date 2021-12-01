@extends('layouts.list')

@section('title')
    Berita-Wakamono.club
@endsection

@section('content')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item active"><a href="{{url('/')}}">News</a></li>
        <li class="breadcrumb-item" aria-current="page">List Berita</li>
    </ol>
</nav>
<div class="container">
    <section class="article-list">
        <div class="container">
            <div class="intro">
                <h2 class="text-center">Berita Terbaru</h2>
                <p class="text-center">Selamat datang di berita terbaru wakamono club , selamat membaca dan jangan bosan bosan ya </p>
            </div>
            <div class="row articles">
                @foreach ($items as $item)
                <div class="col-sm-4 col-md-4 item">
                    <a href="#"><img class="img-fluid" src="{{asset('frontend/img/' . $item->thumbnails)}}"></a>
                    <h3 class="name">{{ $item->title}}</h3>
                    <p class="description">{!!Str::limit($item->content ,  180 ,'....')!!}</p>
                    <a class="action" href="{{route('detail', [$item->slug])}}"><i class="fa fa-arrow-circle-right"></i></a>
                </div>
                @endforeach
            </div>
            <div class="center-pagination">{{ $items->links() }}</div>
        </div>
    </section>
</div>
@endsection