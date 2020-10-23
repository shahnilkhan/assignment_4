<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Assignment No </title>
</head>
<body style="background-color: blue;">

<div style="margin-top: 8%;" class="container">
  <div class="row">
    <div class="col-md-3"></div>
        <div style="margin-top: 10px;" class="col-md-6">
          <div class="card">
            <div class="card-header">
                  <h3>Add New Movie</h3>
              </div>
            <div class="card-body">
              <form action="addmoviescrpt.php" enctype="multipart/form-data" method="POSt">
              <div class="form-group">
                  <label>Enter Tittle</label>
                  <input type="text" required="" class="form-control" name="tittle">
              </div>
              <div class="form-group">
                  <label>Enter Release Date</label>
                  <input type="date" required="" class="form-control" name="releasedate">
              </div>
              <div class="form-group">
                  <label>Enter Movie Ratting</label>
                  <select required="" class="form-control" name="movieratting">
                      <option value="">Select Movie Ratting</option>
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                  </select>
              </div>
              <div class="form-group">
                  <label>Enter Movie Date</label>
                  <input required="" type="date" class="form-control" name="moviedate">
              </div>
              <div class="form-group">
                  <label>Add Movie Banner</label>
                  <input required="" style="height: 45px;" type="file" class="form-control" name="imageUpload">
              </div>
              <div class="form-group">
                  <input type="submit" value="Add New Movie" class="btn btn-primary">
              </div>
              </form>              
            </div>
          </div>
        </div>

        </div>
</div>




<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>