<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model{
  protected $guarded = [];
}

//get /product to all product
//get /product/id to specific product by id