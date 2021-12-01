<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BeritaPackages extends Model
{
    use SoftDeletes; 

    protected $fillable = [
    'title' , 'slug' , 'content' , 'thumbnails'
   ];

    protected $hidden =[

   ];
   
   public function getRouteKeyName()
    {
        return 'slug';
    }
}
