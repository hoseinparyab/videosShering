<?php

namespace App\Models;
use App\Models\User;
use App\Models\Comment; // استفاده از فضای نام کامل برای جلوگیری از تداخل
use App\Models\Traits\Likeable;
use Hekmatinasser\Verta\Verta;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Video extends Model
{
    use HasFactory,Likeable;
    protected $perPage = 10;

    protected $fillable = [
        'name', 'description', 'length', 'path', 'slug', 'thumbnail', 'category_id'
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function getLengthInHumanAttribute()
    {
        return gmdate("i:s", $this->value);
    }

    public function getCreatedAtAttribute($value)
    {
        return (new Verta($value))->formatDifference();
    }

    public function relatedVideos(int $count = 6)
    {

        return $this->category->getRandomVideos($count);
    }

    public function category()
    {

        return $this->belongsTo(Category::class);
    }

    public function getCategoryNameAttribute()
    {
        return $this->category?->name;
    }


    public function user(){
        return $this->belongsTo(User::class);
    }
    public function getOwnerNameAttribute()
    {
        return $this->user?->name;
    }
    public function getOwnerAvatarAttribute()
    {
        return $this->user?->gravatar;
    }
    public function comments()
    {
        return $this->hasMany(Comment::class)->orderBy('created_at','desc');
    }
    public function getVideoUrlAttribute()
    {
        return asset('storage/' . $this->path);
    }
}

