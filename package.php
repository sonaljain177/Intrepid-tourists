<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <style>
    .card{
        display: grid;
        font-family: roboto;
        border-radius: 18px;
        background: white;
        box-shadow: 5px 5px 15px rgba(0,0,0,0.9);
        text-align: center;
        transition: 0.5s ease;
        cursor: pointer;
    }
    .card:hover{
        transform: scale(1.2);
        box-shadow:5px 5px 15px rgba(0,0,0,0.6);
    }
</style>
<body style="background-color:#F5FFFA">
<?php
$servername='localhost';
$username='root';
$password='';
$dbname='tourism';

$con=mysqli_connect($servername,$username,$password,$dbname);
$packid = $_GET['packid'];
$sql ="select * from package where pack_id = $packid";
$result = mysqli_query($con,$sql);
?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<?php
if(mysqli_num_rows($result)>0){
    while($row=mysqli_fetch_assoc($result)){?>
        <form action="form.php?pack_id=<?php echo $row['pack_id'];?>" method="post">
            <h1 class="text-center" style="font-family: verdana"><strong><?php echo $row['pack_name'];?></strong></h1>
        <div style="background-image: url('<?php echo $row['pack_img']?>');background-size:cover;display:block;margin-left:auto;margin-right:auto;padding:15%;width:60%;height:20%">
        </div>
        <br>
            <div class="container">
                
                    
            </div>
        <br>

            <div class="row">
                <div class="col-lg-8 text-align">
                    <p class="col-lg-3"> <p  style="font-size: 25px;padding-left:16%;font-family: Comic Sans MS, Comic Sans, cursive;color:#00868B"><i class="fa fa-calendar text-info" aria-hidden="true" ></i>Duration</p><h5 style="font-size: 25px;padding-left:16%;font-family: Comic Sans MS, Comic Sans, cursive"><?php echo $row['duration']?></h5>
                    <p class="col-lg-3"><p  style="font-size: 25px;padding-left:16%;font-family: Comic Sans MS, Comic Sans, cursive;color:#00868B"><i class="fa fa-cutlery text-info" aria-hidden="true" ></i>Meals</p><h5 style="font-size: 25px;padding-left:16%;font-family: Comic Sans MS, Comic Sans, cursive">  Meals provided during the tour</h5>
                    <p class="col-lg-3"> <p  style="font-size: 25px;font-family: Comic Sans MS, Comic Sans, cursive;color:#00868B;padding-left:16%"> <i class="fa fa-home text-info" aria-hidden="true" ></i>Accomodation</p><h5 style="font-size: 25px;padding-left:16%;font-family: Comic Sans MS, Comic Sans, cursive"> Hotel/resort stay as per place visited</h5><br>
                    <p style="font-size: 25px;padding-left:16%;font-family: Comic Sans MS, Comic Sans, cursive;color:#00868B"><i class="fa fa-map-marker text-info" aria-hidden="true" ></i> Places to visit</p><h5 style="font-size: 25px;font-family: Comic Sans MS, Comic Sans, cursive;padding-left:16%"><?php echo $row['pack_plc']?></h5>
                </div>
                <div class="col-lg-4">
                    <div class="card" style="width: 18rem;">
                    <img src="images/reg.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 style="font-family: Comic Sans MS, Comic Sans, cursive">Total price per person(including all charges)</h5>
                            <p style="font-family: Comic Sans MS, Comic Sans, cursive" class="card-text font-family: Comic Sans MS, Comic Sans, cursive"><?php echo $row['pack_amt'];echo "/-";?><br></p>
                            <a style="font-family: Comic Sans MS, Comic Sans, cursive" href="form.php?pack_id=<?php echo $row['pack_id'] ?>" class="btn btn-info font-family: Comic Sans MS, Comic Sans, cursive">Register Now</a>
                        </div>
                    </div>

                </div>
            </div>
</form>
        <?php
      }
    }?>
</body>
</html>