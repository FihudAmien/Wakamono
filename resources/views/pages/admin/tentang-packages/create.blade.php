@extends('layouts.admin')

@section('konten')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
          <h1 class="h3 mb-0 text-gray-800">Tambah Tentang</h1>
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
               <form action="{{route('tentang-packages.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="thumbnailstentang">
                        Thumbnails Upload
                    </label>
                    <input type="file" class="form-control" name="thumbnailstentang" placeholder="thumbnails" value="{{old('thumbnailstentang')}}"> Ukuran Foto harus : Max 3mb
                </div>
                <div class="form-group">
                    <label for="title">Judul</label>
                    <input type="text" class="form-control" name="titletentang" placeholder="Masukkan Judul" value="{{old('title')}}">
                </div>
                <div class="form-group">
                    <label for="contenttentang">Konten</label>
                    <textarea id="contenttentang" class="form-control" name="contenttentang" value="{{old('contenttentang')}}" ></textarea>
                </div>
                <button type="submit" class="btn btn-primary btn-block">
                    Simpan
                </button>
               </form>
           </div>
        </div>
    </div>

    {{-- <script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
           $('.ckeditor').contenttentang();
        });
    </script> --}}
    <script type="text/javascript" src="{{ asset('ckeditor/ckeditor.js')}}"></script>
    <script type="text/javascript" src="{{ asset('ckfinder/ckfinder.js')}}"></script>
    <script type="text/javascript">
            CKEDITOR.replace( 'contenttentang' );
    </script>
    
@endsection