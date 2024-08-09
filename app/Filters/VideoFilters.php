<?php
namespace App\Filters;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Builder;

class VideoFilters
{
  public function __construct(public Builder $builder)
  {

  }
  public function apply(array $params)
  {
    foreach($params as $methodName => $value)
    {
            if(is_null($value)) continue;
            $this->$methodName($value);
    }
  }
  private function sortBy($value)
  {
    if ($value == 'like') {
       $this->builder -> leftJoin('likes',function ($join){
            $join->on('likes.likeable_id','=' ,'videos.id')
            -> where('likes.likeable_type', '=','App\Models\Video')
            ->where('likes.vote', '=' ,1 );
        })->groupBy('videos.id')->select(['videos.*',DB::raw('count(likes.id) as count')])->orderBy('count','desc');

    if ($value== 'length') {
       $this->builder->orderBy('length', 'desc');
    }
    if ($value == 'created_at') {
       $this-> builder->orderBy('created_at', 'desc');
    }
}
  }
  private function length($value)
  {

    if ($value= 1) {
        $this-> builder->where('length', '<', 60);
    }
    if ($value == 2) {
       $this-> builder->whereBetween('length', [60, 300]);
    }
    if ($value== 3) {

        $this-> builder->where('length', '>', 300);
    }
  }

  private function q($value)
  {

    $this ->builder->where('name','like',"%{$value} %");
  }
}
