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
			<center><h1 style="font-size:60px;">Leader</h1></center>
				<div>
					<div class="sidebar">
					<div id="l">
						<ul>
							<form><input type="submit" name="login" value="CREATE TEAM" id="submit" style="position:absolute;left:335px;width:200px;"></form><br><br><br>
							<form><input type="submit" name="login" value="SELECT MEMBER" id="submit" style="position:absolute;left:335px;width:200px;"></form><br><br><br>
							<form>
							<select>
 	 							<option value="volvo">Gunjan</option>
 					 			<option value="saab">Rohit</option>
  								<option value="mercedes">Dikshi</option>
  								<option value="audi">Prachi</option>
							</select>
							</form>
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