<?php 
class eventclass_delivery  extends eventsBase
{ 
	function eventclass_delivery()
	{
	// fill list of events
		$this->events["AfterEdit"]=true;

		$this->events["AfterAdd"]=true;

		$this->events["BeforeEdit"]=true;


//	onscreen events


	}
// Captchas functions	

//	handlers

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// After record updated
function AfterEdit(&$values,$where,&$oldvalues,&$keys,$inline,&$pageObject)
{

		
	if (($values['delFlag']=="YES") && ($_SESSION['update']==true)) {
	  $prodID  = $values['prodID'];
    $orderID = $values['orderID'];
	  $delQty  = $values['qty'];

		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "ftgp-sims";
	  $conn = new mysqli($servername, $username, $password, $dbname);

// Update Order Details Database
		$sql = "UPDATE orderdetail SET DelQuant=DelQuant+$delQty WHERE ProductID = $prodID AND OrderID=$orderID";
    $result = $conn->query($sql);

// Update  Product Database  (Subtract from Units In Stock)
		$sql = "UPDATE product SET UInStock=UInStock-$delQty,UInOrder=UInOrder-$delQty WHERE ProdID = $prodID";
    $result = $conn->query($sql);


  }
	else $_SESSION['update']=true;


 if ($values['delFlag']=="NO") {

	  $prodID  = $values['prodID'];

		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "ftgp-sims";
	  $conn = new mysqli($servername, $username, $password, $dbname);
   
    $adjustment=$values['qty']-$oldvalues['qty'];
		$sql = "UPDATE product SET UInOrder=UInOrder+$adjustment WHERE ProdID = $prodID";
    $result = $conn->query($sql);
    

 }
// Place event code here.
// Use "Add Action" button to add code snippets.
;		
} // function AfterEdit

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
				// After record added
function AfterAdd(&$values,&$keys,$inline,&$pageObject)
{

		
	  $prodID  = $values['prodID'];
    $orderID = $values['orderID'];
	  $orderQty  = $values['qty'];

		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "ftgp-sims";
	  $conn = new mysqli($servername, $username, $password, $dbname);

// Update  Product Database  (Subtract from Units In Stock)
		$sql = "UPDATE product SET UInOrder=UInOrder+$orderQty WHERE ProdID = $prodID";
    $result = $conn->query($sql);


// Place event code here.
// Use "Add Action" button to add code snippets.
;		
} // function AfterAdd

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before record updated
function BeforeEdit(&$values,$where,&$oldvalues,&$keys,&$message,$inline,&$pageObject)
{

		

// Place event code here.
// Use "Add Action" button to add code snippets.

if($oldvalues['delFlag']=="YES") {
		$_SESSION['update']=false; // do not allow any updates
    $values['qty']=$oldvalues['qty'];  // never change the values if already marked delivered
}

// if the delivery flag was changed from YES to NO, return it back to YES
if(($oldvalues['delFlag']=="YES") && ($values['delFlag']=="NO")) $values['delFlag']="YES";

return true;
;		
} // function BeforeEdit

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
//	onscreen events

} 
?>
