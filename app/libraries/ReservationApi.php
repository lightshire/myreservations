<?php
	class ReservationApi extends RestAPI{
		
		public static function json($input){}

		public static function short_code($input){
			//$input = $input;
			$rules = array(
				'from'				=>	'required',
				'to'				=>	'required',
				// 'client_first_name'	=>	'required',
				// 'client_middle_name'=>	'required',
				// 'client_last_name'	=>	'required',
				'_token'			=>	'required'
			);
			$validator = Validator::make($input, $rules);
			if($validator->fails() || e(Input::get('_token')) != Session::token()){
				return null;
			}else{
				$reservation = new Reservation;
				$reservation->booked_from = DateConverter::jqueryToDate(e(Input::get('from')));
				$reservation->booked_to = DateConverter::jqueryToDate(e(Input::get('to')));
				$reservation->booking_number = "BK_".date("U");
				$reservation->status = "1";
				$reservation->save();
				$client = ClientApi::save(ApiTypes::$SHORT_CODE, $input);
				if($client != null)
					$reservation->client_id = $client->id;
					$reservation->save();
					$reservation->client = $client->toArray();
				return $reservation;
			}

		}
		public static function long_code($input){}
		public static function key($input){}
	}
	
