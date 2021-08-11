<?php

namespace App\Http\Controllers;

use App\Factories\FetcherFactory;

class ImagesController extends Controller
{
	public function __invoke($type = '')
	{	
		$fetcher = app(FetcherFactory::class)->make($type);		
		return $fetcher->fetch();
	}
}