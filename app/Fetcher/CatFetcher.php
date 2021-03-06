<?php 

namespace App\Fetcher;

use App\Models\Resource;

class CatFetcher extends Fetcher
{
	private $resource;

	public function __construct(Resource $resource)
	{
		$this->setResource($resource);
		$this->resource->url = 'http://placekitten.com/200/300';
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