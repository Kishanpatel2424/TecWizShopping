<?php

session_start();

 include('dbconnection.php');



 if(isset($_POST['continue']))

{


$email=$_POST['email'];

$last_name=$_POST['lastname'];

$first_name=$_POST['firstname'];

$street=$_POST['street'];

$city=$_POST['city'];

$state=$_POST['state'];

$zip=$_POST['zip'];

$contact=$_POST['contact'];

    $password=$_POST['pwd'];

	 $cpassword=$_POST['cpwd'];

	$res1=$conn->query("select * from user_details where email='$email'");

	$count=$res1->num_rows;



	if($count!=0)

	{

					 echo "<script>alert('You Have Already Registered Please Login..');</script>";

	}

 	 else

 	{

				 $query="insert into user_details (email,password,last_name,first_name,street,city,state,zip, contact) values('$email','$password','$last_name','$first_name','$street','$city','$state',
				 '$zip','$contact')";

		 $result=$conn->query($query);
		 if($result)
 		{
      header('location:cartdetails.php');
      echo "<script>alert('Congrulation You are a member of Tec Wiz')</script>".'<br>';


 		}

 	}

}

 ?>

<!DOCTYPE html>

<html>

<head>

<title>Tec Wiz Shopping/newuser</title>

<link href="themes/1/js-image-slider.css" rel="stylesheet" type="text/css" />

 <script src="themes/1/js-image-slider.js" type="text/javascript"></script>

 <link href="generic.css" rel="stylesheet" type="text/css" />





  <script type="text/javascript">



function validate()

{

	if (document.form1.name.value=="")



	{

		alert("Name Is Required!");

		document.form1.name.focus();

		return false;

		}

		if(document.form1.email.value=="")

		{ alert("Email Is Required");

		document.form1.email.focus();

		return false;

		}

		if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(form1.email.value))

  {

  }

   else

   {

	    alert("Invalid email address!")

		document.form1.email.focus();

    	return (false);

 	}




		if(document.form1.contact.value=="")

		{ alert("Contact No Is Required");

		document.form1.contact.focus();

		return false;

		}



		if(  /^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/.test(form1.contact.value))

		{

		}

		else

		{

		 alert("Invalid Contact number")

		document.form1.contact.focus();

    	return (false);

		}



					if(document.form1.pwd.value=="")

					{

						alert("Password Is Required");

						document.form1.pwd.focus();

						return false;

						}





						if(document.form1.cpwd.value != document.form1.pwd.value )

						{

							alert("password doesnot match!!");

							document.form1.cpwd.focus();

							return false;

							}





	}

	 </script>

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





<!--slider down data-->

            <div style="height:600px;; width:1050px;  margin-top:20px; margin:auto; border:0px solid #000000; background-color:#668B8B;  ">

            <div style="height:35px; width:1050px; border:0px solid #000000; margin-top:10px; background-color:#014464; border-radius:5px; color:yellow;">

         <font style=" font-size:18px;"><b>Account Information</b></font>

            </div>

            <!--registration form--><div style="border:1px solid #999999; border-radius:5px; height:535px; width:600px; float:left; margin-left:200px; margin-top:20px;">

            <form name="form1" method="post" onSubmit="return validate();">

            <table border="0" style="width:600px;" cellspacing="8">

            <tr style="background-color:#CDEFF3; color:black;; height:30px;"><td colspan="2"><b>Contact Information</b></td></tr>

            <tr><td>E-Mail Id*</td><td><input type="text" name="email" style="width:300px; height:25px;"></td></tr>

            <tr><td>First Name*</td><td><input type="text" name="first_name" style="width:300px; height:25px;"></td></tr>

            <tr><td>Last Name*</td><td><input type="text" name="last_name" style="width:300px; height:25px;"></td></tr>

            <tr><td>Street</td><td><input type="text" name="street" style="width:300px; height:25px;"></td></tr>

            <tr><td>City</td><td><input type="text" name="city" style="width:300px; height:25px;"></td></tr>

            <tr><td>State</td><td><input type="text" name="state" style="width:300px; height:25px;"></td></tr>

            <tr><td>Zip Code</td><td><input type="text" name="zip" style="width:300px; height:25px;"></td></tr>


            <tr><td>Contact Number*</td><td><input type="text" name="contact" style="width:300px; height:25px;"></td></tr>

          <tr style="background-color:#CDEFF3; color:black;height:30px;"><td colspan="2"><b>Password</b></td></tr>

            <tr><td>Password*</td><td><input type="password" name="pwd" style="width:300px; height:25px;"></td></tr>

            <tr><td>Password Confirmation*</td><td><input type="password" name="cpwd" style="width:300px; height:25px;"></td></tr>



            <tr><td colspan="2" align="right"><input type="submit" name="continue" value="Continue" style="border:1px solid #999999; border-radius:5px; height:35px; width:80px; font-size:16px; margin-right:25px;" align="middle"></td></tr>





            </table></form>



            </div><!--registration form-->



      </div>

       <!--footer--><div style="width:100%; background-color:black; height:150px; border:1px solid #000000; ">

         <?php include('footer.php'); ?>

         </div><!--footer close-->

     </div> <!--center close-->

           </div><!--main close-->





</body>

</html>
