<?php
namespace Src\Traits;

trait TraitUrlParser()
{
	protected function get_url()
	{
		/*
		 * It splits the url and returns a array 
		 */

		return explode('/', rtrim($_GET['url']), FILTER_SANITIZE_URL);
	}
}
