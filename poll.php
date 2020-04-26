
<HTML>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<HEAD>
	<TITLE> SONGDEW FREE POLLING </TITLE>
	
	<STYLE>
		html {
 			background: #red; /* fallback color */
                        background: linear-gradient( to bottom, #ff99cc 10%, #33ccff 100%);
                        background-repeat: no-repeat;
                        background-size: 100% 100%;
                        min-width: 100%;
                        min-height: 100%;
                }
	<!---           styling for header section      ----!>
		#heading{
    			text-align:center;
  		  	display:inline-block;
		}
		
		.sticky{
			position: fixed;
			top:0;
			width:100%
		}
		.content{
			padding:16px;
		}
		.sticky + .content{
			padding-top: 60px;
		}
		#img1{    
			border-style:hidden;
			border-width: 20px;
			margin-right: 20px;
			width:100px;
			display:inline;
			float: left;
		}
		#span1{
			text-align:center;
  		  	display:inline-block;
		}
		#span2{
			float:right;
			text-align:center;
			margin-left:250px;
  		  	display:inline-block;
		}
		#line{  
			font-family:"Comic Sans MS", cursive, sans-serif;
			font-weight:bold;
			color:#b30000;
			margin-left:10px;
			font-size:13px;
			float:left;
			width:80px;
			display:inline;
		}
		h1{
			font-weight:bold;
			font-family:"Comic Sans MS", cursive, sans-serif;
			font-size:45px;
			margin-top: 25px;
			float:left;
			width:100px;
			display:inline;
		}
		#register{
			font-family:"Times New Roman", Times, serif;
			font-weight:bold;
			margin-left:10px;
			margin-right:15px;
			width:80px;
			display:inline;
		}
		#LogIn{
			font-family:"Times New Roman", Times, serif;
			font-weight:bold;
			margin-left:10px;
			margin-right:15px;
			width:80px;
			display:inline;
		}
		#ContactUs{
			font-family:"Times New Roman", Times, serif;
			font-weight:bold;
			margin-left:10px;
			margin-right:15px;
			width:80px;
			display:inline;
		}
		#About{
			font-family:"Times New Roman", Times, serif;
			font-weight:bold;
			margin-left:10px;
			margin-right:15px;
			width:80px;
			display:inline;
		}
		#FAQ{
			font-family:"Times New Roman", Times, serif;
			font-weight:bold;
			margin-left:10px;
			margin-right:15px;
			width:80px;
			display:inline;
		}
		.container {
  			display: inline-block;
  			cursor: pointer;
		}

		.bar1, .bar2, .bar3 {
  			width: 20px;
  			height:2px;
  			background-color: #333;
  			margin: 6px 0;
  			transition: 0.4s;
		}
		.sidenav {
  			height: 100%; 
  			width: 0; 
  			position: fixed; 
  			z-index: 1; 
  			top: 0;
  			right: 0;
  			background-color: #111;
  			overflow-x: hidden; 
  			padding-top: 60px;
			transition: 0.5s; 
		}
		.sidenav a {
  			padding: 8px 8px 8px 32px;
  			text-decoration: none;
  			font-size: 25px;
  			color: #818181;
  			display: block;
  			transition: 0.3s;
		}
		.sidenav a:hover {
  			color: #f1f1f1;
		}
		.sidenav .closebtn {
  			position: absolute;
  			top: 0;
  			right: 25px;
  			font-size: 36px;
  			margin-right:170px;
		}
		.MyPollPage{
			text-align:center;
  		  	display:inline-block;
			margin-top:5%;
			margin-left:40%;
			margin-bottom:15px;
			padding: 6px 12px;
		}
		#mypolls{
		    font-family:"Times New Roman", Times, serif;
			font-weight:strong;
			font-size:35px;
			text-align:center;
			margin-left:20px;
			margin-right:15px;
			width:200px;
			display:inline;
			color: black;
		}
		.pollContainer{
			display:inline-block;
			margin-top:5px;
			padding: 6px 12px;
		}
		.pollDesign{
			padding: 6px 12px;
		}
		#rcorners {
  			border-radius: 15px 50px 30px;
  			background: white;
			margin-left:20px;
			margin-right:20px;
			margin-bottom:20px;
			margin-top:20px;
  			padding: 10px; 
  			width: 250px;
 		 	height:275px; 
		}
		.containerHead{
			display:inline-block;
			margin-top:5px;
			height:40px;
		}
		.choiceHolder{
			display:inline-block;
			margin-top:40px;
			margin-left:40px;
  			padding: 15px; 
  			width: 200px;
  			height: 50px;  
		}
		#rcorners2 {
  			border-radius: 25px;
  			border: 1px solid #73AD21;
  			padding: 5px; 
  			width: 200px;
  			height: 80px;  
		}
		.questionPoll{
			display:inline-block;
			margin-top:20px;
			margin-left:10px;
  			padding:5px; 
  			width: 200px;
  			height: 50px;  
		}
		#qwerty{
		    display:inline-block; 
		    font-family:"Times New Roman", Times, serif;
			font-weight:strong;
			font-size:15px;
		    border:none;
		    padding:8px;
		    margin-left:10px;
		    text-transform:uppercase;
		    width:180px;
		    height: 50px;
		}
		#mybtn{
		    border-radius: 8px;
		    background-color: rgba(255,0,255,0.4); /* Green */
            border: none;
            color: black;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            height: 40px;
            width: 50px;
            font-size: 16px;
            margin: 2px 2px;
            cursor: pointer;
		}
		#pollHead{
			display:inline-block;
			margin-top:5px;
			padding: 6px 12px;
			font-family:"Times New Roman", Times, serif;
			font-weight:strong;
			font-size:25px;
			margin-left:80px;
		}
		.Section1{
			background-color:#e0ebeb;
			margin-top:5%;
			height:150px;
		}
		.aside1{
			background-color:grey;
			margin-top:0%;
		}
		.Section-text{
			padding:10px;
			text-align:center;
		}
		.Aside-text{
			padding:10px;
			text-align:center;
		}
		ul{
			margin-top:2%;
		}
		ul li{ 
			display:inline;
		}
		li{
			padding:5px;
		}
		.list1{
			font-weight:normal;
		}
		.list2{
			font-weight:bold;
		}
	</STYLE>
</HEAD>
<BODY>
<header>
	<div id="heading"> 
	<table width=100%>
	<tbody>
	<tr>
	<td valign="middle" style="height:30px; width: 50px; color:#eaffff;">
		<img id="img1" src= "https://www.politicspa.com/wp-content/uploads/2017/12/aqn9I8y0_400x400.jpg" height= "90" width="90"> 
	</td>
	<td valign="middle" style="height:30px; width: 500px; color:#eaffff;">
		<span id="span1">
        		<p id="line"> free online polls </p>
        		<h1 id="h1line"><b> <span style="color:#0040ff;">Songdew</span><span style="color:black;">Polls!</span> </b></h1>
		</span>     
	</td>        
	<td align:"right" valign:"top">
		<span id="span2">
		<span valign="top" id="register" > Register </span>
		<span valign="top" id="LogIn"> LogIn</Span>
		<span valign="top" id="ContactUs">ContactUs</span>
		<span valign="top" id="About"> About</span>
		<span valign="top" id="FAQ"> FAQ</span>
		<div id="mySidenav" class="sidenav">
			<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  			<a href="index.html">Home</a>
  			<a href="#">Services</a>
  			<a href="#">Clients</a>
  			<a href="#">Contact</a>	
		</div>
		<div class="container" onclick="myMenu(this)">
  			<div class="bar1"></div>
  			<div class="bar2"></div>
  			<div class="bar3"></div>
		</div>
		</span>
	</td>
	</tr>
	</tbody>
	</table>  		
	</div> 
	<div class="MyPollPage" style="margin-top:100px;">
		<p id="mypolls"> My Polls Created</p><br><br>
	</div>
</header>
<?php  
include_once('insert.php');
$query="SELECT * from student";
$result= mysqli_query($conn, $query) or die("error");
while($rows= mysqli_fetch_array($result, MYSQLI_ASSOC)){
$ques= $rows['question'];
$ch1=$rows['choice1'];
$ch2=$rows['choice2'];
$ch3=$rows['choice3'];
echo "<form action='count.php' method='post' class='pollContainer'>";
    echo"<div style='box-shadow: 10px 10px grey; background-color:rgba(0,128,0,0.6);'>";
        echo"<div class='pollDesign'>";
        echo"<div id='rcorners'>";
            echo"<div class='questionPoll'>";
		        echo"<div id='rcorners2'>";
                    echo"<input type='text'  rows='2'  name='text' id='qwerty' value='$ques'>";
                echo"</div>";
            echo"</div>";
            echo"<div class='choiceHolder'>";
                echo"<input type='radio' name='gender' value='male'>";
                    echo"<label for='male'>$ch1</label><br>";
                echo"<input type='radio' name='gender' value='female'>";
                    echo"<label for='female'>$ch2</label><br>";
                echo"<input type='radio' name='gender' value='other'>";
                    echo"<label for='other'>$ch3</label><br>";
                echo"<div style='margin-top:25px; margin-left:40px;'>";
                    echo"<input type='submit' id='mybtn' name='submit' value='vote'>";
                echo"</div>";
            echo"</div>";
        echo"</div>";
        echo"</div>";
    echo"</div>";
echo"</form>";
}
?>
<div id="songdewfooter">
	<footer class="footer">
		<div class="Section1">
			<div class="Section-text">
				<ul class="list1">
					<li>Team</li>
					<li>Jobs</li>
					<li>Blog</li>
					<li>Media Corner</li>
					<li>Songdew Labs</li>
				</ul>
				<ul class="list1">
					<li>Adds</li>
					<li>Help And Support</li>
					<li>Contact Us</li>
				</ul>
			</div>
		</div>
		<div class="aside1">
			<div class="Aside-text">
				<ul class="list2">
					<li>Terms And Conditions</li>
				</ul>
				<ul class="list2">
					<li>Imprint</li>
					<li>Privacy</li>
				</ul>
			</div>
		</div>
	</footer>
</div>
			
<SCRIPT
	
	<!---Menu Bar---!>
		function myMenu(x) {
  			
			document.getElementById("mySidenav").style.width = "250px";
			
			}
		function closeNav() {
  			document.getElementById("mySidenav").style.width = "0";
  			
			}
			
	<!----form action--->
	    $(document).ready(function(){
        $("input[type='radio']").click(function(){
            var radioValue = $("input[name='radiobutton']:checked").val();
            });
        });
</SCRIPT>
<?php
   $var= "<script>document.writeln(radioValue);</script>";
?>
</BODY>
</HTML>

