<?php 

// ../ventapp_web_desa/fw/View.php

abstract class View {

	public function render() {	
		include $_SERVER['DOCUMENT_ROOT'] . '/ventapp_web_desa/html/'. get_class($this) .'.php';
	}

}