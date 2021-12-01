@extends('layouts.admin')

@section('konten')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
          <h1 class="h3 mb-0 text-gray-800">Tambah Quotes</h1>
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
               <form action="{{route('quotes-packages.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="thumbnailsquotes">
                        Thumbnails Upload
                    </label>
                    <input type="file" class="form-control" name="thumbnailsquotes" placeholder="thumbnailsquotes" value="{{old('thumbnailsquotes')}}">(Max Ukuran : 340 x 227)
                </div>
                <div class="form-group">
                    <label for="titlequotes">Judul</label>
                    <input type="text" class="form-control" name="titlequotes" placeholder="Masukkan Judul" value="{{old('titlequotes')}}">
                </div>
                <div class="form-group">
                    <label for="contentquotes">Konten</label>
                    <textarea id="contentquotes" class="form-control" name="contentquotes" value="{{old('contentquotes')}}" ></textarea>
                </div>
                <button type="submit" class="btn btn-primary btn-block">
                    Simpan
                </button>
               </form>
           </div>
        </div>
    </div>

    <script type="text/javascript" src="{{ asset('ckeditor/ckeditor.js')}}"></script>
    <script type="text/javascript" src="{{ asset('ckfinder/ckfinder.js')}}"></script>
    <script type="text/javascript">
            CKEDITOR.replace( 'contentquotes' );
    </script>
@endsection