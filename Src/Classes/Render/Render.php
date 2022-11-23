<?php
namespace Src\Classes\Render;

class Render
{
	/*
	 *
	 *
	 *
	 *
	 *
	 *
	 *
	 */

	private $dir;
	private $titlee;

	protected function set_title($titlee)
	{
		$this->titlee = $titlee;
	}

	protected function set_dir($dir)
	{
		$this->dir = $dir;
	}

	protected function get_title()
	{
		return $this->titlee;
	}

	protected function get_dir()
	{
		return $this->dir;
	}

	protected function render_layout()
	{
		require_once(REQUEST_DIR . 'App/Viewer/Layout.php');
	}

	protected function add_header()
	{
		if (file_exists("App/Viewer/{$this->get_dir()}Header-v1.php"))
		{
			require_once(REQUEST_DIR . "App/Viewer/{$this->get_dir()}Header-v1.php");
		}
	}

	protected function add_main()
	{
		if (file_exists("App/Viewer/{$this->get_dir()}Main-v1.php"))
		{
			require_once(REQUEST_DIR . "App/Viewer/{$this->get_dir()}Main-v1.php");
		}
	}

	protected function add_footer()
	{
		if (file_exists("App/Viewer/{$this->get_dir()}Footer-v1.php"))
		{
			require_once(REQUEST_DIR . "App/Viewer/{$this->get_dir()}Footer-v1.php");
		}
	}
}
