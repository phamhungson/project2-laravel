<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'product_catalog';
  
    protected $primaryKey = 'product_catalog_id';
 
	public function Product(){
		return $this->hasMany('App\Product','product_catalog_id','product_id');
	}
}
