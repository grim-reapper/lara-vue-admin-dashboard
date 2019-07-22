<?php

namespace Imran\Verifier;

use Illuminate\Support\ServiceProvider;

/**
 * testin
 */
class VerifierServiceProvider extends ServiceProvider
{
	
	function boot()
	{
		include __DIR__.'/routes.php';
	}

	function register()
	{
		
	}
}