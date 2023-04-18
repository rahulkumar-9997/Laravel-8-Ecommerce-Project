<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class producs_dummy extends Model
{
    use HasFactory;
    protected $table = 'producs_dummies';
    protected $fillable = ['product_head_name', 'product_name', 'product_price', 'product_unit', 'product_qty', 'product_image', 'description'];
}
