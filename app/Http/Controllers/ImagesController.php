<?php

namespace App\Http\Controllers;

use App\Fetcher\CatFetcher;
use App\Fetcher\DogFetcher;

class ImagesController extends Controller
{
	public function __invoke($type)
	{	
		if($type == "cat") {
			$fetcher = app(CatFetcher::class);
		} else if($type == "dog") {
			$fetcher = app(DogFetcher::class);
		} else {
			abort(404);
		}

		return $fetcher->fetch();
	}
}