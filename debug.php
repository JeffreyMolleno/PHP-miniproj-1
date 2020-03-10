<?php
	function consolelog($data){
		if ( is_array( $data ) )
	        $log = "<script>console.log( 'Debug Objects: " . implode( ',', $data) . "' );</script>";
	    else
	        $log = "<script>console.log( 'Debug Objects: " . $data . "' );</script>";
	    echo $log;
	}
?>