<?php

namespace App\Models;

use App\Enums\WallType;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Enums\Heating;

class Builder extends Model
{
    use HasFactory;

    protected $enumCasts = [
        'heating' => Heating::class,
        'wallType' => WallType::class,
    ];
}
