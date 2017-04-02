<?php

session_start();

if(!isset($_SESSION['email']) ||(!isset($_SESSION['pwd'])))

{
header('location:login.php');

	}

	 $email=$_SESSION['email'];

	$pwd=$_SESSION['pwd'];

 ?>


<html>

<head>

<title>Tec Wiz Shopping/cartdetails</title>

<link href="themes/1/js-image-slider.css" rel="stylesheet" type="text/css" />

 <script src="themes/1/js-image-slider.js" type="text/javascript"></script>

 <link href="generic.css" rel="stylesheet" type="text/css" />



</head>

<body>



<div style="width:100%; height:auto;">



   <!--header --><div style="height:120px; width:100%; background-color:#668B8B;border:0px solid #000000;">

  <?php include ('header.php'); ?>

   </div>



  <!--menu--> <div style="height:45px; width:100%; background-color:black; border:0px solid #269FB2;">

    <?php include ('menu.php'); ?>

   </div><!--menu close-->



  <!--cc--><div style="height:auto; width:100%;border:0px solid #269FB2;">

  <!--sliderall--> <div style="height:328px; margin:auto; width:1050px; border:0px solid #271E1F;  ">

       <?php include ('slider.php');?>



                  </div><!--sliderall close-->

  <!--sliderall close-->

<!--slider down data-->

            <div style="height:auto; width:1050px;   margin:auto; border:1px solid ; background-color:#668B8B;  ">

            <div style="height:40px; width:1050px; height:auto; border:0px solid #000000; padding-top:5px; background-color:#014464; border-radius:5px; color:yellow;">

         <font style=" font-size:18px;"> &nbsp; Your Cart Details</font>

            </div>


            <table border="0" style="width:1050px; height:30px; background-color: teal;">

            <tr height="30">

            <td width="75" align="center"><b>S.No.</b></td>

             <td width="75" align="center"><b>Remove.</b></td>

            <td width="300" align="center"><b>Item</b></td>

            <td width="350" align="center"><b>Item Description</b></td>

            <td width="100" align="center"><b>Quantity</b></td>

            <td width="200" align="center"><b>Price($)</b></td>

            </tr>

            </table>

            <table border="0">



            <tr style=" background-color:lightcyan; ">

             <?php

		     include_once('dbconnection.php');



             $query="select * from shopping_cart where email='".$email."'";

			 $result=$conn->query($query);

			 $i=1;

            $amt=0;

			while($row=$result->fetch_assoc())

			{

			$price=$row['price']*$row['quantity'];

	      ?>

            <td width="75" align="center"><?php echo $i;?></td>

             <td width="75" align="center"><a href="cartdel.php?code2=<?php echo $row['ser_no'];?>" style="text-decoration:none;"><img src="images/icon_cart.png"></a></td>

            <td width="300" align="center"><img src="images/<?php echo $row['image1'];?>" height="80" width="110" style="border:0px solid #000000;" ></td>

            <td width="350" align="center"><?php echo $row['product_name'];?></td>

            <td width="100" align="center"><?php echo $row['quantity'];?></td>

             <td width="200" align="center"><?php echo'$'.$price;?></td>



             </tr>

            <?php

			$i=$i+1;

$amt=$amt+$price;
$_SESSION['amt']=$amt;

		}



		?>

        <tr style="background-color:teal; height:30px; ">

        <td width="100" style="background-color:lightcyan;"></td>

       <td width="100" style="background-color:lightcyan;"></td>

      <td width="300" style="background-color:lightcyan;"></td>

       <td width="350" style="background-color:lightcyan;"></td>

       <td  width="100" align="center"><b>Total</b></td>

       <td  width="200" align="center"><?php echo" <font color='#FF0000'> <b>$ </b></font>" .$amt;?></td>

            </tr></table>

            <div style="width:1050px; height:50px; margin-bottom:20px; border:0px solid #000000; margin-top:50px; margin-right:20px;"align="right">

            <div style="width:300px; height:50px; border:0px solid #000000; " ><a href="index.php"><img src="images/bt_continue_shopping.png"></a>&nbsp;&nbsp;&nbsp;

            <a href="Payment.php"><img src="images/bt_prced.png"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>

            </div>



        </div><!--slider down close-->

       <!--footer--><div style="width:100%; background-color:black; height:150px; border:1px solid #000000; ">

         <?php include('footer.php'); ?>

         </div><!--footer close-->

     </div> <!--center close-->

           </div><!--main close-->

</body>

</html>
