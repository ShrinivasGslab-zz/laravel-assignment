<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductDetails extends Model
{
    protected $fillable = ['id', 'product_id', 'stock', 'type', 'size', 'created_at', 'updated_at', 'deleted_at'];

    use SoftDeletes;
}
