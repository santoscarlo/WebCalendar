<!DOCTYPE html>
<html>
<head>
	<title>SAMPLE PAGE</title>
	<style type="text/css">
		body {
			background-color: gray;
		}
		@media (min-width: 1000px) {
			body{
				width: 100%;
				background-color: pink;
			}
		}
		html {
		    font-family: "Lucida Sans", sans-serif;
		}
		#blue, #black, #red, #green1, #green2, #green3 {
			width: 75%;
			height: auto;
			margin: auto;
			margin-bottom: 5px;
			padding: 5px;
			border-radius: 5px;
			border: 1px solid black;
		}
		#blue{
			color: black;
			background-image: -webkit-linear-gradient(bottom, violet 10%, blue 80%);
			text-align: center;
		}
		#blue p {
			text-shadow: 5px 5px 10px black;
		}
		@media (min-width: 1000px) {
			#blue {
			text-align: center;
			position: fixed;
			top: 0;
			color: white;
			font-size: x-large;
			width: 97.5%;
			height: 10%;
			background-image: -webkit-linear-gradient(bottom, #00ffe7 10%, blue 80%);
			padding: 5px;
			margin: auto;
			margin-top: 5px;
			border: 1px solid black;
			}
		}
		#red{
			direction: rtl;
			background-image: -webkit-linear-gradient(left, #ffffff 10%, pink 20%, red 100%);
		}
		@media (min-width: 1000px) {
			#red {
			direction: ltr;
			width: 30%;
			height: 67.5%;
			position: fixed;
			top: 15%;
			background-image: -webkit-linear-gradient(right, #ffffff 10%, pink 20%, red 100%);
			border-radius: 5px;
			padding: 5px;
			margin: auto;
			border: 1px solid black;
			}
		}
		#brown {
			background-color: brown;
			width: 75%;
			height: auto;
			margin: auto;
			margin-bottom: 5px;
			padding: 5px;
			border-radius: 5px;
			border: 1px solid black;
		    column-count: 3;
		}
		@media (min-width: 1000px) {
			#brown {
		    column-count: 1;
			text-align: justify;
			position: fixed;
			top: 14.5%;
			left: 32.5%;
			color: white;
			font-family: verdana;
			text-shadow: 2px 2px 5px black;
			font-size: large;
			width: 31%;
			height: 61%;
			background-color: brown;
			padding: 25px;
			margin: auto;
			margin-top: 5px;
			border: 1px solid black;
			}
		}
		#red ul li{
			display: inline-block;
			direction: ltr;
		    font-style: italic;
		}
		#red ul li a{
			text-transform: uppercase;
			color: white;
			text-decoration: none;
		}
		#red h2 {
			text-align: center;
			text-decoration: verdana;
		}
		#green1, #green2, #green3{
			height: 20%;
			background-image: -webkit-linear-gradient(left, white 10%, #00ff08 60%, green 100%);
		}
		#green1 {
			top: 15%;
		}
		#green2 {
			top: 39%;
			direction: rtl;
		}
		#green3 {
			bottom: 15%;
		}
		@media (min-width: 1000px) {
			#green1, #green2, #green3 {
			width: 30%;
			height: 20%;
			background-image: -webkit-linear-gradient(left, white 10%, #00ff08 60%, green 100%);
			position: fixed;
		    right: 13px;
			border-radius: 5px;
			padding: 5px;
			margin: auto;
			border: 1px solid black;
			}
		}
		#black {
			color: white;
			background-image: -webkit-linear-gradient(top, gray 10%, black 80%);
			text-align: center;
		}
		@media (min-width: 1000px) {
			#black {
			position: fixed;
			bottom: 1%;
			color: white;
			width: 97.5%;
			height: auto;
			background-image: -webkit-linear-gradient(top, gray 10%, black 80%);
			border-radius: 5px;
			padding: 5px;
			margin: auto;
			margin-bottom: 5px;
			text-align: center;
			border-top: 1px solid black;
			border-bottom: 2px solid red;
			border-left: 2px solid white;
			border-right: 2px solid white;
			}
		}
		@media (min-width: 1000px) {
			#comment {
				background-color: white;
			    border: 2px solid;
			    padding: 20px; 
			    width: 40%;
			    height: 65%;
			    resize: both;
			    overflow: auto;
			}
		}
		#comment {
			/*visibility: hidden;*/
			background-color: white;
		    border: 2px solid;
		    padding: 20px; 
		    width: 40%;
		    height: 65%;
		    resize: both;
		    overflow: auto;
		}
		#log {
			direction: rtl;
			float: left;
			width: 50%;
		}
		#inputfield {
			float: right;
			width: 50%;
		}
		#log .button, #inputfield .button {
		    background-color: white; /* Green */
		    border-color: white;
		    color: black;
		    border-radius: 5px;
		    padding: 5px 5px;
		    text-align: center;
		    text-decoration: none;
		    display: inline-block;
		    margin: 4px 2px;
		    -webkit-transition-duration: 0.4s; /* Safari */
		    transition-duration: 0.4s;
		    cursor: pointer;
		}

		#log .button:hover, #inputfield .button:hover {
		    background-color: green; /* Green */
		    color: white;
		}
	</style>
</head>
<body>
	<div id="blue">
		<p><img src="../pulilan/img/logo.png" style="width: 30px;" alt="logo"> HOMEPAGE</p>
	</div>
	<div id="red">
		<h2>MENU</h2>
		<ul>
			<hr>
			<li><a href="#">link1</a></li>
			<hr>
			<li><a href="#">link2</a></li>
			<hr>
			<li><a href="#">link3</a></li>
			<hr>
			<li><a href="#">link4</a></li>
			<hr>
			<li><a href="#">link5</a></li>
			<hr>
		</ul>
	</div>
	<div id="brown">
		Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum.
	</div>
	<div id="green1">
		<div id="log">
			<input type="text" name="" placeholder="Username...">
			<br>
			<input type="text" name="" placeholder="Password...">
			<br>
			<button class="button">SUBMIT</button>
		</div>
		<div id="inputfield">
			<input type="text" name="" placeholder="Your comment here...">
			<br>
			<button class="button">SUBMIT</button>
		</div>
	</div>
	<div id="green2"><p>ads2</p></div>
	<div id="green3">
		<div id="comment"></div>
	</div>
	<div id="black"><p>FOOTER</p></div>
</body>
</html>