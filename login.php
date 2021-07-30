<html>
<head>
<title>Login and Signup</title>
<link rel="stylesheet" href="style.css">
</head>
<style>
.login-page{
    height: 100%;
    width: 100%;
    background-image: url(images/2.jpeg);
    background-size: cover;
    background-position: center;
    position: absolute;
}

a{
    color:black;
    background-color:transparent;
    text-decoration: none;
}    
</style>
<body>
 <div class="login-page">
     <h1><br></h1>
     <h2>
     <center>INTREPID TOURISTS!</center>
     </h2>
     <h3 style="color:LightSeaGreen "><center>To travel is to live</center></h3>
     <div class="form">
         <div class="button-box">
            <div id="btn"></div>
            <button type="button" class="toggle-btn" onclick="login()"><strong>Log in</strong></button>
            <button type="button" class="toggle-btn" onclick="register()"><strong>Sign up</strong></button>
         </div>
        <form action="validation.php" id="login"  class="input-grp" method="POST">
            <p id="inp2">Already have an account? Log in here</p>
            <label id="lab2">Username</label>
            <div class="input-container">
            <input type="text" placeholder="Username" class="input-field" name="user1" required>
            </div>
            <label id="lab2">Password</label>
            <div class="input-container">
            <input type="password" class="input-field" placeholder="Enter password" name="pas" required>
            </div>
            <button name="logged" type="submit" class="submit-btn">Log in</button>
        </form>
        <form action="connection.php" id="register" class="input-grp" method="POST">
            <p id="inp1">Fill this up to create an account</p>
            <label id="lab">Username</label>
            <div class="input-container">
            <input type="text" placeholder="Username" class="input-field" id="sp" name="user_name" required>
            </div>
            <label id="lab">Password</label>
            <div class="input-container">
            <input type="password" class="input-field" placeholder="Enter password" name="pas_word" id="sp" required>
            </div>
            <label id="lab1">Confirm password</label>
            <div class="input-container">
            <input pattern=".{8,}" required title="8 characters minimum" type="password" class="input-field" placeholder="Confirm password" name="con_pass" id="sp" required>
            </div>
            <button type="submit" class="submit-btn" id="rb">Register</button>
        </form>
     </div>
 </div>
<script>
    var x=document.getElementById("login");
    var y=document.getElementById("register");
    var z=document.getElementById("btn");
    
    function register(){
        x.style.left= "-400px";
        y.style.left= "50px";
        z.style.left= "110px";
    }
    function login(){
        x.style.left= "50px";
        y.style.left= "450px";
        z.style.left= "0px";
    }
    
</script>    
</body>
</html>