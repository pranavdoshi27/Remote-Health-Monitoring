<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- FOnt awesome linl -->
  <script src="https://kit.fontawesome.com/f3b65716a0.js" crossorigin="anonymous"></script>
  <!-- Bootstrap CSS -->

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <link rel="stylesheet" href="style_dashboard.css">
</head>

<title>HMS - Dashboard</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-inverse bg-primary">
    <div class="container-fluid " style="padding:2%;">

      <a class="navbar-brand text-white " href="dashboard.php">
        <h2>Health Monitoring System</h2>
      </a>
      <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation"> -->
      <!-- <span class="navbar-toggler-icon"></span> -->
      </button>
      <div class="" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
          <!-- <a class="nav-link" href="#">Features</a> -->

        </div>
      </div>

      <h6>
        <button type="button" class="btn btn-dark btn-md" href="index.php">Logout</button>
      </h6>
    </div>
  </nav>
  
    </div>  
    
    <form class="my-form" action="addInSensorDate.php" method="post">
                <div class="form-group row">
                  <label for="full_name" class="col-md-4 col-form-label text-md-right">Patient's Full Name</label>
                  <div class="col-md-6">
                    <input type="text" id="name" class="form-control" placeholder="Full-name" name="fullname">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="date" class="col-md-4 col-form-label text-md-right">Date</label>
                  <div class="col-md-6">
                    <input type="text" class="form-control" id="date" placeholder="date" name="date">
                  </div>
                </div>
                <span> </span>
                <div class="form-group row">
                  <label for="inputTime" class="col-md-4 col-form-label text-md-right">Time</label>
                  <div class="col-md-6">
                    <input type="text" class="form-control" id="inputTime" placeholder="time" name="time">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="inputTemp" class="col-md-4 col-form-label text-md-right">Temperature</label>
                  <div class="col-md-6">
                    <input type="text" class="form-control" id="inputTemp" placeholder="temp" name="temp">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="inputPR" class="col-md-4 col-form-label text-md-right">Pulse Rate</label>
                  <div class="col-md-6">
                    <input type="text" class="form-control" id="inputPR" placeholder="pulserate" name="pulserate">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="inputLEvel" class="col-md-4 col-form-label text-md-right">Oxygen Level</label>
                  <div class="col-md-6">
                    <input type="text" class="form-control" id="inputLevel" placeholder="oxygen" name="oxygen">
                  </div>
                </div>
                  <div class="col-md-6 col-sm">
                    <button type="submit" class="btn btn-large btn-primary ">Add</button>

                  </div>

                </div>

    </form>





 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


</body>
