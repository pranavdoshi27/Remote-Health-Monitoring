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

  <nav class="navbar">

    <ul class="nav nav-pills m-2 p-1" id="myTab" role="tablist" >
      <li class="nav-item" role="presentation" >
        <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Add Patient</button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Delete Patient</button>
      </li>
      <li class="nav-item" role="presentation" >
        <button class="nav-link" id="view-tab" data-bs-toggle="tab" data-bs-target="#view" type="button" role="tab" aria-controls="view" aria-selected="true">View Patient</button>
      </li>

    </ul>
  </nav>
  <div class="tab-content m-2 p-1" id="myTabContent">
    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-8">
            <div class="card">
              <div class="card-header bg-light">
                <h4>Enter Patient Data</h4>
              </div>
              <form class="my-form" action="add.php" method="post">
                <div class="form-group row">
                  <label for="full_name" class="col-md-4 col-form-label text-md-right">Patient's Full Name</label>
                  <div class="col-md-6">
                    <input type="text" id="name" class="form-control" placeholder="Full-name" name="fullname">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="Age" class="col-md-4 col-form-label text-md-right">Age</label>
                  <div class="col-md-6">
                    <input type="text" class="form-control" id="Age" placeholder="Age" name="age">
                  </div>
                </div>
                <span> </span>
                <label class="col-md-3 col-form-label text-md-right temp">Gender</label>
                <div class="form-check form-check-inline radio-temp">
                  <input class="form-check-input" type="radio" id="inlineRadio1" name="gender" value="M"/>
                  <label class="form-check-label" for="inlineRadio1">Male</label>
                </div>

                <div class="form-check form-check-inline radio-temp">
                  <input class="form-check-input" type="radio" id="inlineRadio2" name="gender" value="F"/>
                  <label class="form-check-label" for="inlineRadio2">Female</label>
                </div>
                <div class="form-group row">
                  <label for="inputEmail" class="col-md-4 col-form-label text-md-right">Email</label>
                  <div class="col-md-6">
                    <input type="email" class="form-control" id="inputEmail" placeholder="Email" name="email">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="inputAddress" class="col-md-4 col-form-label text-md-right">Address</label>
                  <div class="col-md-6">
                    <input type="text" class="form-control" id="inputAddress" placeholder="Address" name="address">
                  </div>
                </div>

                <div class="form-group row">
                  <label for="inputPhone" class="col-md-4 col-form-label text-md-right">Contact</label>
                  <div class="col-md-6">
                    <input type="text" class="form-control" id="inputPhone" placeholder="Contact Number" name="number">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="inputDate" class="col-md-4 col-form-label text-md-right">DOB<br>(Enter Date in YYYY-MM-DD Format ONLY)</label>
                  <div class="col-md-6">
                    <input type="text" class="form-control" id="inputDate" placeholder="Date" name="date">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="inputBlood" class="col-md-4 col-form-label text-md-right">Blood Type</label>
                  <div class="col-md-6">
                    <input type="text" class="form-control" id="inputBlood" placeholder="Blood-Type" name="bloodtype">
                  </div>
                </div> 
                <div class="form-group row">

                  <div class="col-md-6 col-sm">
                    <button type="submit" class="btn btn-large btn-primary ">Add</button>

                  </div>

                </div>

              </form>
            </div>
          </div>
          <form class="my-form" action="addmanually.php" method="post">
          <div class="row">
          <div class = "col-md-3"></div>
              <div class="col-md-6 col-sm center">
                    <button type="submit" class="btn btn-large btn-primary ">Add Data Manually for a Patient</button>

                  </div>
                  <div class = "col-md-3"></div>
                  </div>
              </form>
        </div>
      </div>
    </div>



    <div class="tab-pane fane" id="profile" role="tabpanel" aria-labelledby="profile-tab">
      <div class="search-box">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Search Patient Name">
          <div class="input-group-append">
            <button class="btn btn-primary" type="button">
              <i class="fa fa-search"></i>
            </button>
          </div>
        </div>
      </div>
      <h5>Your Patients...</h5>
      <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">Name</th>
            <th scope="col">Age</th>
            <th scope="col">Gender</th>
            <th scope="col"></th>
          </tr>
        </thead>
        <?php
        include("database/db_conection.php");
        $view_users_query="select * from patient";//select query for viewing users.
        $run=mysqli_query($dbcon,$view_users_query);//here run the sql query.

        while($row=mysqli_fetch_array($run))//while look to fetch the result and store in a array $row.
        {
            $patient_full_name=$row[1];
            $age=$row[2];
            $gender=$row[3];
        ?>
                <tr>
            <!--here showing results in the table -->
            <td><?php echo $patient_full_name;  ?></td>
            <td><?php echo $age;  ?></td>
            <td><?php echo $gender;  ?></td>
            <td><a href="delete.php?del=<?php echo $patient_full_name ?>"><button class="btn btn-danger">Delete</button></a></td> <!--btn btn-danger is a bootstrap button to show danger-->
        </tr>

        <?php } ?>
        <!-- <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Raj K.</td>
            <td>53</td>
            <td>M</td>
            <td><button type="button" class="btn btn-danger" href="#">Delete</button></td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Jonny T.</td>
            <td>40</td>
            <td>M</td>
            <td><button type="button" class="btn btn-danger" href="#">Delete</button></td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>Kiran M.</td>
            <td>35</td>
            <td>F</td>
            <td><button type="button" class="btn btn-danger" href="#">Delete</button></td>
          </tr>
        </tbody> -->
      </table>
    </div>
    <div class="tab-pane fade" id="view" role="tabpanel" aria-labelledby="view-tab">
      <div class="search-box">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Search Patient Name">
          <div class="input-group-append">
            <button class="btn btn-primary" type="button">
              <i class="fa fa-search"></i>
            </button>
          </div>
        </div>
      </div>
      <h5>Your Patients...</h5>
      <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">Name</th>
            <th scope="col">Age</th>
            <th scope="col">Gender</th>
            <th scope="col"></th>
          </tr>
        </thead>
        <?php
        include("database/db_conection.php");
        $view_users_query="select * from patient";//select query for viewing users.
        $run=mysqli_query($dbcon,$view_users_query);//here run the sql query.

        while($row=mysqli_fetch_array($run))//while look to fetch the result and store in a array $row.
        {
            $patient_full_name=$row[1];
            $age=$row[2];
            $gender=$row[3];
        ?>
                <tr>
            <!--here showing results in the table -->
            <td><?php echo $patient_full_name;  ?></td>
            <td><?php echo $age;  ?></td>
            <td><?php echo $gender;  ?></td>
            <td><a href="data.php?pfn=<?php echo $patient_full_name ?>"><button class="btn btn-success">View</button></a></td> <!--btn btn-danger is a bootstrap button to show danger-->
        </tr>

        <?php } ?>
        <!-- <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Raj K.</td>
            <td>53</td>
            <td>M</td>
            <td><a type="button" class="btn btn-success" href="data.html">View</a></td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Jonny T.</td>
            <td>40</td>
            <td>M</td>
            <td><button type="button" class="btn btn-success" href="#">View</button></td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>Kiran M.</td>
            <td>35</td>
            <td>F</td>
            <td><button type="button" class="btn btn-success" href="#">View</button></td>
          </tr>


        </tbody> -->
      </table>
    </div>
  </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</body>

</html>
