<?php

include('csrf.php');

include "controller/controller_pegawai.php";

$main = new controller();

if (isset($_GET['i'])) {
	
    if(validation()==true)
    {
		$main->view_post(); 
	}
} else if (isset($_GET['e'])) {
	
    if(validation()==true)
    {
		$main->view_put($_GET['e']); 
	}
} else {

	$main->view_index(); 

}
