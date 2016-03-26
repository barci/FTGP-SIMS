<?php 
class eventsBase
{
	var $events = array();
	var $captchas = array();
	var $maps = array();
	function exists($event, $table = "") 
	{ 
		if($table == "")
			return (array_key_exists($event,$this->events)!==FALSE);
		else 
			return isset($this->events[$event]) && isset($this->events[$event][$table]);
	}

	function existsMap($page)
	{
		return (array_key_exists($page,$this->maps)!==FALSE);
	}
		
	function existsCAPTCHA($page)
	{
		return (array_key_exists($page,$this->captchas)!==FALSE);
	}
	
	function callCAPTCHA(&$pageObject)
	{
		if($pageObject->pageType == "add")
			$this->displayCaptchaOnAdd();
		elseif($pageObject->pageType == "edit")
			$this->displayCaptchaOnEdit();
		elseif($pageObject->pageType == "register")
			$this->displayCaptchaOnRegister();
	}
}

class class_GlobalEvents extends eventsBase
{ 
	function class_GlobalEvents()
	{
	// fill list of events
		$this->events["AfterSuccessfulLogin"]=true;


//	onscreen events


	
	
		}
// Captchas functions	
//	handlers

		
		
		
		
		
		
				// After successful login
function AfterSuccessfulLogin($username,$password,&$data)
{

		$_SESSION["StaffID"]=$data["StaffID"];


// Place event code here.
// Use "Add Action" button to add code snippets.
;		
} // function AfterSuccessfulLogin

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

//	onscreen events

} 
?>
