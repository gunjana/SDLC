<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>SALES</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
	<link rel="stylesheet" type="text/css" href="css/mobile.css">
	<script src="js/mobile.js" type="text/javascript">
		fuction check()
		{
			var paswrd1= document.GetElementById('pass1');
			var paswrd2= document.GetElementById('pass2');
			if(paswrd1.value!=paswrd2.vlaue)
			{
				alert("password doesn't match!");
				
			}
		}
	</script>
</head>
<body>
	<div id="page">
		<div id="header">
			<div>
				
				<ul id="navigation">
					<li >
						<a href="index.html">Home</a>
					</li>
					<li class="selected">
						<a href="blog1.html">Account</a>	
					</li>
					<li>
						<a href="contact.html">Contact</a>
					</li>
				</ul>
			</div>
		</div>
		<div id="body">
			<div class="header">
			<center><h1 style="font-size:60px;">Member</h1></center>
				<div>
					<div class="sidebar">
					<div id="l">
						<ul>
							<form><input type="file" name="login" value="ENTER DATA" id="submit" style="position:absolute;left:335px;width:200px;"></form><br><br><br>
							<form action="graph/widgets.html"><input type="submit" name="login" value="VIEW REPORT" id="submit" style="position:absolute;left:335px;width:200px;"></form><br><br><br>
						</ul>
					</div>
					</div>
				<div class="sidebar">
					<div id="r">

				</div>
			</div>
			<div class="footnote">
				<div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>