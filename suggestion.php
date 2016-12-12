<html>
<head>
<a id="top"></a>
<title> web page </title>
<link href="style.css" rel="stylesheet" type="text/css"/>
</head>
<body>

<?php

include('header.php');

?>
<body>
<div class="vvideo">
<?PHP 
include_once 'db_connect.php';
$id = $user = $time = $msg = $result = $os = "";

	$retrive = mysqli_query($sql,"SELECT * FROM message ORDER BY time DESC LIMIT 10") or die("Could not retrive data from database");
	while($data = mysqli_fetch_array($retrive))
	{
		$id = $data['id'];
		$user = ucfirst($data['name']);
		$time = $data['time'];
		$msg = ucfirst($data['message']);	
		$os = ucfirst($data['os']);
		
		$result .= '
		<div id="messages" >
    	<div id="messaage_head">
        <span id="msg_name" >
        '.$user.' &nbsp;&nbsp;<span id="via"></span></span>
        <span id="user_post">Post On:&nbsp;'.$time.'</span>
		</div>
        <div id="msg" >'.$msg.'</div></div>';

		
	}
 ?>
<div id="page_body" style="height:auto; padding-bottom:20px;">
<style>
#messaage_head{height:28px; width:100%; background:#069; border-radius:2px 2px 0 0;}
#msg_name{float:left; color:#FFF;  font-size:13px; font-weight:700; margin-left:10px; width:60%;}
#user_post{width:30%; float:right; font-size:14px; color:#BCBCBC;}
#via{font-size:12px;  color:#D1D1D1;}
#messages{width:90%; background:#E1E1E1;  border-radius:2px; border:1px solid #067; margin:10px; }
#msg{margin:15px; font-size:14px; font-family:"Times New Roman", Times, serif; color:#333;}
</style>

<div id="message_show"  style="height:auto; width:90%; margin:10px  auto; border:1px solid #999; border-radius:2px;">

<?PHP  echo $result; ?>

    	   <div id="leave_message">
            <form name="myForm" id="message" method="post" onsubmit="javascript:data_sent();">
            <input type="text" name="unname" id="uname" placeholder="Enter your name" /><span id="error_name" style="color:#900; 
            font-weight:700;"></span><br />
            <textarea name="msg" id="msg" placeholder="enter live " height="50px" width="600px"></textarea><br />
            <input type="submit" name="submit" onclick="return validate();" value="submit" style="width:140px;
             font-weight:700;" /><span id="error_msg" style="color:#900;
             font-weight:700;"></span>
             </form>
            </div>
</div>     
</div>
<script>
function validate()
{
 var a = document.forms["myForm"]["unname"].value;
  var c = document.forms["myForm"]["msg"].value;
 if(a == "" || a == null)
 {
	document.getElementById('error_name').innerHTML = "Your name is required *";
	uname.focus();
	return false; 
 }
   if(c == "" || c == null)
 {
	document.getElementById('error_msg').innerHTML = "Type your message";
	msg.focus();
	return false; 
 }
	
  
	
 		
	
}

</script>


</div>
 
 

<?PHP
include_once 'db_connect.php';
if(isset($_POST['submit'])!= "")
	{
		if($_POST['unname'] && $_POST['msg'] != "")
		{
		 $name = $email = $message = "";
		 $name = $_POST["unname"];
		 $message = $_POST["msg"];	
		 
 mysqli_query($sql,"INSERT INTO message(id,name,message,time) VALUES('','$name','$message',now())") or die("Could not insert your record");
 echo "<script>setTimeout(\"location.href = 'suggestion.php';\",1500);</script>";
 exit();
 
	}
}
	
?>
<?php

include('footer.php');

?>



</div>
</body>
</html>