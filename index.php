<?php
require_once "config.php";
include "header.php";
$conn = new mysqli(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
if ($conn->connect_error)
  die("Connection to database failed:" .
    $conn->connect_error);
$conn->query("set names utf8"); 
?>
<h1>Honest sheela's webshop</h1>
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
      

       $conn = new mysqli("localhost", "test", "t3st3r123", "test");
       $results = $conn->query("SELECT id,name,price FROM Sheela_Products;");
       
      
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
