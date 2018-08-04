<?php 
class Session{
	
	public function __construct(){
		if(!isset($_SESSION)){
			session_start(); 
		}
	}

	public function setFlash($message,$type = 'success'){
		$_SESSION['flash'] = array(
			'message' => $message,
			'type'	=> $type
		); 
	}

	public function flash(){
		if(isset($_SESSION['flash']['message'])){
			$html ='<div><span class="label label-'.$_SESSION['flash']['type'].'">'.$_SESSION['flash']['message'].'</span></div>';  
			$_SESSION['flash'] = array(); 
			return $html; 
		}
	}

}