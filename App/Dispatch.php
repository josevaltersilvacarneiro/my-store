<?php
namespace App;
use Src\Classes\Routes\Route;

class Dispatch extends Route
{
	private $object;
	private $method;
	private $parameters = [];

	public function __construct()
	{
		self::add_controller();
	}

	private function add_controller()
	{
		$class_name = 'App\\Controller' . $this->get_route();
		$this->object = new $class_name;

		if (isset($this->get_url()[1]))
		{
			self::add_method();
		}
	}

	private function add_method()
	{
		if (method_exists($this->object, $this->get_url()[1]))
		{
			$this->set_method("${$this->get_url()[1]}");
			self::add_parameters();
		}
	}

	private function add_parameters()
	{
		$arr_length = count($this->get_url());

		if ($arr_length > 2)
		{
			for ($i = 2; $i < $arr_length; $i++)
			{
				$this->set_parameters($this->get_url()[$i]);
			}
		}
	}

	// gets

	public function get_method()
	{
		return $this->method;
	}

	public function get_parameters()
	{
		return $this->parameters;
	}

	// sets
	
	public function set_method($method)
	{
		$this->method = $method;
	}

	public function set_parameters($parameter)
	{
		array_push($this->parameters, $parameter);
	}
}
?>
