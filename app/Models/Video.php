<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Hekmatinasser\Verta\Verta;

class Video extends Model
{
    use HasFactory;

    public function getRouteKeyName(){
      return 'slug' ;
      }
    protected $fillable =[
     'name', 'url' , 'thumbnail','slug', 'length','category_id'
    ];
    public function getLengthInHumanAttribute()
    {
        return gmdate("i:s", $this->value);
    }

   public function getCreatedAtAttribute($value)
   {
    return(new Verta($value))->formatDifference();
   }
   public function relatedVideos( int $count =6 )
   {
     return Video::all()->random($count);
   }
   public function category(){
    return $this->belongsTo(category::class);
   }
   public function getCategoryNameAttribute(){
    return $this->category ? $this->category->name : null;
}
}