<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'price',
        'sku',
        'description',
        'weight',
        'height',
        'color',
        'brand',
        'manufacturer',
        'manufacturing_date',
        'discount',
        'is_on_sale'
    ];
}
