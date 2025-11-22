<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TankerService extends Model
{
    use HasFactory;

    protected $fillable = [
        'provider_name',
        'tanker_size', 
        'price',
        'areas',
        'delivery_time',
        'description',
        'available',
        'rating',
        'image_path'
    ];

    protected $casts = [
        'available' => 'boolean',
        'price' => 'decimal:2',
        'rating' => 'decimal:2'
    ];

    public function getAreasArrayAttribute()
    {
        return explode(',', $this->areas);
    }
}