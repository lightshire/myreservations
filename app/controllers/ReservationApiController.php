<?php

	class ReservationApiController extends BaseController{
		public function getByHotelId($hotel_id = 0, $skip  = 0, $take = 10){
			return ReservationApi::pullSimple($hotel_id, $skip, $take);
		}
		
	}
