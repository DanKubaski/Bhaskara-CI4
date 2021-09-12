<?php

namespace App\Controllers;

use App\Models;

class Calculos extends BaseController
{
    public function index()
    {
      echo view('home');
    }

    public function frmInserir()
	{		
	  if(isset($this->request->getPost()['id'])) {
            $id = $this->request->getPost()['id'];
           } else {
            $id = FALSE;
           }

		$a = $this->request->getPost()['A'];
		$b = $this->request->getPost()['B'];
		$c = $this->request->getPost()['C'];

		$Delta = ($b *$b) - (4 * $a * $c);
		$x1= (- $b + sqrt($Delta)) / (2 * $a);
		$x2= (- $b - sqrt($Delta)) / (2 * $a);

		$bhasModel = new \App\Models\CalculosModel();

		$data = [
		'a' => $a,
		'b' => $b,
		'c' => $c,
		'delta' => $Delta,
		'x1' => $x1,
		'x2' => $x2
		];

		if($id != FALSE) { 
		$data['id'] = $id;
		}

		$result = $bhasModel->save($data);
		var_dump($result);
	}

}