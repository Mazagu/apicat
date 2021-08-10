<?php 

namespace App\Helpers\Facades;

use Illuminate\Support\Facades\Facade;

class Brackets extends Facade
{
	protected static function getFacadeAccessor()
	{
		return 'brackets';
	}
}