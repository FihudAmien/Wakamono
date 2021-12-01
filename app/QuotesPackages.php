<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class QuotesPackages extends Model
{
    use SoftDeletes; 

    protected $fillable = [
    'titlequotes' , 'slugquotes' , 'contentquotes' , 'thumbnailsquotes'
   ];

    protected $hidden =[

   ];

   public function getRouteKeyName()
    {
        return 'slugquotes';
    }
   
}
