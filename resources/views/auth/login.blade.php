<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Login</title>
    <!-- Bootstrap CSS CDN -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">

    <style>
     .login-container {
  background-color: #2f2f2f;
  border-radius: 8px;
  box-shadow: rgb(31 31 31 / 17%) 0px -23px 25px 0px inset,
    rgb(108 108 108 / 23%) 0px -36px 30px 0px inset,
    rgba(0, 0, 0, 0.1) 0px -79px 40px 0px inset, rgba(0, 0, 0, 0.06) 0px 2px 1px,
    rgba(0, 0, 0, 0.09) 0px 4px 2px, rgba(0, 0, 0, 0.09) 0px 8px 4px,
    rgba(0, 0, 0, 0.09) 0px 16px 8px, rgba(0, 0, 0, 0.09) 0px 32px 16px;
  padding: 14px;
  max-width: 400px;
  width: 100%;
  text-align: center;
  margin: 0 auto;
}

.login-form {
  display: flex;
  flex-direction: column;
}

.heading {
  color: #ffffff;
  font-weight: 500;
  font-size: 40px;
  margin-bottom: 1px;
}

.paragraph {
  color: #ffffff;
  font-weight: 400;
  font-size: 15px;
  margin-bottom: 1px;
}

.input-group {
  margin-bottom: 20px;
}

.input-group input {
  background: none;
  border: 1px solid #353535;
  padding: 15px 23px;
  font-size: 16px;
  border-radius: 8px;
  color: #979797;
  width: 100%;
  box-shadow: rgb(136 136 136 / 17%) 0px -23px 25px 0px inset,
    rgb(81 81 81 / 23%) 0px -36px 30px 0px inset,
    rgba(0, 0, 0, 0.1) 0px -79px 40px 0px inset, rgba(0, 0, 0, 0.06) 0px 2px 1px,
    rgba(0, 0, 0, 0.09) 0px 4px 2px, rgba(0, 0, 0, 0.09) 0px 8px 4px,
    rgba(0, 0, 0, 0.09) 0px 16px 8px, rgba(0, 0, 0, 0.09) 0px 32px 16px;
}

.input-group input:focus {
  border-color: #0173ed;
  outline: none;
}

button {
  padding: 15px;
  border: none;
  border-radius: 8px;
  background-color: #0173ed;
  color: #ffffff;
  font-size: 16px;
  font-weight: 500;
  cursor: pointer;
  transition: background-color 0.3s ease;
}

button:hover {
  background-color: #0173ed;
}

.bottom-text {
  display: flex;
  flex-direction: column;
  align-items: center;
  margin-top: 20px;
  color: #ffffff;
  font-size: 15px;
  font-weight: 400;
}

.bottom-text a {
  color: #0173ed;
  text-decoration: none;
  transition: color 0.3s ease;
}

.bottom-text a:hover {
  color: #3f95f2;
}
body{
font-family: "Sofia", sans-serif;
       }
		   *{
	   margin:5px;
	   }
	   h1{
	    color:white;
		}
		/* .c{
		margin-top:-4px;
   font-size: 28px;
   color: red;  
   text-align: center;
   animation: glow 2s ease-in-out infinite alternate;
          }
      @-webkit-keyframes glow {
        from {
        text-shadow: 0 0 10px #fff, 0 0 20px #fff, 0 0 30px #e60073, 0 0 40px #e60073, 0 0 50px #e60073, 0 0 60px #e60073, 0 0 70px #e60073;
           }
  
          to {
             text-shadow: 0 0 25px #fff, 0 0 30px #ff4da6, 0 0 40px #ff4da6, 0 0 50px #ff4da6, 0 0 60px #ff4da6, 0 0 70px #ff4da6, 0 0 80px #ff4da6;
             }
            }
	 */



body{
background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' version='1.1' xmlns:xlink='http://www.w3.org/1999/xlink' xmlns:svgjs='http://svgjs.dev/svgjs' width='1440' height='560' preserveAspectRatio='none' viewBox='0 0 1440 560'%3e%3cg mask='url(%26quot%3b%23SvgjsMask1000%26quot%3b)' fill='none'%3e%3crect width='1440' height='560' x='0' y='0' fill='%230e2a47'%3e%3c/rect%3e%3cpath d='M1045.87 130.43L1074.61 130.43L1074.61 159.17L1045.87 159.17z' stroke='%23037b0b'%3e%3c/path%3e%3cpath d='M608.54 366.92L646.89 366.92L646.89 372.82L608.54 372.82z' stroke='%23d3b714'%3e%3c/path%3e%3cpath d='M569.44 531.39 a11.4 11.4 0 1 0 22.8 0 a11.4 11.4 0 1 0 -22.8 0z' fill='%23e73635'%3e%3c/path%3e%3cpath d='M1377.45 64.38 a16.77 16.77 0 1 0 33.54 0 a16.77 16.77 0 1 0 -33.54 0z' stroke='%23037b0b'%3e%3c/path%3e%3cpath d='M1019.55 38.47a3.43 3.43 0 1 0-6.33 2.62z' fill='%23037b0b'%3e%3c/path%3e%3cpath d='M865.82 339.74L885.83 339.74L885.83 359.75L865.82 359.75z' stroke='%23037b0b'%3e%3c/path%3e%3cpath d='M740.32 146.23L752.93 146.23L752.93 158.84L740.32 158.84z' stroke='%23d3b714'%3e%3c/path%3e%3cpath d='M370.34 153.97 a49.66 49.66 0 1 0 99.32 0 a49.66 49.66 0 1 0 -99.32 0z' fill='%23037b0b'%3e%3c/path%3e%3cpath d='M729.35 341.62 a29.8 29.8 0 1 0 59.6 0 a29.8 29.8 0 1 0 -59.6 0z' stroke='%23037b0b'%3e%3c/path%3e%3cpath d='M1269.83 110.86 a37.95 37.95 0 1 0 75.9 0 a37.95 37.95 0 1 0 -75.9 0z' stroke='%23e73635'%3e%3c/path%3e%3cpath d='M617.19 84.05 a15.41 15.41 0 1 0 30.82 0 a15.41 15.41 0 1 0 -30.82 0z' stroke='%23037b0b'%3e%3c/path%3e%3cpath d='M570.67 456.12 a39.85 39.85 0 1 0 79.7 0 a39.85 39.85 0 1 0 -79.7 0z' fill='%23037b0b'%3e%3c/path%3e%3cpath d='M604.01 533.08L621.54 533.08L621.54 550.61L604.01 550.61z' fill='%23d3b714'%3e%3c/path%3e%3cpath d='M919.53 307.62 a20.36 20.36 0 1 0 40.72 0 a20.36 20.36 0 1 0 -40.72 0z' fill='%23d3b714'%3e%3c/path%3e%3cpath d='M806.06 304.17L809.41 304.17L809.41 325.83L806.06 325.83z' fill='%23e73635'%3e%3c/path%3e%3cpath d='M1125.69 435.57L1161.94 435.57L1161.94 487.41L1125.69 487.41z' fill='%23d3b714'%3e%3c/path%3e%3cpath d='M1108.91 402.01L1115.98 402.01L1115.98 455.72L1108.91 455.72z' fill='%23d3b714'%3e%3c/path%3e%3cpath d='M687 501.05L689.4 501.05L689.4 549.87L687 549.87z' fill='%23e73635'%3e%3c/path%3e%3cpath d='M343.79 204.78L359.64 204.78L359.64 222.06L343.79 222.06z' fill='%23037b0b'%3e%3c/path%3e%3cpath d='M1006.68 284.97L1024.7 284.97L1024.7 302.99L1006.68 302.99z' stroke='%23037b0b'%3e%3c/path%3e%3cpath d='M1337.9 511.87L1364.78 511.87L1364.78 538.75L1337.9 538.75z' fill='%23e73635'%3e%3c/path%3e%3cpath d='M480.31 480.86 a55.79 55.79 0 1 0 111.58 0 a55.79 55.79 0 1 0 -111.58 0z' fill='%23d3b714'%3e%3c/path%3e%3cpath d='M892.98 249.37a13.08 13.08 0 1 0-18.39 18.61z' fill='%23e73635'%3e%3c/path%3e%3cpath d='M508.43 102.16 a13.08 13.08 0 1 0 26.16 0 a13.08 13.08 0 1 0 -26.16 0z' fill='%23d3b714'%3e%3c/path%3e%3cpath d='M1246.92 19.8L1290.67 19.8L1290.67 63.55L1246.92 63.55z' fill='%23d3b714'%3e%3c/path%3e%3cpath d='M1161.85 524.86a17.66 17.66 0 1 0-25.64 24.29z' stroke='%23037b0b'%3e%3c/path%3e%3cpath d='M1398.89 312.84L1451.26 312.84L1451.26 365.21L1398.89 365.21z' stroke='%23d3b714'%3e%3c/path%3e%3cpath d='M287.75 481.17L338.58 481.17L338.58 532L287.75 532z' stroke='%23e73635'%3e%3c/path%3e%3cpath d='M134.9 425.62a2.01 2.01 0 1 0-2.95 2.73z' fill='%23037b0b'%3e%3c/path%3e%3cpath d='M1445.23 307.24a19.17 19.17 0 1 0-29.84 24.07z' fill='%23d3b714'%3e%3c/path%3e%3cpath d='M747.8 442.54a4.54 4.54 0 1 0-8.1 4.1z' fill='%23d3b714'%3e%3c/path%3e%3cpath d='M259.56 124.44 a53.82 53.82 0 1 0 107.64 0 a53.82 53.82 0 1 0 -107.64 0z' fill='%23037b0b'%3e%3c/path%3e%3cpath d='M1034.42 300.47a31.8 31.8 0 1 0-41.24 48.42z' stroke='%23037b0b'%3e%3c/path%3e%3c/g%3e%3cdefs%3e%3cmask id='SvgjsMask1000'%3e%3crect width='1440' height='560' fill='white'%3e%3c/rect%3e%3c/mask%3e%3c/defs%3e%3c/svg%3e");
}





     </style>

</head>
<body>
     <font face="Adobe Gothic Std"font size="3"font color="red" >
          <marquee ><h1 class="c">-Hindustan Institute of Information Technology-</h1></marquee></b></font>
     <div class="login-container mt-2">
          <form action="{{ route('login.action') }}" method="POST" class="login-form">
            @csrf
            <p class="heading">Login</p>
            <p class="paragraph">Welcome To Wits Login Pannel</p>
            
            @if ($errors->any())
            <div role="alert" class="alert alert-warning">
              <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current h-6 w-6" fill="none" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
              </svg>
              <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
              </ul>
            </div>
            @endif
        
            <div class="input-group">
              <input name="email" type="email" id="email" placeholder="Email Address" required="" class="form-control" />
            </div>
            <div class="input-group">
              <input name="password" type="password" id="password" placeholder="Enter Password" required="" class="form-control" />
            </div>
            <button type="submit">Login</button>
            <div class="form-check">
              <input name="remember" type="checkbox" checked="checked" id="customCheck" class="form-check-input" />
              <label class="form-check-label" for="customCheck">Remember me</label>
            </div>
            <div class="bottom-text">
              <p>Don't have an account? <a href="{{ route('register') }}">Sign Up</a></p>
              <p><a href="{{ asset('forgot-password') }}">Forgot password?</a></p>
            </div>
          </form>
        </div>
        <marquee class="text-white">	<nav id="idd">
          <center> <i class="fa-sharp fa-solid fa-square-phone-flip"></i><label id="lb">+91-8084776565</label>
           
          <b><i class="fa-sharp fa-solid fa-envelope"></i><label id="lb">Wits123@Gmail.com</b></label></center>
             </nav></marquee>
      
    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
