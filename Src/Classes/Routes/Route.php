<?php
namespace Src\Classes\Routes;
use Src\Traits\TraitUrlParser;

class Route
{
	use TraitUrlParser;
	
	private $routes;

	function get_route()
	{
		$service = $this->get_url()[0];

		$this->routes = array(
			'' => 'Home',
		);

		if (array_key_exists($service, $route))
		{
			if (file_exists(REQUEST_DIR . "App/Controller/{$this->routes[$service]}.php"))
			{
				return $this->routes[$service];
			}
			else
			{
				return 'Home';
			}
		}
		else
		{
			return 'Error';
		}
	}
}
