<?php

namespace App\Models;

use App\Enums\Heating;
use App\Enums\WallType;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Building extends Model
{
    use HasFactory;

    protected $fillable = [
        'city',
        'street',
        'building_number',
        'build_year',
        'wallType',
        'heating',
        'status'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function builder()
    {
        return $this->belongsTo(Builder::class, 'builder_id', 'id')->withDefault();
    }

    protected $enumCasts = [
        'heating' => Heating::class,
        'wallType' => WallType::class,
    ];
}
