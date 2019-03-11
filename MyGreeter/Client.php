<?php
date_default_timezone_set('Asia/Shanghai');
/**
 * 
 */
class Client
{
	
	function __construct()
	{
		$h = date("H", time());

	    if ($h>0 && $h<=12){
	        print_r('Good morning');
	    }elseif ($h>12 && $h<18){
	        print_r('Good afternoon');
	    }elseif ($h>18 && $h<24){
	        print_r('Good evening');
	    }
	}


}

$a = new Client();

?>