<?php

namespace App\Repositories;

use Illuminate\Http\Request;

class ProductRepository
{
	public function product(Request $request)
    {
    	$url = 'api/product';
    	$params = $request->all();
        
        return fetch_api()->puller($url, $params);
    }
   
}