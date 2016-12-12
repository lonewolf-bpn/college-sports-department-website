<div class="side">
<marquee behavior="alternate"><h2> Tournament Entry:</h2></Marquee>
<hr>
<form align="left" name="f1" method="post" action=" ">
<div><b>Name:</b></div><input placeholder="enter your valid name" type="text" name="fname"/><br><br>
<div><b>Address:</b></div><input placeholder="enter your address" type="text" name="faddress"/><br><br>
<div><b>Phone_no.:</b></div><input placeholder="enter ph no (10digit)" type="text" name="fphone_no"/><br><br>
<div><b>Email:</b></div><input placeholder="abc.@gmail.com" type="text" name="femail"/><br><br>
<div><b>Faculty:</b></div><input placeholder="management,science" type="text" name="ffaculty"/><br><br>
<div><b>Tournament</b></div><input placeholder="which tournament?" type="text" name="ftournament"/><br><br>


<button type="submit" value="Submit" onclick="return validate()"><b>&nbsp; Submit &nbsp;<b></button>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 <button type="reset" value="Reset"><b>&nbsp;&nbsp;Reset&nbsp;&nbsp;</b></button>

 
</form>

<script type="text/javascript">
function validate()
{
	var uname=document.f1.fname.value;	
	var uaddress=document.f1.faddress.value;	
	var uphone=document.f1.fphone_no.value;	
	var uemail=document.f1.femail.value;
	var ufaculty=document.f1.ffaculty.value;
	var utournament=document.f1.ftournament.value;
	
	var ptname =/^[A-Z a-z]{3,20}$/;
	var ptadd =/^[A-Z a-z 0-9 ,]{5,50}$/;
	var ptph =/^[0-9]{10}$/;
    var ptemail =/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
	var ptfaculty =/^[A-Z a-z]{3,10}$/;
	var pttournament=/^[A-Z a-z 0-9 -]{3,50}$/;
	
	var rtname= ptname.test(uname);
	var radd= ptadd.test(uaddress);
	var rph= ptph.test(uphone);
	var remail= ptemail.test(uemail);
	var rfaculty= ptfaculty.test(ufaculty);
	var rtrm= pttournament.test(utournament);
	
    if(uname=="")
	{
		alert("you forget to enter your name");
		return false;
	}
	if(rtname==false)
	{
		alert("invalid name");
		return false;
	}
	
	
	if(uaddress=="")
	{
		alert("you forget to enter your address");
		return false;
	}
	if(radd==false)
	{
		alert("invalid entry of address");
		return false;
	}
	
	if(uphone=="")
	{
		alert("You forget to enter your PH number");
		return false;
	}
	if(rph==false)
	{
		alert("invalid entry of phone number");
		return false;
	}
	
	if(uemail=="")
	{
		alert("You forget to enter your email address");
		return false;
	}
	if(remail==false)
	{
		alert("invalid entry of email");
		return false;
	}
	
	if(ufaculty=="")
	{
		alert("you forget to enter your faculty");
		return false;
	}
	if(rfaculty==false)
	{
		alert("invalid entry of faculty");
		return false;
	}
	
	if(utournament=="")
	{
		alert("you forget to enter your tournament");
		return false;
	}
	if(rtrm==false)
	{
		alert("invalid entry of tournament");
		return false;
	}
	else{
		return true;
	}
	
	
	
}
</script>
</div>