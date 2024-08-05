<?php

namespace App\Models;

use App\Models\Traits\Likeable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = ['body', 'user_id'];
    use HasFactory,Likeable;

    public function video()
    {
        return $this->belongsTo(Video::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);

    }
    public function likes(){

        return $this->morphMany(Like::class,'likeable');
    }
}
