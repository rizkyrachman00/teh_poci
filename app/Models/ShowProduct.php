<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShowProduct extends Model {
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'image',
        'quantity',
        'price',
        'discount_price',
    ];

    public function manajemenProduct() {
        return $this->belongsTo(manajemenProduct::class, 'title');
    }
}
