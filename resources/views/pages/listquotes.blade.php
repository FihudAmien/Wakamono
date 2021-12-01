@extends('layouts.list')

@section('title')
    Quotes-Wakamono.club
@endsection

@section('content')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item active"><a href="{{url('/')}}">News</a></li>
        <li class="breadcrumb-item" aria-current="page">List Quotes</li>
    </ol>
</nav>
<div class="container">
    <section class="article-list">
        <div class="container">
            <div class="intro">
                <h2 class="text-center">Quotes Terbaru</h2>
                <p class="text-center">Selamat datang di Quotes terbaru wakamono club , selamat membaca dan jangan bosan bosan ya </p>
            </div>
            <div class="row articles">
                @foreach ($items as $item)
                <div class="col-sm-4 col-md-4 item">
                    <a href="#"><img class="img-fluid" style="" src="{{asset('frontend/img/' . $item->thumbnailsquotes)}}"></a>
                    <h3 class="name">{{ $item->titlequotes}}</h3>
                    <p class="description">{!!Str::limit($item->contentquotes ,  180 ,'....')!!}</p>
                    <a class="action" href="{{route('detailquotes', [$item->slugquotes])}}"><i class="fa fa-arrow-circle-right"></i></a>
                </div>
                @endforeach
            </div>
            <div class="center-pagination">{{ $items->links() }}</div>
        </div>
    </section>
</div>
@endsection