<?php

namespace App\Models;

use GoldSpecDigital\LaravelEloquentUUID\Database\Eloquent\Uuid;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class club_info extends Model
{

    use HasFactory;


    protected $fillable=[

        'club_name',
        'club_type',
        'club_website',
        'club_purpose',
        'club_icon',
        'club_introduce',
        'club_cover',
        'club_place',
        'club_time',
        'source_of_funding'

    ];
}
