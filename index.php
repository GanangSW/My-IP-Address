<!DOCTYPE html>
<html>
<head>
<title>IP ADDRESS </title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<!-- //for-mobile-apps -->
<!-- font-awesome icons -->
<link rel="stylesheet" href="css/font-awesome.min.css" />
<!-- //font-awesome icons -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
</head>
<body>
	<div class="main">
		<h1>Where My IP Address</h1>
		<div class="w3_agile_main_grid">
			<p>Your Current Ip Address</p>
			<form action="" method="post" class="agile_form">
				<input type="text" name="ipaddress" placeholder="Type here..." required="">
				<input type="button" onClick="cek()" value="Submit">
			</form>
		<div id="hasil">		
		</div>
		<script>
			function cek(){
				var ip=$("[name=ipaddress]").val();
			$.getJSON("http://ip-api.com/json/"+ip+"?callback=?", function(data) {
				var table_body = "";
				$.each(data, function(k, v) {
					table_body += "<tr><td><p>&nbsp&nbsp" + k + "</p></td><td><b><p>&nbsp&nbsp:&nbsp&nbsp&nbsp&nbsp&nbsp" + v + "</p></b></td></tr>";
				});
				$("#hasil").html(table_body);
			});
			}
		</script>
	</div>
	<div class="agileits_copyright">
			<p>© 2017 IP Address. Tugas UAS | Design by Erna Wijayanti, Ferry Sudancoko, Ganang Samudra Wibawa</a></p>
	</div>
</body>
</html>