<?php

namespace App\Http\Controllers;
use App\BeritaPackages;
use App\QuotesPackages;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SearchController extends Controller
{
    // public function index()
    // {
    // $items1 = BeritaPackages::all();
    // $items2 = QuotesPackages::all();

    // return view('pages.search', compact('items1', 'items2'));    
    // }

    public function index()
    {
        return view('pages.search');    
    }

    function action(Request $request)
    {
     if($request->ajax())
     {
      $output = '';
      $query = $request->get('query');
      if($query != '')
      {
        $items1 = BeritaPackages::where('title', 'like', '%'.$query.'%')->get();
        $items2 = QuotesPackages::where('titlequotes', 'like', '%'.$query.'%')->get();
        $data = $items1->merge($items2);
      }
      else
      {
        $items1 = BeritaPackages::all();
        $items2 = QuotesPackages::all();
        $data = $items1->merge($items2);
      }
      $total_row = $data->count();
      if($total_row > 0)
      {
       foreach($items1 as $key => $value)
       {
        $output .= '
        <div class="col-sm-4 col-md-4 item">
            <a href="#"><img class="img-fluid" src="'.asset('frontend/img/' . $value->thumbnails).'"></a>
            <h3 class="name">'.$value->title.'</h3>
            <p class="description">'.Str::limit($value->content ,  180 ,'....').'</p>
            <a class="action" href="'.route('detail', [$value->slug]).'"><i class="fa fa-arrow-circle-right"></i></a>
        </div>
        ';
       }
       foreach($items2 as $key => $value)
       {
        $output .= '
        <div class="col-sm-4 col-md-4 item">
            <a href="#"><img class="img-fluid" src="'.asset('frontend/img/' . $value->thumbnailsquotes).'"></a>
            <h3 class="name">'.$value->titlequotes.'</h3>
            <p class="description">'.Str::limit($value->contentquotes ,  180 ,'....').'</p>
            <a class="action" href="'.route('detailquotes', [$value->slugquotes]).'"><i class="fa fa-arrow-circle-right"></i></a>
        </div>
        ';
       }
      }
      else
      {
       $output = '
       <div class="col-12"><h3>Tidak ditemukan</h3></div>
       ';
      }
      $data = array(
       'table_data'  => $output,
       'total_data'  => $total_row
      );

      echo json_encode($data);
     }
    }
}





