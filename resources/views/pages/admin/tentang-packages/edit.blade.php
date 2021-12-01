@extends('layouts.admin')

@section('konten')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
          <h1 class="h3 mb-0 text-gray-800">Edit Tentang</h1>
        </div>
       @if ($errors->any())
       <div class="alert alert-danger">
           <ul>
               @foreach ($errors->all() as $error)
                   <li>
                       {{ $error }}
                   </li>
               @endforeach
           </ul>
       </div>
           
       @endif

       <div class="card shadow">
           <div class="card-body">
               <form action="{{route('tentang-packages.update' , $item->id)}}" method="post" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label for="thumbnails">
                        Upload Gambar
                    </label>
                    <input type="file" class="form-control" name="thumbnailstentang" placeholder="thumbnails" value="{{$item->thumbnailstentang}}">
                    Jangan Lupa Upload Gambarnya dahulu, Ukuran Foto harus : Max 3mb
                </div>
                <div class="form-group">
                    <label for="titletentang">Judul</label>
                    <input type="text" class="form-control" name="titletentang" placeholder="Masukkan Judul" value="{{$item->titletentang}}">
                </div>
                <div class="form-group">
                    <label for="contenttentang">Konten</label>
                    <textarea id="contenttentang" class="form-control" name="contenttentang" >{{$item->contenttentang}}</textarea>
                </div>
                <button type="submit" class="btn btn-primary btn-block">
                    Ubah
                </button>
               </form>
           </div>
        </div>
    </div>

    <script type="text/javascript" src="{{ asset('ckeditor/ckeditor.js')}}"></script>
    <script type="text/javascript" src="{{ asset('ckfinder/ckfinder.js')}}"></script>
    <script type="text/javascript">
            CKEDITOR.replace( 'contenttentang' );
    </script>

@endsection