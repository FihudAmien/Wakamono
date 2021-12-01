<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TentangkamiPackages extends Model
{
    use SoftDeletes; 

    protected $fillable = [
    'titletentang' , 'contenttentang' , 'thumbnailstentang'
   ];

    protected $hidden =[

   ];

   
}
