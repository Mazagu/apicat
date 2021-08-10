<?php 

namespace App\Fetcher;

abstract class Fetcher implements FetcherInterface
{
	abstract public function fetch();
}