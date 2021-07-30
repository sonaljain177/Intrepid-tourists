<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<?php
    $pack_id = $_GET['pack_id'];
    $servername="localhost";
    $username="root";
    $password="";
    $dbname="tourism";

    $conn = new mysqli($servername, $username, $password, $dbname) or die ('Cannot connect to db');
            $result = $conn->query("select pack_name from package where pack_id='$pack_id'");
?>
<!DOCTYPE html>
<html>

<head>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body {

            background:#333 url("images/back.jpg") ;
            height: 100%;
            background-size:cover;
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
            overflow: hidden;
        }
        .box {
            left:50%;
            top:30%;
            background-color: rgba(255, 255, 255, 0.3);
            border-radius: 5px;
            font-family: sans-serif;
            text-align: center;
            line-height: 1;
            -webkit-backdrop-filter: blur(20px);
            backdrop-filter: blur(20px);
            max-width: 50%;
            max-height: 50%;
            padding: 20px 40px;
        }
        .container {
            position:absolute;
            display: flex;
            justify-content: center;
            left:10%;
            height: 170%;
            width: 100%;
            padding-top:5%;
        }
    </style>
</head>
</html>


<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ 
            font: 14px sans-serif;
        }
        .wrapper{ 
            width: 350px; 
            padding: 20px; 
            background-color: white;
            width: 400px;
            height: 400px;
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%); }
    </style>
</head>
<body>

<div class="container">
    <div class="box">
        <h1 align="center" >Registration Form</h1>
        <p align="center" style="color:white">Please fill this form to register for your favorite package.</p>

        <script>
            function validateform()
            {
                var name = document.forms["RegForm"]["Name"];
                var email = document.forms["RegForm"]["EMail"];
                var phone = document.forms["RegForm"]["Telephone"];
                var age = document.forms["RegForm"]["age"];
                var bdate=document.forms["RegForm"]["from-date"];
                var ppl=document.forms["RegForm"]["ppl"];
                if (name.value == "")
                {
                    alert("Please enter your name.");
                    name.focus();
                    //location.href="submitted.php";
                    return false;
                }


                else if (email.value == "")
                {
                    alert("Please enter a valid e-mail address.");
                    email.focus();
                    //location.href="submitted.php";
                    return false;
                }

                else if (phone.value == "")
                {
                    alert("Please enter your phone number.");
                    phone.focus();
                    //location.href="";
                    return false;
                }
                else if(age.value=="")
                {
                    alert("Please enter your age.");
                    age.focus();
                    return false;
                }
                else if(bdate.value=="")
                {
                    alert("Please enter your booking date.");
                    bdate.focus();
                    return false;
                }

                else if(phone.value.length < 10 ||phone.value.length >10){
                    alert("Please enter valid phone number.");
                    phone.focus();
                    //location.href="#";
                    return false;
                }
                else if (ppl.value == "")
                {
                    alert("Please enter number of people going on the trip.");
                    ppl.focus();
                    return false;
                }
                else {
                    location.href="submitted.php";
                }
            }</script>

        <form name="RegForm" action="submitted.php?pack_id=<?php echo $pack_id?>" onsubmit="return validateform()" method="post">
            <div>
                <label>Name</label>

                <input type="text" placeholder="Fill in the same name as your username" name="Name" id="name" class="form-control">
                <span class="help-block"></span>

            </div>
            <div >
                <label>Phone Number</label>
                <input type="number" name="Telephone" placeholder="Phone Number" id="phone" class="form-control">
                <span class="help-block"></span>
            </div>
            <div>
                <label>Email</label>
                <input type="text" name="EMail" placeholder="mail" id="email" class="form-control" pattern=".+@gmail.com" size="30" required title="should end with @gmail.com">
                <span class="help-block"></span>
            </div>
            <div>
                <label>Age</label>
                <input type="text" name="age" placeholder="age" id="age" class="form-control"  >
                <span class="help-block"></span>
            </div>
            <div>
                <label>Number of people</label>
                <input type="text" name="ppl" placeholder="number of people" id="ppl" class="form-control"  >
                <span class="help-block"></span>
            </div>
            <div>
                <label>Package name</label><br>
                <select type="text" class="form-control">
                
                    <?php
                            $row = $result->fetch_assoc();
                            unset($username);
                            $username = $row['pack_name'];
                            echo '<option value=" '.$username.'"  >'.$username.'</option>';
                            
                    ?>
            
                </select>
                <span class="help-block"></span>
            </div>
            <div>
                <label>Your Booking Date</label>
                <input type="date" min="2021-01-01" class="form-control" name="from-date"><br>
            </div>
            <div class="form-group">
                <button class="btn btn-primary">Submit</button>
                <input type="reset" class="btn btn-primary" value="Reset" name="Reset">
            </div>
        </form>

</body>
</html>