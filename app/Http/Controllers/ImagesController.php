<?php

namespace App\Http\Controllers;

use App\Fetcher\CatFetcher;

class ImagesController extends Controller
{
	public function cat()
	{	
		$cat = app(CatFetcher::class);
		return $cat->fetch();
	}
}