<?php 
	try{
		$id=$_GET['id'];
		include("connection.php");
		if(isset($_POST['btnsua']))
		{

				if(isset($_POST["txttentour1"]))
				{
					$ten=$_POST["txttentour1"];
				}
				if(isset($_POST['txtsonguoi1']))
				{
					$songuoi=$_POST['txtsonguoi1'];
				}
				if(isset($_POST['txtfileanh1']))
				{
					$fileanh=$_POST['txtfileanh1'];
				}
				if(isset($_POST['txtngaybd']))
				{
					$bd=$_POST['txtngaybd'];
				}
				if(isset($_POST['txtngaykt']))
				{
					$kt=$_POST['txtngaykt'];
				}
				if(isset($_POST['txtks']))
				{
					$ks=$_POST['txtks'];
				}
				if(isset($_POST['txtptien']))
				{
					$pt=$_POST['txtptien'];
				}
				if(isset($_POST['txtgiatreem']))
				{
					$treem=$_POST['txtgiatreem'];
				}
				if(isset($_POST['txtgianguoilon']))
				{
					$nglon=$_POST['txtgianguoilon'];
				}
				if(isset($_POST['txtchuongtrinhtour']))
				{
					$cttour=$_POST['txtchuongtrinhtour'];
				}
				$loai=$_POST['loaitour1'];
		 		$sql="UPDATE tours
		 			 SET `NAME`='$ten',`KIND_TOUR`='$loai',`MAX_PEOPLE`='$songuoi',`IMAGE`='$fileanh' 
		 			 WHERE ID='$id'";
				$connect->exec($sql);
				echo 'CẬP NHẬT THÀNH CÔNG !!';

}
}
	catch(PDOException $e)
	{
		echo $sql."<br>".$e->getMessage();
		header("location:list_qltourdl.php");
	}
?>