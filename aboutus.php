<!--about us page-->
<html lang="en">
<head>
	<meta charset="UTF-80">
	<title>about us</title>
	
	<style>
			body{
					background-color: rgb(180, 180, 180);
					background-size: cover;
					font-family: tahoma;
					overflow:hidden;
				}
				.main-banner-section{
					position:relative;
					padding:10px 0px 250px;
					background-repeat: no-repeat;
					background-position: top center;
					background-size: cover; 
				}
				.main-banner-section .text p{
					color:white;
				}
				p, .text{
					position: relative;
					line-height: 1.8em;
					font-family: tahoma;
					text-align: justify;
				}
				.secc-title.light.title, .sec-title.light h2{
					color:"brown";
				}
				.sec-title:before{
					position:absolute;
					content: '';
					left: 17px;
					top: 30px;
					height: 2px;
					width: 110px;
					background:white;
				}
				.sec-title .title{
					position:relative;
					color:white;
					margin-bottom:33px;
					text-transform: capitalize;
					padding-left: 133px;
				}
				#morbtn {display: none;}
			</style>
</head>
<body>
	<section class="main-banner-section container">
		<div class="auto-container">
			<div class="inner-container">
				<div class="sec-title light">

					

					<div class="title">More About US !!!</div>
					<span style="font-size:60px">ABOUT US</span>
			

					<div class="text">
					<p align="center"> <font color ="brown"><h3>Your "Rice Portal" to the Sri Lankan Rice Industry</h3></p>

						<p><b><i>RiceOnline is the premier web portal for the most comprehensiverice<br>
						 information from the Sri Lankan rice industry.You subscription includes<br> 
						 weekly issues of the Creed Rice Market Report with the most comprehensive<br>
						 rice market insight available as well as unlimited access to the resources<br>
						 on riceonline.com. Sign up today and get the information you need to buy,<br> 
						 sell and trade rice and rice products around the world.<br></p>
						<p>Rice is a central part of many cultures<span id="aa">...</span><span id="morbtn">
							some countries<br> even credit rice cultivation with the development of<br>  
							their civilization. It is remarkable that almost every culture has<br>  
							its own way of harvesting, processing and eating rice and these<br>  
							different traditions are, in fact, part of the world's cultural<br>  
							heritage.we have some suppliers,from north.<br> </span></b></p></i>
						<button onclick="myFunction()" id="bttn">Read more</button>

						<script>
			
						function myFunction() {
  						var dots = document.getElementById("aa");
  						var moreText = document.getElementById("morbtn");
  						var btnText = document.getElementById("bttn");

  						if (dots.style.display === "none") {
    					dots.style.display = "inline";
    					btnText.innerHTML = "Read more"; 
    					moreText.style.display = "none";
  						} else {
    					dots.style.display = "none";
    					btnText.innerHTML = "Read less"; 
    					moreText.style.display = "inline";
 						 }
						}
					</script>
					</div>
					<br>


			</div>
			</div>
	</div>
</body>