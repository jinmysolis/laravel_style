<?php

namespace TeachMe\Providers;

use Collective\Html\HtmlServiceProvider as CollectiveHtmlServiceProvider;
use TeachMe\componentes\htmlBuilde;

class HtmlServiceProvider extends \Collective\Html\HtmlServiceProvider{
   
    
    protected function registerHtmlBuilder()
	{
		$this->app->bindShared('html', function($app)
		{
			return new HtmlBuilder($app['url']);
		});
	}
}
