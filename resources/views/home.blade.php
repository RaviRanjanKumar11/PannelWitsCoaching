@extends('layouts.app')

@section('title', 'Home')

@section('header', 'Home')

@section('content')
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"/>
 <link rel="stylesheet" href="https://font-family: 'Catamaran', sans-serif;">
<style> 


/*pop-up */
ul, #myUL {
  list-style-type: none;
}

#myUL {
  margin: 0;
  padding: 0;
}
.caret {
  cursor: pointer;
  -webkit-user-select: none; /* Safari 3.1+ */
  -moz-user-select: none; /* Firefox 2+ */
  -ms-user-select: none; /* IE 10+ */
  user-select: none;
}

.caret::before {
  content: "\25B6"; 
  color: black;
  display: inline-block;
  margin-right: 6px;
}

.caret-down::before {
  -ms-transform: rotate(90deg); /* IE 9 */
  -webkit-transform: rotate(90deg); /* Safari */
  transform: rotate(90deg);  
}

.nested {
  display: none;
}

.active {
  display: block;
}
/*pop-up */

h1{
color:red;
}

label{
color:red;
}
     body{
     font-family: "Sofia", sans-serif;
       background-image: url('https://scontent.fhyd5-1.fna.fbcdn.net/v/t39.30808-6/273641304_442037960954326_4622576288011398409_n.jpg?_nc_cat=103&ccb=1-7&_nc_sid=09cbfe&_nc_ohc=gG-H63xdVFMAX9kEFeB&tn=T5ri-Ir8GExJPOdY&_nc_ht=scontent.fhyd5-1.fna&oh=00_AfCQWjs-odTUJv3pTe16ldQ4fnYX5gvXjoFtkM0g1nUGtQ&oe=63EC27C2');
       background-repeat: no-repeat;
	   background-attachment: fixed;
	   background-size: 100% 100%;
	   
	           }      
         input:hover {
  		transform: scale(1.2);	 	
	           }	       
		input{
	        border-radius:20px;
			outline:none;
			background:#66ffff;
			border-bottom:12px solid blue;
			}
			 input{
   accent-color:red;
   }
   input[type="radio"]
      {
     accent-color:red;
      }
#ik{
color:red;
}
#bt:hover{
background-color:yellow;
transform:scale (1.6);
}
/*.avatar {
  vertical-align: middle;
  width: 50px;
  height: 50px;
  border-radius: 50%;
}*/
</style>
</head>
<body>
<form  action="add" method="post">
&nbsp;<a href="login.html"><i class="fa fa-window-close" aria-hidden="true" id="ik" size="25px"></i></a>


<script>
var toggler = document.getElementsByClassName("caret");
var i;

for (i = 0; i < toggler.length; i++) {
  toggler[i].addEventListener("click", function() {
    this.parentElement.querySelector(".nested").classList.toggle("active");
    this.classList.toggle("caret-down");
  });
}
</script>
 <br>
<center><h1><u><b><marquee><---Reg  Form of Student for Wits---</marquee></b></u></h1></center>
<center>
<label>First name</label><input type="text" name="fname" placeholder="   enter first name"autofocus>
<label>address</label><input type="text" name="addr" placeholder="     enter address "><br><br>
<label>Last name</label><input type="text" name="lname" placeholder="    enter last name">
<label>E mail</label><input type="text" name="maid" placeholder="      enter Email id">
<label>RegNo</label><input type="text" name="regno" placeholder="   reg no."> <br><br>
<label>UserName</label><input type="text" name="uname" placeholder="    enter user name">
<label>Contact</label><input type="text" name="phno" placeholder="     enter phone no."> 
<label>Password</label><input type="password" name="pword" placeholder="     enter password">
<label>BatchNo</label><input type="text" name="btchno" placeholder="   Batchno">
<label>BatchType.</label><input type="text" name="btchtype"  placeholder="   BatchType">
<br><br><i class="fa-sharp fa-solid fa-user-plus"></i><input type="submit" id="bt" value="AddStudent">
 <!-- <input type="file" id="file" accept=".png"/><img src="files/img_avatar.png" alt="Avatar" class="avatar">
<input type="file" id="file" accept=".pdf"/>
  <button>upload file</button>&nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp<input type="reset" name="bs" name="button" value="Reset"/> &nbsp &nbsp <a href="hp.html">!Help Desk!</a> 
  
   <script>
		var fileobj = document.getElementById("file");

		fileobj.onchange = function() {
			if(this.files[0].size > 100000){		//maxsize is 10000bytes
			   alert("File is too big!");
			   this.value = "";
			};
		};
	</script>  --> 
  </center>
  
 </form> 

@endsection
