<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
        <style type="text/css">
             a{
                text-decoration: none;
            }
            *{
                margin: 0;
                padding: 0;
                font-family: sans-serif;
            }
            body{
                font: 18px comic;
                background:#333 url(images/sub.jpg);
                background-size:cover;
                background-position:center;
                background-repeat:no-repeat;
            }
            .form{
                width: 380px;
                height: 470px;
                border-radius:10px;
                position: relative;
                margin: 6% auto;
                background:rgba(125,125,125,0.3);
                background: absolute;
                -webkit-backdrop-filter:blur(20px);
                backdrop-filter:blur(20px);
                padding: 5px;
                overflow:hidden;
            }
            .input-container {
                display: flex;
                width: 100%;
                margin-bottom: 15px;
                margin-left: 45px;
            }
            .input-grp{
                top: 150px;
                position: absolute;
                width: 280px;
                transition: .5s;
            }
            .input-field{
                width: 100%;
                padding: 10px;
                padding-left: 80px;
                outline:none;
            }
            .submit-btn{
                width: 55%;
                padding: 10px 30px;
                cursor: pointer;
                display: block;
                margin: auto;
                margin-left: 120px; 
                background: linear-gradient(to right,#800080,#ed105f);
                border: 0;
                outline: none;
                border-radius: 30px;
                color: snow;
            }
            #lab1{
                left:130px;
                position:relative;
                color: black;
            }
            #lab2{
                left:100px;
                position:relative;
                color: black;
            }
            #inp2{
                top:-50px;
                left:80px;
                position:relative;
                color: snow;
            }

        </style>
        <div class="form">
        <form action="packageUpdate.php" class="input-grp" method="POST">
            <p id="inp2"><strong>Update Package amount</strong></p>
            <label id="lab1">Package name</label>
            <div class="input-container">
            <input type="text" placeholder="Enter Package" class="input-field" name="pack" required>
            </div>
            <label id="lab2">Update Amount to</label>
            <div class="input-container">
            <input type="text" class="input-field" placeholder="Enter amount" name="amt" required>
            </div>
            <button name="logged" type="submit" class="submit-btn">Update</button>
        </form>
        </div>
        </head>
</html>
           