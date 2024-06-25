<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Hekmatinasser\Verta\Verta;

class Video extends Model
{
    use HasFactory;

    protected $fillable =[
     'name', 'url' , 'thumbnail','slug', 'length'
    ];
   public function getLengthAttribute($value)
   {
        return gmdate("i:s",$value);
   }
   public function getCreatedAtAttribute($value)
   {
    return(new Verta($value))->formatDifference();
   }
}
