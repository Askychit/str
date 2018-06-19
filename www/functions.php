<?php

function pront-arr($arr){

	echo '<pre>' . print_r($arr,true) .'</pre>';
}


function get_tests(){

global $zz;
query = "SELECT * FROM test";
$res = mysqli_query($zz,$query);
$data = array();
while($row = mysqli_fetch_assoc($res)){

	$data[] = $row;

}
return $data;
}

?>







