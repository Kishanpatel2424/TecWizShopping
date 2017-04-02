<?php session_start();if($_SESSION['name'])
{
if(isset($_POST['update']))
{
	include('dbconnection.php');
$result = $conn->query("update static set details ='" .($_POST['txt']). "' where static_id='".$_GET['id']."'");
$update=$result->num_rows;

}
?><html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Tec Wiz Shopping</title>

<link rel="stylesheet" href="style.css" type="text/css" />

<script type="text/javascript" src="nicEdit.js"></script>
<script type="text/javascript">
	bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });
</script>
</head>

<body style="background-color:#EFEFEF;">
<?php include('header.php');?>
  <!--middle-->
      <div style="width:1050px; height:auto; margin:auto;border:#000099 1px solid;">

<!--left-->
<div style="float:left;" ><?php include('left.php'); ?></div>
<!--right-->

<div style="width:810px; height:auto; float:left; margin:auto; background-color:#FFF;">

	<?php
if(isset($_POST['update']))
echo	"<font color='none'>".$_SESSION['name']="Record updated"."</font>"; ?>
<form action="" method="post" >

<table>
<tr>

<td>
 <textarea name="txt"    style="width:795px; height:auto;">
<font style="font-family:Verdana, Geneva, sans-serif; color:#930;">
 <?php
          $process = $conn->query("select details  from static where static_id='".$_GET['id']."'");
			    $value=implode($process->fetch_assoc());
			   echo stripslashes($value);


			  ?></font>

</textarea></td>

</tr>
</table>
<input type="submit" name="update" value="UPDATE" />
</form>




    </div>
</div>




    <?php
}
else
{
	header('Location:logout.php');
}

?>

</div>
</div>
</body>
</html>