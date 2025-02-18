<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Advert extends Model
{
    use HasFactory;
    protected $table = "adverts";

    protected $fillable=[
        'advertTitle',
        'advertDescription',
        'advertCover'
    ];

}
