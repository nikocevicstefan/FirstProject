<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use PhpParser\Builder\Class_;

class Task extends Model
{

    protected $fillable = ['user_id','active','favorite', 'completed', 'body', 'id'];

    public function user()
    {
        $this->belongsTo(User::class);
    }

   public static function completed()
   {
       return static::where('completed', 1)->get();
   }

   public static function favorite()
   {
       return static::where('favorite', 1)->get();
   }

   public static function active()
   {
       return static::where('completed', 0)->get();
   }

}
