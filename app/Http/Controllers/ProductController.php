<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\Controller;
use App\Repositories\ProductRepository;

class ProductController extends Controller
{
	protected $repo;

	public function __construct(ProductRepository $repo)
    {
        $this->repo = $repo;
    }

	public function productList(Request $request)
	{
		$locale = App::getLocale();
		
		$request->merge(['locale' => $locale]);

		$products = $this->repo->productList($request);

		return view('products.index', compact('products'));	
	}
}