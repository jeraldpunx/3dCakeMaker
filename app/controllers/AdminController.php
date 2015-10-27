<?php

class AdminController extends BaseController {

	public function reports() {
		return View::make('admin.reports');
	}

	public function users() {
		$users = DB::SELECT(DB::RAW("SELECT * FROM user"));

		return View::make('admin.users', ['users'=>$users]);
	}

	public function user($user_id) {
		$users = DB::SELECT(DB::RAW("SELECT * FROM user WHERE id = $user_id"));

		$user = $users[0];

		return View::make('admin.userview', ['user'=>$user]);
	}

	public function cakes() {
		$cakes = DB::SELECT(DB::RAW("SELECT * FROM cakemodel WHERE id = 115"));
		$cake = $cakes[0];
		return View::make('admin.cakes', ['cake'=>$cake]);
	}

}