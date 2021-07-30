<html>
<head>
<title></title>
<link href="https://fonts.googleapis.com/css2?family=Comic+Neue:wght@700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <form method="post" action="dispinfo.php" >
        <h1 style="font-family: 'Comic Neue', bold;" >
            <center>INTREPID TOURISTS!</center>
        </h1>
            <button type="submit" class="btn-lg btn-info" name="Goa" id="goa">GOA</button>
            <button type="submit" class="btn-lg btn-info" name="Karnataka" id="karnataka">KARNATAKA</button>
            <button type="submit" class="btn-lg btn-info" name="Kerala" id="kerala">KERALA</button>
            <button type="submit" class="btn-lg btn-info" name="Himachal-Pradesh" id="himachal-pradesh">HIMACHAL</button>
        </form>
    </div>
    <style>
    *{
        margin: 0;
        padding: 0;
        font-family: Century Gothic;
    }
    body{
        background-image:url(images/pacback.jpg);
        height: 100vh;
        background-size: cover;
        background-position: center;
        color:white;
    }
    .container{
        padding-left:70px;
        }
    .btn-lg{
        margin-left:50px;
        margin-right:10px;
        margin-top:150px;
        margin-bottom:20px;
        height:2cm;
        font-size:25;
        width:5cm;
        font-family: 'Comic Neue', cursive;
    }

</style>
</body>
</html>