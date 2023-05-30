
<?php
  include ("dbconnection/connect.php");


 $sql=$conn->query("select * from category_information where item_name='".$_REQUEST['item']."'");
//this "item" is a varriable of pdt page

print "<option>"."....Select One....."."</option>";
while($fetcharry=$sql->fetch_array())
{
	print "<option>".$fetcharry[2]."</option>";
}	
?>