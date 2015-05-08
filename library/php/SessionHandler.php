<?php

class SessionHandler
	{
	
	function __construct()
		{	
		if(!isset($_SESSION))			session_start();
		if(!isset($_SESSION['COUNT'])) 	$_SESSION['COUNT']= 0;
		if(!isset($_SESSION['PAGE'])) 	$_SESSION['PAGE']= STARTPAGE;
			
		$_SESSION['COUNT']++;		
		}
	
	function goto_page($PAGE)
		{
		$_SESSION['PAGE'] = $PAGE;
		header('Location: ' . $_SERVER['PHP_SELF']);
		}
	
	function get_page()
		{
		return($_SESSION['PAGE']);
		}
	
	function login($password, $DB)
		{
		$result = $DB->user_authenticate($password);

		if($result != false)
			{
			$_SESSION['User'] = $result;
			$this->goto_start_page();
			}
			
		return(false);
		}
	
	function goto_start_page()
		{
			if(isset($_SESSION['User']))
				{
				if($_SESSION['User']['UserType'] == USERTYPE0)
					{
					$this->goto_page(STARTPAGE0);
					}
				if($_SESSION['User']['UserType'] == USERTYPE1)
					{
					$this->goto_page(STARTPAGE1);
					}
				if($_SESSION['User']['UserType'] == USERTYPE2)
					{
					$this->goto_page(STARTPAGE2);
					}
				}
		}
	
	function logout()
		{
		session_destroy();
		session_start();		
		$_SESSION['COUNT'] = 0;
		$_SESSION['PAGE'] = STARTPAGE;
		header('Location: ' . $_SERVER['PHP_SELF']);
		}
		
	}

?>