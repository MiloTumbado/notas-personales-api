<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Note extends Model {
 protected $fillable = ['title','author','noted_at','body','category_id'];
 protected $casts=['noted_at'=>'datetime'];public function category(){return $this->belongsTo(Category::class);}
}
