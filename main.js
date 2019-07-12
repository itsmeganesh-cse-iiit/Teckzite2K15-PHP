$(document).ready(function() {
	$("input").on("keyup",function(){
		valu=$(this).val();
		field=$(this).attr("id");
		
		if( valu=="" && field!="passwd")
		{
		$(this).css("border","1px solid red");
		
		$("#status").slideDown(1500);
		}
		else
		{
		$(this).css("border","");	
		$("#status").slideUp(1500);
		
		setTimeout(function(){$("#status").html("");},1500);
		}
		
		
		});
		
		
});
			
			
$(document).ready(function(){
		$(window).scroll(function(){
	if($(document).scrollTop()>=80)
		$("#toTop").show("slow");else $("#toTop").hide("slow");
});
		$("#spopup").show(1300);
							 setTimeout(function closeSPopup(){
	$('#spopup').hide('slow');
},5000);
		
		function closeSPopup(){
	$('#spopup').hide('slow');
}					 
						});
function shwmain(){	$('html,body').animate({scrollTop:838},1000);setTimeout(function(){window.location="index.php";},1000);	}
		
		
		
function notify(loc,msg,cat)
	{
		$('html,body').animate({scrollTop:0},1000);
		
		$("#"+loc).slideDown("slow");
		
		if(cat=="error")
		{
		$("#"+loc).html("<div class='errorinfo'><img src='img/cross.png'> "+msg+"</div>");
		
		
	     }
	     if(cat=="success")
		{
		$("#"+loc).html("<div class='successinfo'> <img src='img/ok.png'> "+msg+"</div>");
	}
	if(cat=="loading")
		{
		$("#"+loc).html("<div class='loaderinfo'><img src='img/loading.gif'></div>");
	}
		}
		
		
		function notifyevereg(loc,msg,cat)
	{
		$("#"+loc).slideDown("slow");
		
		if(cat=="error")
		{
		$("#"+loc).html("<div class='note red rounded'><img src='img/cross.png'> "+msg+"</div>");
		
		
	     }
	     if(cat=="success")
		{
		$("#"+loc).html("<div class='note green rounded '> <img src='img/ok.png'> "+msg+"</div>");
	}
	if(cat=="loading")
		{
		$("#"+loc).html("<div class='loaderinfo'><img src='img/loading.gif'></div>");
	}
		}
		
		
		
		function missing(field)
		{
			setTimeout(function(){$("#"+field).focus();},2000);
		}
		
		function pick(field)
		{
			return $.trim($("#"+field).val());
		}
		


function mailcheck(email)
{
	if(email.length>=1)
	{
	    var atpos=email.indexOf("@");
		var dotpos=email.lastIndexOf(".");
		if (atpos<1 || dotpos<atpos+2 || dotpos+2>=email.length)
					{
						
			notify("status","Please Enter Valid Email Id","error");
	          missing("email");
	          
				}
			}
}
function registerto()
{
	stuid=pick("stuid");
	fname=pick("fname");
	lname=pick("lname");
	block=pick("block");
	room=pick("room");
	phone=pick("phone");
	email=pick("email");
	gender=$("input[name=gender]:checked").val();
	department=pick("department");
	year=pick("year");
	college=pick("college");
	passwd=pick("passwd");
	cnfrmpasswd=pick("cnfrmpasswd");
	agree=$("input[name=agree]:checked").val();
	stuid=stuid.toUpperCase();
	
 if(stuid=="")
{
	notify("status","Please Enter  University ID","error");
	missing("stuid");
	return false;
}
else if(fname=="")
{
	notify("status","Please Enter  FirstName","error");
	missing("fname");
	return false;
}
else if(lname=="")
{
	notify("status","Please Enter  LastName","error");
	missing("lname");
	return false;
}

else if(gender==undefined)
{
	notify("status","Please Select Gender","error");
	return false;
	

}
else if(block=="")
{
	notify("status","Please Select Block","error");
	missing("block");
	return false;
}

else if(room=="")
{
	notify("status","Please Select Room","error");
	missing("room");
	return false;
}
else if(department=="")
{
	notify("status","Please Select Department","error");
	missing("department");
	return false;
	

}
else if(year=="")
{
	notify("status","Please Select Year","error");
	missing("year");
	return false;
}
else if(college=="")
{
	notify("status","Please Enter YourCollege","error");
	missing("college");
	return false;
}
else if(passwd=="")
{
	notify("status","Please Enter Password","error");
	missing("passwd");
	return false;
}

else if(cnfrmpasswd=="")
{
	notify("status","Please Enter Confirm Password","error");
	missing("cnfrmpasswd");
	return false;
}
else if(passwd!=cnfrmpasswd)
{
notify("status","New Password and Confirm Password do not match","error");
	missing("cnfrmpasswd");
	return false;	
}

else if(agree==undefined)
{
	notify("status","Please Check I Agree option to Register","error");
	return false;
}
else
{
	notify("status","Registration is in progress.....","loading");
	
	if(phone.indexOf('#')==-1 && phone.indexOf('+')==-1 && phone.indexOf('&')==-1)
			{
	$.post("register.php",{stuid:stuid,fname:fname,lname:lname,block:block,room:room,phone:phone,email:email,gender:gender,department:department,year:year,college:college,passwd:passwd},function(data){if(data.indexOf("Already Registered")!=-1){notify("status","Already Registered..","error"); }else{  notify("status","Successfully Registered...<br><h4>YOUR TECKZITE ID :<h2>"+data+"</h2> <br>LOGIN ID : <h2>"+stuid+"</h2></h4><br><A style='cursor:pointer;text-decoration:underline;' href='gettzid.php'>Click here to login</a>","success");$("#registerform").slideUp("slow")};});
}
else
{
notify("status","+,#,& are not allowed","error");
	return false;	
}
}

}

function login()
{
	tzid=pick("tzid").toUpperCase();
	tzpasswd=pick("tzpasswd");

 if(tzid=="")
{
	notify("status","Please Enter  Teckzite ID","error");
	missing("tzid");
	return false;
}
 else if(tzpasswd=="")
{
	notify("status","Please Enter  Password","error");
	missing("tzpasswd");
	return false;
}
else
{
	
	notify("status","Authenticating.....","loading");
	
	$.post("login_check.php",{tzid:tzid,tzpasswd:tzpasswd},function(data){if(data.indexOf("invalid")!=-1){notify("status","Invalid Credentials..","error");}if(data.indexOf("success")!=-1){window.location="index.php"; };});
}
}


function forgot()
{
	tzfid=pick("tzfid");
	tzfphone=pick("tzfphone");
	tzfuid=pick("tzfuid");
	tzfpasswd=pick("tzfpasswd");
	tzfcnfrmpasswd=pick("tzfcnfrmpasswd");

 if(tzfid=="")
{
	notify("status","Please Enter  Teckzite ID","error");
	missing("tzfid");
	return false;
}
 else if(tzfphone=="")
{
	notify("status","Please Enter  Phone Number","error");
	missing("tzfphone");
	return false;
}
 else if(tzfuid=="")
{
	notify("status","Please Enter  University ID","error");
	missing("tzfphone");
	return false;
}
else if(tzfpasswd=="")
{
	notify("status","Please Enter  Password","error");
	missing("tzfpasswd");
	return false;
}
else if(tzfcnfrmpasswd=="")
{
	notify("status","Please Enter Confirm Password","error");
	missing("tzfcnfrmpasswd");
	return false;
}
else if(tzfpasswd!=tzfcnfrmpasswd)
{
notify("status","Mismatch in passwords","error");
	missing("tzfcnfrmpasswd");
	return false;	
}
else
{
	
	notify("status","Authenticating.....","loading");
	
	$.post("forgotpass.php",{tzfid:tzfid,tzfphone:tzfphone,tzfuid:tzfuid,tzfpasswd:tzfpasswd},function(data){if(data.indexOf("invalid")!=-1){notify("status","Invalid Credentials..","error");}else {notify("status","Password Successfully Changed..","success");$("#forgotform").slideUp("slow");}});
}
}


function gettzid()
{
	tzfphone=pick("tzfphone");
	tzfemail=pick("tzfemail");

 if(tzfphone=="")
{
	notify("status","Please Enter  Mobile Number","error");
	missing("tzfphone");
	return false;
}
 else if(tzfemail=="")
{
	notify("status","Please Enter  Email","error");
	missing("tzfemail");
	return false;
}
else
{
	
	notify("status","Authenticating.....","loading");
	
	$.post("forgottziddb.php",{tzfphone:tzfphone,tzfemail:tzfemail},function(data){if(data.indexOf("invalid")!=-1){notify("status","Invalid Details..","error");}else{notify("status","<br><h4>YOUR TECKZITE ID : <br></h4><h1>"+data+"</h1><br>","success");$("#getziteidform").slideUp("slow"); };});
}
}

function changepass()
{
tzfold=pick("tzfold");
tzfnew=pick("tzfnew");
tzfcnfrm=pick("tzfcnfrm");

if(tzfold=="")
{
	notify("status","Please Enter  Old Password","error");
	missing("tzfold");
	return false;
}

else if(tzfnew=="")
{
	notify("status","Please Enter  New Password","error");
	missing("tzfold");
	return false;
}
else if(tzfcnfrm=="")
{
	notify("status","Please Enter  Confirm Password","error");
	missing("tzfcnfrm");
	return false;
}
else if(tzfnew!=tzfcnfrm)
{
    notify("status","New Password and Confirm Password do not match","error");
	missing("tzfcnfrm");
	return false;	
}
else
{
	
    notify("status","loading..","loading");
    $.post("changepass-db.php",{tzfnew:tzfnew,tzfold:tzfold},function(data){if(data.indexOf("invalid")!=-1){notify("status","Invalid Details..","error");}else{notify("status","Password Successfully Changed","success");$("#getziteidform").slideUp("slow"); };});

}
}


function updateprofile()
{
	fname=pick("fname");
	lname=pick("lname");
	phone=pick("phone");
        email=pick("email");
	department=pick("department");
	year=pick("year");
	

 if(fname=="")
{
	notify("status","Please Enter  FirstName","error");
	missing("fname");
	return false;
}
else if(lname=="")
{
	notify("status","Please Enter  LastName","error");
	missing("lname");
	return false;
}
else if(department=="")
{
	notify("status","Please Select Department","error");
	missing("department");
	return false;
	

}
else if(year=="")
{
	notify("status","Please Select Year","error");
	missing("year");
	return false;
}
else
{
	
	notify("status","Registration is in progress.....","loading");
	
	$.post("editprofile-db.php",{fname:fname,lname:lname,phone:phone,email:email,department:department,year:year},function(data){notify("status","Profile Updated Successfully","success");$("#getziteidform").slideUp("slow");});

}

}
