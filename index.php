<?php
include('db_connect.php');

 ?>
 <?php
if(isset($_POST['fname']))
{  
	$fname =$faddress= $fphone_no=$femail=$ffaculty=$ftournament="";
	
             $fname = $_POST['fname'];
	         $faddress = $_POST['faddress'];
	         $fphone_no = $_POST['fphone_no'];
                $femail = $_POST['femail'];
				   $ffaculty = $_POST['ffaculty'];
				      $ftournament= $_POST['ftournament'];


$insert = mysqli_query($sql,"INSERT INTO form(id,name,address,phone_no,email,faculty,tournament,date) 
	VALUES('','$fname','$faddress','$fphone_no','$femail','$ffaculty','$ftournament',now())") or die("error");
	
}

?>
<html>
<head>
<a id="top"></a>
<title> web page </title>
<link href="style.css" rel="stylesheet" type="text/css"/>

<script type="text/javascript">
var image1=new Image()
image1.src="Cinfo.png"
var image2=new Image()
image2.src="cmap.png"

</script>


</head>
<body>

<?php

include('header.php');

?>

<div class="video">


<center> 
<iframe autoplay="0"  frameborder="3"  height="500px" src="videos/vdo.mp4"  width="670px">
</iframe>
</center>

</div>
<?php

include('side.php');

?>


<div class="side3">

<h3><img src="pic/new.gif" align="left" height="30px"  />Headlines:</h3>
<hr>
<ul>
<li>Bcis 3rd bits bba 1st</li>
<br>

<li>Bph3rd, bpharma7th nd bcis 4th enter semifinal in cricket tournament</li>
<br>
<li>Bba 4th bits BHM 5thh on fustal tournament </li>
<br>
<li>BPH 2nd bits bba 1st</li>
<br>
<li>bba 3rd bits BHM 5th</li>
<br>
</ul>
</div>
<div class="side1">
<h3 align="left"> &nbsp;&nbsp;About us:
<a href="facebook.com"><img src="pic/fb.jpg" valign="top" height="30px"  /></a>
<a href="youtube.com"><img src="pic/youtube.jpg" valign="top" height="30px"  /></a>
<a href="twitter.com"><img src="pic/twitter.jpg" valign="top" height="30px" /></a></h3>
<hr>

<img src="Cinfo.png" name="slide" width="340" height="320">
<script type="text/javascript">
var step=1
function slideit(){
document.images.slide.src=eval ("image"+step+".src")
if(step<2)
step++
else
step=1
setTimeout("slideit()",2500)
}
slideit()
</script>

</div>
<div class="side2">
<h3> &nbsp;&nbsp;Upcoming events:</h3>
<hr>
<ul>
<li>Bcis 3rd will take bba 7th on 7Aside football</li>
<br>
<li>Girls TT tournament will kick off on 3rd feb</li>
<br>
<li>Inter college cricket tournament start on 10feb</li>
<br>
<li>Members Board meating on feb 9</li>
<br>
<li>Members Board meating on feb 9</li>
<br>
</ul>
</div>


<?php

include('footer.php');

?>




</body>
</html>