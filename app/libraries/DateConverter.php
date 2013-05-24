<?php
	class DateConverter{
		public static function jqueryToDate($string){
			$explode =explode("/", $string);
			//05/08/2013 to 2013-05-21
			$new = $explode[2]."-".$explode[0]."-".$explode[1]." 00:00:00";
			return $new;
		}
	}
