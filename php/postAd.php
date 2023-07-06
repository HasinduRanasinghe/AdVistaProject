<?php
//starting session
session_start();

if(!isset($_SESSION["currentUser"]))
{
	header("Location: ../html/login.html");
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Post Advertisements</title>
	<link rel="stylesheet" type="text/css" href="../css/styles.css">
	<style type="text/css">
		.bodyDiv, .postAdRow1, .postAdRow2{
			margin: 0px;
			padding: 0px;
		}

		.bodyDiv{
			margin-left: 10%;
			overflow: hidden;
		}
	</style>
</head>

<!--header-->
<body>
	<div class="header">
		<span><input class="secondarySearchBar" type="text" name="searchBar"></span>
		<a href="postAd.php"><span><button class="postButton">Post Ad</button></span></a>
		<a class="websiteLogo" href="../html/index.html">
			<span id="advista">Advista</span>
			<span id="lk">.lk</span>
		</a>
		<span>
			<a href="userProfile.php">
				<svg xmlns="http://www.w3.org/2000/svg" width="5em" height="5em"  viewBox="0 0 32 32">
					<path fill="white" d="M16 8a5 5 0 1 0 5 5a5 5 0 0 0-5-5Z"/>
					<path fill="white" d="M16 2a14 14 0 1 0 14 14A14.016 14.016 0 0 0 16 2Zm7.992 22.926A5.002 5.002 0 0 0 19 20h-6a5.002 5.002 0 0 0-4.992 4.926a12 12 0 1 1 15.985 0Z"/>
				</svg>
			</a>
		</span>
		<center><p class="secondLine">Advertise Absolutely Anything</p><center>
	</div>
	
	<div class="orangeLine"></div>
	
`	<!--body-->
	<div class="bodyDiv">
		<form action="postAdSubmit.php" method="post" enctype="multipart/form-data">
			<div class="postAdRow1">
				<span>
					<span class="selectFieldsNames"><strong>Category</strong></span>
					<select class="postAdSelectField" name="category">
						<option>vehicle</option>
						<option>property</option>
						<option>jobVacancy</option>
						<option>mobile</option>
						<option>sport</option>
						<option>fashion</option>
						<option>beauty</option>
						<option>rent</option>
						<option>others</option>
					</select>
				</span>
				
				<span>
					<span class="selectFieldsNames"><strong>Sub-Category</strong></span>
					<select class="postAdSelectField" name="subCategory">
						<option>Unregistered</option>
						<option>Registered</option>
						<option>Used</option>
						<option>Imported</option>
						<option>None</option>
					</select>
				</span>
			</div>
			
			<div class="postAdRow2">
				<div class="postAdCol1">
					<select class="postAdTextFields" name="type">
						<option>Negotible</option>
						<option>Non-Negotible</option>
					</select><br>
					<input    class="postAdTextFields" type="text" name="title" placeholder="Title"><br>
					<textarea class="postAdTextFields" name="description" placeholder="Description" cols="21"></textarea><br>
					<input 	  class="postAdTextFields" name="price" type="text" name="" placeholder="Price"><br>
					<input 	  class="postAdTextFields" id="postAdSubmitButton" type="submit" name="" placeholder="Post Advertisement">
				</div>
				
				<div class="postAdCol2">
					<input class="adImgUploads" type="file" name="adImgUploads1" id="adImgUploads1">
					<label class="adImgUploadsLabels" for="adImgUploads1"><center>Upload Image 1</center></label><br>
					
					<input class="adImgUploads" id="adImgUploads2" type="file" name="adImgUploads2">
					<label class="adImgUploadsLabels" for="adImgUploads2"><center>Upload Image 2</center></label><br>
					
					<input class="adImgUploads" id="adImgUploads3" type="file" name="adImgUploads3">
					<label class="adImgUploadsLabels" for="adImgUploads3"><center>Upload Image 3</center></label><br>
					
					<input class="adImgUploads" id="adImgUploads4" type="file" name="adImgUploads4">
					<label class="adImgUploadsLabels" for="adImgUploads4"><center>Upload Image 4</center></label><br>
					
					<input class="adImgUploads" id="adImgUploads5" type="file" name="adImgUploads5">
					<label class="adImgUploadsLabels" for="adImgUploads5"><center>Upload Image 5</center></label><br>
				</div>
				
				<div class="postAdCol3">
					<input class="postAdTextFields" type="text" name="name" placeholder="Name"><br>
					<input class="postAdTextFields" type="text" name="email" placeholder="E-mail"><br>
					<input class="postAdTextFields" type="text" name="phoneNumber1" placeholder="Phone Number-1"><br>
					<input class="postAdTextFields" type="text" name="phoneNumber2" placeholder="Phone Number-2"><br>
					<select class="postAdtextFieldProvince" name="province">
						<option>Western</option>
						<option>Central</option>
						<option>NorthWestern</option>
						<option>Southern</option>
						<option>Sabaragamuwa</option>
						<option>Eastern</option>
						<option>NorthCentral</option>
						<option>Uva</option>
						<option>Northern</option>
					</select>
				</div>
			</div>
		</form>
	</div>
	
	<!--footer-->
	<div class="footer">
		<div class="footerInner">
	
			<div class="footerRaw1">
				<div class="footerColumn1">
					<ul class="Navbar">
						<li class="Navbar"><a  class="Navbar"href="../html/index.html">Home</a></li>
						<li class="Navbar"><a  class="Navbar"href="userProfile.php">My Account</a></li>
						<li class="Navbar"><a  class="Navbar"href="../html/contactUs.html">Contact Us</a></li>
						<li class="Navbar"><a  class="Navbar"href="../html/privacyPolicy.html">Privacy Policy</a></li>
						<li class="Navbar"><a  class="Navbar"href="feedbacks.php">Reviews</a></li>
					</ul>
				</div>
				
				<div class="footerColumn2">
					<center><p>Address:Advista(Pvt)Ltd,</p></center>
					<center><p>Colombo 7</p></center>
				</div>
				
				<div class="footerColumn3">
					<center><p>Tel:+94123456789</p></center>
					<center><p>    +94789456123</p></center>
					<center><p>Email:info@advista.lk</p></center>
				</div>
				
				<div class="footerColumn4">
					<div id="creditCardsRow"><img id="creditCards" src="../images/creditCards.png" alt="credit cards"></div>
					<div id="socialMediaRow">
						<span class="socialIcons">
							<svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="2em" height="2em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 1000 1000"><path fill="white" d="M182.594 0C81.445 0 0 81.445 0 182.594v634.813c0 101.149 81.445 182.594 182.594 182.594h344.063V609.063H423.282v-140.75h103.375v-120.25c0-94.475 61.079-181.219 201.781-181.219c56.968 0 99.094 5.469 99.094 5.469l-3.313 131.438s-42.963-.406-89.844-.406c-50.739 0-58.875 23.378-58.875 62.188v102.781h152.75l-6.656 140.75H675.5v390.938h141.906c101.149 0 182.594-81.445 182.594-182.594V182.595C1000 81.446 918.555.001 817.406.001H182.593z"/></svg>
						</span>
						
						<span class="socialIcons">
							<svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="2em" height="2em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 1536 1536"><path fill="white" d="M1280 482q-56 25-121 34q68-40 93-117q-65 38-134 51q-61-66-153-66q-87 0-148.5 61.5T755 594q0 29 5 48q-129-7-242-65T326 422q-29 50-29 106q0 114 91 175q-47-1-100-26v2q0 75 50 133.5T461 885q-29 8-51 8q-13 0-39-4q21 63 74.5 104t121.5 42q-116 90-261 90q-26 0-50-3q148 94 322 94q112 0 210-35.5t168-95t120.5-137t75-162T1176 618q0-18-1-27q63-45 105-109zm256-194v960q0 119-84.5 203.5T1248 1536H288q-119 0-203.5-84.5T0 1248V288Q0 169 84.5 84.5T288 0h960q119 0 203.5 84.5T1536 288z"/></svg>
						</span>
						
						<span class="socialIcons">
							<svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="2em" height="2em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 1024 1024"><path fill="white" d="M512 378.7c-73.4 0-133.3 59.9-133.3 133.3S438.6 645.3 512 645.3S645.3 585.4 645.3 512S585.4 378.7 512 378.7zM911.8 512c0-55.2.5-109.9-2.6-165c-3.1-64-17.7-120.8-64.5-167.6c-46.9-46.9-103.6-61.4-167.6-64.5c-55.2-3.1-109.9-2.6-165-2.6c-55.2 0-109.9-.5-165 2.6c-64 3.1-120.8 17.7-167.6 64.5C132.6 226.3 118.1 283 115 347c-3.1 55.2-2.6 109.9-2.6 165s-.5 109.9 2.6 165c3.1 64 17.7 120.8 64.5 167.6c46.9 46.9 103.6 61.4 167.6 64.5c55.2 3.1 109.9 2.6 165 2.6c55.2 0 109.9.5 165-2.6c64-3.1 120.8-17.7 167.6-64.5c46.9-46.9 61.4-103.6 64.5-167.6c3.2-55.1 2.6-109.8 2.6-165zM512 717.1c-113.5 0-205.1-91.6-205.1-205.1S398.5 306.9 512 306.9S717.1 398.5 717.1 512S625.5 717.1 512 717.1zm213.5-370.7c-26.5 0-47.9-21.4-47.9-47.9s21.4-47.9 47.9-47.9s47.9 21.4 47.9 47.9a47.84 47.84 0 0 1-47.9 47.9z"/></svg>
						</span>
						
						<span class="socialIcons">
							<svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="2em" height="2em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 1024 1024"><path fill="white" d="M880 112H144c-17.7 0-32 14.3-32 32v736c0 17.7 14.3 32 32 32h736c17.7 0 32-14.3 32-32V144c0-17.7-14.3-32-32-32zM548.5 622.8c-43.9 61.8-132.1 79.8-200.9 53.3c-69-26.3-118-99.2-112.1-173.5c1.5-90.9 85.2-170.6 176.1-167.5c43.6-2 84.6 16.9 118 43.6c-14.3 16.2-29 31.8-44.8 46.3c-40.1-27.7-97.2-35.6-137.3-3.6c-57.4 39.7-60 133.4-4.8 176.1c53.7 48.7 155.2 24.5 170.1-50.1c-33.6-.5-67.4 0-101-1.1c-.1-20.1-.2-40.1-.1-60.2c56.2-.2 112.5-.3 168.8.2c3.3 47.3-3 97.5-32 136.5zM791 536.5c-16.8.2-33.6.3-50.4.4c-.2 16.8-.3 33.6-.3 50.4H690c-.2-16.8-.2-33.5-.3-50.3c-16.8-.2-33.6-.3-50.4-.5v-50.1c16.8-.2 33.6-.3 50.4-.3c.1-16.8.3-33.6.4-50.4h50.2l.3 50.4c16.8.2 33.6.2 50.4.3v50.1z"/></svg>
						</span>
					</div>
				</div>
				<div class="footerColumn5">
					<center><img id="qrCode" src="../images/qrCode.png" alt="qr code"></center>
				</div>
			</div>

			<div class="footerRaw2"><center>copyright</center></div>

		</div>

	</div>

</body>
</html>