<?php
require_once "config.php";
include "header.php";
$conn = new mysqli(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
if ($conn->connect_error)
  die("Connection to database failed:" .
    $conn->connect_error);
$conn->query("set names utf8"); 

if (!array_key_exists("timestamp", $_SESSION)) {
  $_SESSION["timestamp"] = date('l jS \of F Y h:i:s A');
}

?>
<img src ="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRtJcOZlQvahtX7Ob6tvNQIcl7_csmKNLtfzhHYK4P2kF1QvJYB" />  


<h1 style="color:Purple ;font-family:Arial; float:Center"><em>Honest sheela's webshop</em></h1>

<p><a href ="registration.php">Sign up!</a> . <a href="cart.php">Go to shopping cart</a></p>

<p>NSA is monitoring you since <?=$_SESSION["timestamp"];?></p>
<p>If you want any of these just call me ;)</p>

<ul>

   
  
    <p>
      
       <table border="1px">
          <thead>
                <tr>
                    <th colspan="2"style= " color: red">PEODUCTS</th>
                </tr>
            <tr>
                 <th style= " color: blue">name</th>
                 <th style= " color: blue">price</th>
            </tr>
<?php 
      

       $results = $conn->query(
"SELECT id,name,price FROM Sheela_Products;");
      
      while ($row = $results->fetch_assoc()) {
         ?>
             
             
              <tr>
              <td>
              <a href="description.php?id=<?=$row['id']?>"> 
              <?=$row["name"]?></a>
		<td>
	      <?=$row["price"]?>EUR
		</td>
              </td>
              </tr> 
              
         <?php
      }

      $conn->close();


      ?>
     </table>
    </p>

 <? include "footer.php" ?>
