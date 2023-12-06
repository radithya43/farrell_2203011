<?php

namespace App\Controllers;

use App\Core\Controller;

class Game extends Controller
{
	public object $model;

	public function __construct()
	{
		parent::cekLogin();

		$this->model = new \App\Models\Game();
	}

	public function index()
	{
		$data['rows'] = $this->model->show();
		$this->dashboard('game/index', $data);
	}

	public function input()
	{
		$this->dashboard('game/input');
	}

	public function save()
	{
		$this->model->save();
		header('location:' . URL . '/game');
	}

	public function edit($id_game)
	{
		$data['row'] = $this->model->edit($id_game);
		$this->dashboard('game/edit', $data);
	}

	public function update()
	{
		$this->model->update();
		header('location:' . URL . '/game');
	}

	public function delete($id_game)
	{
		$this->model->delete($id_game);
		header('location:' . URL . '/game');
	}
}
