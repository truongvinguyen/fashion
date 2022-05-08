<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class product extends Model
{
  
    public $timestamps = false;
    protected $table = 'tb_product';
    protected $fillable = [

        'product_name',
        'product_price',
        'product_image',
        'id_category',
        'product_content',
        'status'
       
    ];
}
