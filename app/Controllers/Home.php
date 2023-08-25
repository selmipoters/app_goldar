<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$data = array(
			'title'        => 'Data User',
			'content'    => 'layout/test'
		);
		return view('layout/wrapper', $data);
	}
}
