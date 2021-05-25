<!doctype html>
<html lang="en">
  <head>
  	<title>Contact Form 08</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/style.css">

	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Bom A.1 Cookie</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-lg-10">
					<div class="wrapper img" style="background-image: url(images/img.jpg);">
						<div class="row">
							<div class="col-md-9 col-lg-7">
								<div class="contact-wrap w-100 p-md-5 p-4">
									<h3 class="mb-4">let know who are you</h3>
										<div id="form-message-success" class="mb-4">
										Your message was sent, thank you!
										</div>
										<div id="message">
											<span id="counter"></span>
										</div>
										<button onclick="deleteCookie('username')">Delete Cookie</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<script src = "js.js"></script>
	<script>
		
			function getCookie()
			{
				cookieV = document.cookie;
				var name = cookieV.split("=")[1]; 
			}

			function allCookieList()
			{
				var cookList =[];
				var sCookie= document.cookie.split(";")
				for(var i =0 ; i < sCookie.length; i++)
				{
					cookList[sCookie[i].split("=")[0].trim()]=sCookie[i].split("=")[1]
				}
				return cookList;
			}

			function checkCookie() 
			{
				var resualt = allCookieList();
				var username = resualt["username"];
				var color = resualt["color"];
				var gender = resualt["gender"];

				if(gender == "male")
				{    
					var image = document.createElement("img");
					image.src="images/1.jpg";
					document.getElementById("message").appendChild(image);
					if (typeof(Storage) != "undefined") 
					{
						if (localStorage.getItem("count") === "undefined") 
						{
							localStorage.setItem("count", "1");
						}
						var count = localStorage.getItem("count");
						count++;
						
						localStorage.setItem("count", count);
						document.getElementById("message").innerHTML+= "welcome <span style='color:"+color+";'>"+username+
							"</span> you have visited this site <span style='color:"+color+";'>"+count+"</span> times";
					}
				}
			else
			{
				var image =document.createElement("img");
				image.src="images/2.jpg";
				document.getElementById("message").appendChild(image);
				if (typeof(Storage) != "undefined") 
				{
					if (localStorage.getItem("count") === "undefined") 
					{
						localStorage.setItem("count", "1");
					}
					var count = localStorage.getItem("count");
					count++;
					localStorage.setItem("count"
										, count);
						document.getElementById("message").innerHTML+= "welcome <span style='color:"+color+";'>"+username+
						"</span> you have visited this site <span style='color:"+color+";'>"+count+"</span> times";
				} 
			}
			}

			checkCookie()

			function deleteCookie(username)
			{
				cookeName = getCookie();

				for (var i in cookeName) {
					
					document.cookie = usename + ";expires=1-1-2000";
					// if (typeof(Storage) !== "undefined") 
					// {
					// 	if (localStorage.getItem("count") !== "undefined") 
					// 	{
					// 		localStorage.setItem("count", "0");
					// 	}
					// 	var count = localStorage.getItem("count");
						
					// 	localStorage.setItem("count", count);
					// 	document.getElementById("message").innerHTML+= "welcome <span style='color:"+color+";'>"+username+
					// 		"</span> you have visited this site <span style='color:"+color+";'>"+count+"</span> times";
					// }
			}

				console.log(document.cookie = usename + ";expires=1-1-2000");
			}

	</script>
		
  </body>
</html>

