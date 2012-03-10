<!DOCTYPE html>
<html>
<head>
<base href="http://website/responsive/"/>
<meta name="viewport" content="width=device-width">
<!-- 
<link rel="stylesheet/less" type="text/css" href="css/style.less">
<script type="text/javascript" src="js/less.min.js"></script>	
 -->

<?php /* 
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<link rel='stylesheet' href='css/bootstrap.min.css'/>
*/?>

<style> 
	body{
	background-color: @body-bg-color;
}


@media all and (min-width: 700px){
	.wrapper {
			width: 900px;
			float: left;
			overflow: hidden;
			margin:  0px auto;
		 }
	.wrapper .top{
		width: 900px;
		float: left;
		overflow: hidden;
	}
	.wrapper .features{
		width: 900px;
		float: left;
		overflow: hidden;
	}
	.wrapper .footer{
		width: 900px;
		float: left;
		overflow: hidden;
	}
}

@media all and (max-width: 699px) and (min-width: 420px){
	.wrapper {
		width: 600px;
		float: left;
		overflow: hidden;
	 }
	 .wrapper .top{
		width: 600px;
		float: left;
		overflow: hidden;
	}
	.wrapper .features{
		width: 600px;
		float: left;
		overflow: hidden;
	}
	.wrapper .footer{
		width: 600px;
		float: left;
		overflow: hidden;
	}
}


@media all and (max-width: 419px) and (min-width: 220px){
	.wrapper {
		width: 300px;
		float: left;
		overflow: hidden;
	 }
	 .wrapper .top{
		width: 300px;
		float: left;
		overflow: hidden;
	}
	.wrapper .features{
		width: 300px;
		float: left;
		overflow: hidden;
	}
	.wrapper .footer{
		width: 300px;
		float: left;
		overflow: hidden;
	}
}

.features ul li{ 
	display: block-inline;
	float: left; 
	width: 160px;
	overflow: hidden;
}

.feature{
	overflow: hidden; 
	float: left;
	width: 160px;
}

.feature img{
		width: 80px; float:left;
	}

</style>

</head>
<body>
	<div class='wrapper'>
		<!-- this section will have logo/app name web-font -->
		<div class='well top'>
			<div class='well logo'> <h1 class='app-name'>rentable</h1> </div>
			<div class='well intro'>app intro</div>
		</div>
		<div class='features well '>
			<ul class='unstyled'>
				<li>
					<div class='feature'>QuickPay</div>
				</li>
				<li>
					<div class='feature'>QuickPay</div>
				</li>
				<li>
					<div class='feature'>rentable</div>
				</li>
			</ul>
		</div>
		<div class='well footer'>
			Copy right
		</div>
	</div>
	
	<script type="text/javascript" src="js/hijs.js"></script>
</body>
</html>