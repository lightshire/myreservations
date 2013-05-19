<?php

	class UserTableSeeder extends Seeder{
		public function run(){
			DB::table('users')->delete();
			User::create(array('username'=>'imcorleone','password'=>Hash::make('Qweasd123:'), 'role_id'=>'1'));
		}
	}