<?php 

namespace App\Fetcher;

use App\Models\Resource;

class EmptyFetcher extends Fetcher
{
	private $resource;

	public function __construct(Resource $resource)
	{
		$this->setResource($resource);
		$this->resource->url = '';
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