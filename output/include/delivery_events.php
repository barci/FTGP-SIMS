<?php 
class eventclass_delivery  extends eventsBase
{ 
	function eventclass_delivery()
	{
	// fill list of events
		$this->events["AfterEdit"]=true;


//	onscreen events


	}
// Captchas functions	

//	handlers

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// After record updated
function AfterEdit(&$values,$where,&$oldvalues,&$keys,$inline,&$pageObject)
{

		
	if ($values['delFlag']=="YES") {
	  $prodID  = $values['prodID'];
    $orderID = $values['orderID'];
	  $delQty  = $values['qty'];

		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "FTGP-SIMS";
	  $conn = new mysqli($servername, $username, $password, $dbname);

		$sql = "UPDATE orderdetail SET DelQuant=DelQuant+$delQty WHERE ProductID = $prodID AND OrderID=$orderID";
    $result = $conn->query($sql);
  }
// Place event code here.
// Use "Add Action" button to add code snippets.
;		
} // function AfterEdit

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
//	onscreen events

} 
?>
