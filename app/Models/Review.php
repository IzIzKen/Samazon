<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    public function product()
    {
        return $this->belongsTo('App/Models/Product');
    }

    public function User()
    {
        return $this->belongsTo('App/Models/User');
    }
}
