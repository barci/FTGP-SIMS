<?php 
class eventclass_receiving  extends eventsBase
{ 
	function eventclass_receiving()
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

		
	if ($values['ReceiveFlag']=="YES") {
	  $productID = $values['ProductID'];
	  $orderQty = $values['Qty'];

		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "FTGP-SIMS";
	  $conn = new mysqli($servername, $username, $password, $dbname);

		$sql = "UPDATE product SET UInStock=UInStock+$orderQty WHERE ProdID = $productID";
    $result = $conn->query($sql);
    
	}

// Place event code here.
// Use "Add Action" button to add code snippets.
;		
} // function AfterEdit

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
//	onscreen events

} 
?>
