@extends('layouts.admin')

@section('konten')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Halaman Berita</h1>
            <a href="{{route('berita-packages.create')}}" class="btn btn-sm btn-primary shadow=sm">
                <i class="fas fa-plus fa-sm text-white-50">
                </i> Tambah Berita
            </a>
        </div>

        <div class="row">
            <div class="card-body">
                <div class="table-responsive">
                 <table class="table table-bordered" width="100%" cellspacing="0" >
                     <thead>
                         <tr>
                             <th>Waktu Upload</th>
                             <th>Thumbnails</th>
                             <th>Judul</th>
                             <th>Sunting</th>
                         </tr>
                     </thead>
                     <tbody>
                        @forelse ($items as $item)
                        <tr>
                            <td>{{$item->created_at->format('l, d F Y H:i')}}</td>
                            <td>
                                <img src="{{ asset('frontend/img/'. $item->thumbnails)}}" alt="" style="width: 150px" class="img-thumbnail"/>
                            </td>
                            <td>{{$item->title}}</td>
                            <td>
                                <a href="{{route('berita-packages.edit', $item->id)}}" class="btn btn-info mb-2">
                                <i class="fa fa-pencil-alt"></i>
                                </a>
                                <form action="{{route('berita-packages.destroy', $item->id)}}" method="post" class="d-inline">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger mb-2">
                                        <i class="fa fa-trash">
                                        </i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="7" class="text-center">
                                Data Anda Kosonng
                            </td>
                        </tr>
                         @endforelse
                    </tbody>
                 </table>

                 {{ $items->links() }}

                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->

    
@endsection