<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cat extends Model
{
    use HasFactory;

    protected $guarded = false;
    protected $table = 'cats';

    public function breed()
    {
        return $this->belongsTo(Breed::class);
    }
}
