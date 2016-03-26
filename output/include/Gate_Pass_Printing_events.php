<?php 
class eventclass_Gate_Pass_Printing  extends eventsBase
{ 
	function eventclass_Gate_Pass_Printing()
	{
	// fill list of events
		$this->events["AfterEdit"]=true;

		$this->events["BeforeProcessPrint"]=true;


//	onscreen events
		$this->events["Dr_No1"] = true;
		$this->events["Destination1"] = true;
		$this->events["OR_No1"] = true;
		$this->events["Date1"] = true;


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

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
				// Print page: Before process
function BeforeProcessPrint(&$conn,&$pageObject)
{

		$drno=$_GET["drno"];

$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "ftgp-sims";
	  $conn = new mysqli($servername, $username, $password, $dbname);
		$sql = "
				SELECT
				delivery.ID,
				delivery.DrNo AS DrNo,
				delivery.orderID AS orderID,
				delivery.prodID AS prodID,
				delivery.qty AS qty,
				product.USP AS USP,
				delivery.eta AS eta,
				delivery.delFlag AS delFlag,
				concat(customer.ComName, ' - ', customer.DAddress, ' - ', customer.phone) AS Destination
				FROM delivery
				, orderentry
				, customer
				, product
				WHERE (delivery.orderID =orderentry.OrderID) AND 
              (delivery.prodID = product.ProdID) AND 
              (delivery.delFlag = 'NO') AND 
              (orderentry.CID =customer.CID) AND
              (delivery.DrNo='$drno')
							  
    ";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    //$orno=$row["orderID"];
// Place event code here.
// Use "Add Action" button to add code snippets.
;		
} // function BeforeProcessPrint

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
//	onscreen events
function Dr_No1(&$params)
{
// Put your code here.
print $_SESSION["drno"];

;
}
function Destination1(&$params)
{
// Put your code here.
print $_SESSION["dest"];

;
}
function OR_No1(&$params)
{
// Put your code here.
print $_SESSION["orno"];
;
}
function Date1(&$params)
{
// Put your code here.
print $_SESSION["eta"];

;
}

} 
?>
