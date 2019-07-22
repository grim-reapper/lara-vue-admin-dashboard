<?php

namespace Devdojo\Calculator;

use Illuminate\Support\ServiceProvider;

/**
 * testin
 */
class CalculatorServiceProvider extends ServiceProvider
{
	
	function boot()
	{
		include __DIR__.'/routes.php';
	}

	function register()
	{}
}