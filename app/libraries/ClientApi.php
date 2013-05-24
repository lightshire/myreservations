<?php
	class ClientApi{
		public static function Save($API_TYPE, $input){
			switch($API_TYPE){
				case ApiTypes::$JSON:
					return self::json($input);
					break;
				case ApiTypes::$SHORT_CODE:
					return self::short_code($input);
					break;
				case APITypes::$LONG_CODE:
					return self::long_code($input);
					break;
				case ApiTypes::$KEY:
					return self::key($input);
					break;
			}
		}
		public static function json($input){}
		public static function short_code($input){
			//$input = $input;
			$rules = array(
				// 'from'				=>	'required',
				// 'to'				=>	'required',
				 'client_first_name'	=>	'required',
				 'client_middle_name'=>	'required',
				 'client_last_name'	=>	'required',
				'_token'			=>	'required'
			);
			$validator = Validator::make($input, $rules);
			if($validator->fails() || e(Input::get('_token')) != Session::token()){
				return null;
			}else{
				$client = new Client;
				$client->first_name = e(Input::get('client_first_name'));
				$client->middle_name = e(Input::get('client_middle_name'));
				$client->last_name = e(Input::get('client_last_name'));
				$client->save();
				return $client;
			}

		}
		public static function long_code($input){}
		public static function key($input){}
	}
	
