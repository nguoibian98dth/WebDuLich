
<!DOCTYPE html>
<html lang="en"  >
<head>
	<title> Document  </title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1"> 	
	<link rel="stylesheet" href="vendor/bootstrap.css">
	<link rel="stylesheet" href="vendor/angular-material.min.css">
	<link rel="stylesheet" href="vendor/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="css/default.css" />
	<link rel="stylesheet" type="text/css" href="css/component.css" />
	<link rel="stylesheet" type="text/css" href="css/1.css">
	<script src="js/modernizr.custom.js"></script>
</head>
<body ng-app="myApp" ng-controller="MyController">
	<div class="sortGoiytour" ng-hide="display">
		<?php
		include ("connection.php");
		$sql="select*from tours  where KIND_TOUR ='Trong Nước'";
		$tours=$connect->query($sql);
		?>

	</div>


	<div class="row">
		<?php
		$count = 0;
		foreach ($tours as $tour) 
		{
			$count++;
			if($count==4)
				break;
			?>

			<div class="mottin">
				<div class="vien">
					<a href="chitiettour.php?id=<?php echo $tour['ID']?>" class="hrefHCM">
						<img src="thongtintour/images/<?php echo $tour['IMAGE']?>" alt=""  width="250px" height="170px">
						<br>
						<b>	<?php echo $tour['NAME']?></b>
					</a>
				</div>
			</div>
			<?php 
		}
		?>
	</div>

</body>
</html>