@extends('layouts.partnerbyf')

@section('title')
    Partner Wakamono.Club
@endsection

@section('content')
    <div class="text-blink">
        <div class="text-nowrap d-flex justify-content-center align-items-center animated-text noSelect" style="background: rgba(255,255,255,0);border-style: none;margin-top: 16px;width: 50%;margin-right: auto;margin-left: auto;">
            <div class="caption v-middle text-center">
                <h1 class="cd-headline clip">
                    <span class="blc">Hello</span>
                    <span class="cd-words-wrapper">
                        <b class="is-visible"> Kenalin Partner Kami</b>
                        <b>Betteryouthfoundation</b>
                    </span>
                    <span class="blinking">|</span>
                </h1>
            </div>
        </div>
    </div>
    <section class="photo-gallery">
        <div class="container">
            <div class="row photos">
                <div class="col-sm-6 col-md-4 col-lg-4 item">
                    <a data-lightbox="photos" href="{{url('frontend/Byf_about/assets/img/desk.jpg')}}"><img class="img-fluid" src="{{url('frontend/Byf_about/assets/img/desk.jpg')}}"></a>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-4 item">
                    <a data-lightbox="photos" href="{{url('frontend/Byf_about/assets/img/building.jpg')}}"><img class="img-fluid" src="{{url('frontend/Byf_about/assets/img/building.jpg')}}"></a>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-4 item">
                    <a data-lightbox="photos" href="{{url('frontend/Byf_about/assets/img/loft.jpg')}}"><img class="img-fluid" src="{{url('frontend/Byf_about/assets/img/loft.jpg')}}"></a>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-4 item">
                    <a data-lightbox="photos" href="{{url('frontend/Byf_about/assets/img/building.jpg')}}"><img class="img-fluid" src="{{url('frontend/Byf_about/assets/img/building.jpg')}}"></a>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-4 item">
                    <a data-lightbox="photos" href="{{url('frontend/Byf_about/assets/img/loft.jpg')}}"><img class="img-fluid" src="{{url('frontend/Byf_about/assets/img/loft.jpg')}}"></a>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-4 item">
                    <a data-lightbox="photos" href="{{url('frontend/Byf_about/assets/img/desk.jpg')}}"><img class="img-fluid" src="{{url('frontend/Byf_about/assets/img/desk.jpg')}}"></a>
                </div>
            </div>
            <div class="intro">
                <p class="text-center"><strong>Betteryouth Merupakan</strong><br>What is Lorem Ipsum?Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown
                    printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with
                    the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting
                    industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also
                    the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus
                    PageMaker including versions of Lorem Ipsum. Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took
                    a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release
                    of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.<br><br></p>
            </div>
        </div>
    </section>
@endsection