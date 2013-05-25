<?php
	class ReservationApi{
		public static function Save($API_TYPE, $input){
			switch($API_TYPE){
				case ApiTypes::$JSON:
					return self::json($input);
					break;
				case ApiTypes::$SHORT_CODE:
					return self::short_code($input);
					break;
				case ApiTypes::$LONG_CODE:
					return self::long_code($input);
					break;
				case ApiTypes::$KEY:
					return self::key($input);
					break;
			}
		}
		public static function json($input){}

		public static function pullSimple($hotel_id, $skip, $take){
			$reservations = Reservation::wherehotel_id($hotel_id)->skip($skip)->take($take)->get();
			return $reservations;
		}

		public static function pullComplex($hotel_id = 0, $scopes = array(array('id','=','1',true))){
			$reservations = Reservation::wherehotel_id($hotel_id);
			foreach($scopes as $scope){
				if(count($scope) == 4){
					if($scope[3]){
						$reservations->orWhere($scope[0], $scope[1], $scope[2]);
					}else{
						$reservations->orWhere($scope[0], $scope[1], $scope[2]);
					}
				}	
			}
			return $reservations->get();
		}
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
	
