@extends('layouts.search')

@section('title')
    Search-Wakamono.club
@endsection

@section('content')
<!-- <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item active"><a href="{{url('/')}}">News</a></li>
        <li class="breadcrumb-item" aria-current="page">List Search</li>
    </ol>
</nav> -->
<div class="container" style="margin-top: 130px">
    <section class="article-list">
        <div class="container">
            <div class="intro">
                <h2 class="text-center">Search</h2>
                <nav class="navbar" style="justify-content: center">
                <form class="form-inline">
                    <input class="form-control mr-sm-2" type="text" id="search" name="search" placeholder="Cari disini" aria-label="Search">
                    <!-- <button class="btn btn-warning my-2 my-sm-0" type="submit">Submit</button> -->
                </form>
                </nav>
                <p class="text-center mt-4">Selamat datang di Search terbaru wakamono club , selamat membaca dan jangan bosan bosan ya </p>
            </div>
            <div class="row articles" id="databody">
                
            </div>
        </div>
    </section>
</div>
@endsection
@section('js')
<script>
  $(document).ready(function(){
    console.log('Halo')
   fetch_customer_data();
  
   function fetch_customer_data(query = '')
   {
    $.ajax({
     url:"{{ route('search.action') }}",
     method:'GET',
     data:{query:query},
     dataType:'json',
     success:function(data)
     {
      $('#databody').html(data.table_data);
     }
    })
   }
  
   $(document).on('keyup', '#search', function(){
    var query = $(this).val();
    fetch_customer_data(query);
   });
  });
</script>
@endsection