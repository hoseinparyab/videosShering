<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    protected $fillable =['vote' ,'user_id'];
    use HasFactory;
    public function likeable()
    {

        return $this->morphTo();
    }
}
