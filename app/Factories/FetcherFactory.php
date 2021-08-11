<?php 

namespace App\Factories;

use App\Fetcher\CatFetcher;
use App\Fetcher\DogFetcher;
use App\Fetcher\EmptyFetcher;

class FetcherFactory extends Factory
{
	public function make(String $type) 
	{
		if($type == "cat") {
			return app(CatFetcher::class);
		} else if($type == "dog") {
			return app(DogFetcher::class);
		} else {
			return app(EmptyFetcher::class);
		}
	}
}