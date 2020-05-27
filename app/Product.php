<?php

namespace App;
use Illuminate\Database\Eloquent\SoftDeletes;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['id', 'name', 'description', 'sku', 'status', 'is_deleted', 'created_at', 'updated_at','deleted_at'];

    use SoftDeletes;
}
