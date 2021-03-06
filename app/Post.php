<?php

namespace App;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{


    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
