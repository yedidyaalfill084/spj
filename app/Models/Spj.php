<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Spj extends Model
{
    public function namaspj()
    {
        return $this->belongsTo(Namaspj::class);
    }
}
