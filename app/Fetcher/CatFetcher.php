<?php 

namespace App\Fetcher;

class CatFetcher extends Fetcher
{
	public function fetch()
	{
		return ['url' => 'http://placekitten.com/200/300'];
	}
}