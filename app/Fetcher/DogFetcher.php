<?php 

namespace App\Fetcher;

class DogFetcher extends Fetcher
{
	public function fetch()
	{
		return ['url' => 'https://placedog.net/500/280'];
	}
}