<?php 

namespace App\Fetcher;

use App\Models\Resource;

class DogFetcher extends Fetcher
{
	private $resource;

	public function __construct(Resource $resource)
	{
		$this->setResource($resource);
		$this->resource->url = 'https://placedog.net/500/280';
	}

	public function setResource(Resource $resource)
	{
		$this->resource = $resource;
	}

	public function fetch()
	{
		return $this->resource;
	}
}