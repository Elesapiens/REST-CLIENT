<?
/*

Created by Rafael Torres Balderas (Raphadareangel)
website: www.raphadareangel.com
for Elesapiens Learning & FUN
website:www.elesapiens.com

*/
require_once('Client_REST.php');

echo Http::connect('elesapiens.com', 8080)
    ->ElesapiensdoGet('/eleresourse/eleresource', array('user' => "xxxx",
														'pass' => "xxxx",
														"resource_id" => 42,));
														
														
														echo Http::connect('elesapiens.com', 8080)
    ->ElesapiensdoPost('/eleresourse/eleresource', array('user' => "xxxx",
														'pass' => "xxxx",
														"resource_id" => 42,));
	
	?>