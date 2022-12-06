<?php
namespace App\Controller;
use Src\Classes\Render\Render;

class Home extends Render
{
	function __construct()
	{
		$this->set_dir('Home/');
		$this->set_title('Start');

		$this->render_layout();
	}	
}
