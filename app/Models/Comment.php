<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Comment extends Model
{
    protected $fillable=['post_id','user_id','text','status'];
    public function user(){
        return $this->belongsTo('App\Models\User','user_id');
    }
}
