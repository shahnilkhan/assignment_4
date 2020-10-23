<?php 
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "movies_database";
$conn = mysqli_connect($servername, $username, $password, $dbname);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Assignment No </title>
    <style>
.checked {
  color: orange;
}
</style>
</head>
<body style="background-color: blue;">

<div style="margin-top: 5%;" class="container">
    <div class="row">
    <?php 

    $sql = "SELECT * FROM movies";
    $result = $conn->query($sql);
    while ($row = $result->fetch_assoc()) {  ?>
        <div style="margin-top: 10px;" class="col-md-4">
          <div class="card">
            <img class="card-img-top" src="images/<?php echo $row["movie_image"] ?>.jpg" alt="Card image" style="width:100%">
            <div class="card-body">
              <h4 class="card-title"><?php echo $row["movie_tittle"] ?></h4>
                <div class="row">
                    <div class="col-md-7">
                        <h5>Movie Date</h5>
                    </div>
                    <div class="col-md-5">
                        <p ><?php echo $row["movie_date"] ?></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-7">
                        <h5>Release Date</h5>
                    </div>
                    <div class="col-md-5">
                        <p ><?php echo $row["release_date"] ?></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-7">
                        <h5>Ratting</h5>
                    </div>
                    <div class="col-md-5">
                        <?php if($row["movie_ratting"] == 1){ ?>
                            <span class="fa fa-star checked"></span>
                        <?php }elseif($row["movie_ratting"] == 2) { ?>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <?php }elseif($row["movie_ratting"] == 3){ ?>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <?php }elseif($row["movie_ratting"] == 4) {?>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                    <?php }else{?>
                         <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                     <?php } ?>
                    </div>
                </div>
            </div>
          </div>
        </div>
    <?php  } ?>
    </div>
</div>




<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>