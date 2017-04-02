
<?php
  include 'dbconnection.php';
?>

<html>
<head>
  <title>Search results</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <link rel="stylesheet" type="text/css" href="style.css"/>
</head>
<body>
<?php
  //$query = $_POST['query'];
  // gets value sent over search form
  $i =1;
$search = isset($_POST['search']) ? $_POST['search'] : '';
$que = "select * from product where product_name like '%$search%' or product_code like '%$search%'";
$result=$conn->query($que);
while($row = $result->fetch_assoc());{

$code =$row['product_name'];
  echo "$code";}
//echo ($result['product_code']. $conn->error);
//var_dump($row=$result->fetch_assoc());
if (!$result) {
  die("Database Error ");

}
else{

while($row=$result->fetch_assoc())
{
  //echo $row['product_code'];

  		?>

                     <td  style=" width:255px; border:0px solid #0000CC;"align="center" >

                      <div style="height:300px; width:230px; float:left;border:1px solid #B9B9B9;border-radius:10px; margin-left:12px; margin-top:20px;">

                       <div style="height:150px; width:230px; border:0px solid #000000;border-radius:15px; margin-top:10px;" align="center"><a href="product.php?code=<?php echo $row['product_code'];?>" style="text-decoration:none;"><img src="images/<?php echo $row['image1'];?>" height="130" width="185"></a></div> -->

                      <div style="height:120px; width:215px; border:0px solid #000000;border-radius:15px; margin-left:8px;">

                      <table border="0">

                      <tr><td style="color:#990000; height:30px; width:210px;" align="center" colspan="3"><font style="color:#269FB2"><b><?php echo $row['product_code'];?></b></font></td></tr>

                      <tr><td height="20"><b>Brand:</td><td colspan="2" style=" margin-left:5px;"></b><?php echo $row['brand'];?></td></tr>

                      <tr><td height="20"><strong>Price:&nbsp;</strong></td><td style="color:#FF0000; width:10px;">$ </td><td><?php echo $row['product_price'];?> </td></tr>

                      </table>



                      <div><table border="0" width="220">  <tr style="border:0px solid #000000; height:30px;" align="center"><td colspan="2"> <a href="product.php?code=<?php echo $row['product_code'];?>" style="text-decoration:none;"><input type="button" name="buynow" value="DETAILS" style="height:25px; width:75px; background-color:#269FB2; border:0px solid #333333; border-radius:5px; color:#FFFFFF;"></a></td>

                             </tr>

                      </table></div>

            </div>



                       </div>

                    </td>

       <?php if($i%4==0)

  	 {?>

       </tr>



     <?php

  	 }

  	$i=$i+1;

  	}
  }
  ?>



   </table>
</body>
</html>
