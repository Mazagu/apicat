<?php 

namespace App\Factories;

abstract class Factory implements FactoryInterface
{
	abstract public function make(String $type);
}