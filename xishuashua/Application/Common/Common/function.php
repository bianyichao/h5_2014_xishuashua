<?php
function isLogin(){
	if(!isset($_SESSION['admin']) || $_SESSION['admin'] == ''){
		return false;
	}


   return ture;
}
