<?php

namespace App\Repositories;

use Illuminate\Http\Request;

class ProductRepository
{
	public function productList(Request $request)
    {
    	$url = 'api/products';
    	$params = $request->all();

        return fetch_api()->puller($url, $params);
    }
}