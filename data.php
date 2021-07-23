<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>HMS - Profile</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-inverse bg-primary">
      <div class="container-fluid">
        <a class="navbar-brand text-white" href="dashboard.html">Health Monitoring System</a>
        <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation"> -->
          <!-- <span class="navbar-toggler-icon"></span> -->
        </button>
        <div class="" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <!-- <a class="nav-link" href="#">Features</a> -->
            
          </div>
        </div>
        
        <h6><a class="nav-link bg-light" href="index.html" style="text-decoration: underline">
          Logout</a>
        </h6>
      </div>
    </nav>




    <div class="container">
      <ul class="nav nav-pills mb-3 m-3" id="pills-tab" role="tablist">
        <li class="nav-item" role="presentation">
          <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Patient Profile</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Sensor Data</button>
        </li>
        <!-- <li class="nav-item" role="presentation">
          <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Contact</button>
        </li> -->
      </ul>
      <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade ml-3 show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
          <table class="table m-3">
            <thead>
              <tr>
                <th scope="col">Name</th>
                <th scope="col">Age</th>
                <th scope="col">Gender</th>
                <th scope="col">Address</th>
                <th scope="col">Phone</th>
                <th scope="col">Blood Group</th>
              </tr>
            </thead>
            <tbody>
              <!-- <tr>
                <th scope="row">Raj K.</th>
                <td>53</td>
                <td>M</td>
                <td>1234 Main Street</td>
                <td>6585112354</td>
                <td>B+ve</td>
              </tr> -->
              <?php
              include("database/db_conection.php");
              $patient_fullname=$_GET['pfn'];
              $view_users_query="select * from patient WHERE patient_full_name='$patient_fullname'";
              $run=mysqli_query($dbcon,$view_users_query);//here run the sql query.

              while($row=mysqli_fetch_array($run))//while look to fetch the result and store in a array $row.
              {
                  $patient_id = $row[0];
                  $patient_full_name=$row[1];
                  $age=$row[2];
                  $gender=$row[3];
                  $address=$row[5];
                  $number=$row[6];
                  $bloodgroup=$row[8];
              ?>
                      <tr>
                  <!--here showing results in the table -->
                  <td><?php echo $patient_full_name;  ?></td>
                  <td><?php echo $age;  ?></td>
                  <td><?php echo $gender;  ?></td>
                  <td><?php echo $address;  ?></td>
                  <td><?php echo $number;  ?></td>
                  <td><?php echo $bloodgroup;  ?></td>
              </tr>
      
              <?php } ?>
            </tbody>
          </table>
        </div>
        <div class="tab-pane fade ml-3" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
          <table class="table m-3">
            <thead>
              <tr>
                <th scope="col">Date</th>
                <th scope="col">Time</th>
                <th scope="col">Temperature</th>
                <th scope="col">Pulse Rate</th>
                <th scope="col">Oxygen L.</th>
              </tr>
            </thead>
            <tbody>
              <!-- <tr>
                <th scope="row">2021-01-23</th>
                <td>15:30:35</td>
                <td>37</td>
                <td>95</td>
                <td>92</td>
              </tr> -->
              
              
              <?php
        include("database/db_conection.php");
        $view_users_query="select * from patient_details WHERE patient_id = '$patient_id'";//select query for viewing users.
        $run=mysqli_query($dbcon,$view_users_query);//here run the sql query.
       
        while($row=mysqli_fetch_array($run))//while look to fetch the result and store in a array $row.
        {
            $date=$row[6];
            $time=$row[5];
            $temp=$row[2];
            $pulse_Rate=$row[3];
            $oxygen_level=$row[4];
            
            $oxy = array();
            array_push($oxy, $oxygen_level);
            $row_num = count($row);

        ?>
        <script type="text/javascript">
        var oxy_num = "<?= $oxy_num ?>";
        var oxy = new Array();
        for (i = 0; i < oxy_num; i++){
          var fre = "<?= $oxy[i] ?>";
          oxy.push(fre);
        }
        </script>
        
                <tr>
            <!--here showing results in the table -->
            <td><?php echo $date;  ?></td>
            <td><?php echo $time;  ?></td>
            <td><?php echo $temp;  ?></td>
            <td><?php echo $pulse_Rate;  ?></td>
            <td><?php echo $oxygen_level;  ?></td>
            
        </tr>
        
        <?php } ?>
        
            </tbody>
          </table>


          <?php
 
          $dataPoints = array(
            array("y" => 92, "label" => "15:03:35"),
            array("y" => 93, "label" => "15:03:40"),
            array("y" => 94, "label" => "15:03:50"),
            array("y" => 92, "label" => "15:04:00"),
            array("y" => 93, "label" => "15:04:10"),
          
          );

          $pulserate = array(
            array("y" => 95, "label" => "15:03:35"),
            array("y" => 96, "label" => "15:03:40"),
            array("y" => 96, "label" => "15:03:50"),
            array("y" => 95, "label" => "15:04:00"),
            array("y" => 94, "label" => "15:04:10"),
            array("y" => 95, "label" => "15:04:20"),
          
          );

          $temp = array(
            array("y" => 37, "label" => "15:03:35"),
            array("y" => 37, "label" => "15:03:40"),
            array("y" => 37, "label" => "15:03:50"),
            array("y" => 37, "label" => "15:04:00"),
            array("y" => 37, "label" => "15:04:10"),
            array("y" => 37, "label" => "15:04:20"),
          
          );
            
            
          ?>
          <!DOCTYPE HTML>
          <script>
          window.onload = function () {
            
          var chart = new CanvasJS.Chart("chartContainer", {
            animationEnabled: true,
            title: {
              text: "Oxygen Level"
            },
            axisY: {
              title: "Oxygen Level"
            },
            data: [{
              type: "spline",
              dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
            }]
          });
          chart.render();

          var chart1 = new CanvasJS.Chart("chartContainer1", {
          animationEnabled: true,
          title: {
            text: "Pulse Rate"
          },
          axisY: {
            title: "Pulse Rate"
          },
          data: [{
            type: "spline",
            dataPoints: <?php echo json_encode($pulserate, JSON_NUMERIC_CHECK); ?>
          }]
        });
        chart1.render();

        var chart2 = new CanvasJS.Chart("chartContainer2", {
        animationEnabled: true,
        title: {
          text: "Temperature"
        },
        axisY: {
          title: "Temperature"
        },
        data: [{
          type: "spline",
          dataPoints: <?php echo json_encode($temp, JSON_NUMERIC_CHECK); ?>
        }]
      });
      chart2.render();
            
          }
 </script>
 <div id="chartContainer" style="height: 300px; border: 1px"></div>
 <div id="chartContainer1" style="height: 300px; border: 1px"></div>
 <div id="chartContainer2" style="height: 300px; border: 1px"></div>

 <script>
    var name = "<?= $patient_full_name ?>";
    var c_name = "Raj Kamble"
    if(name.localeCompare(c_name)){
      document.getElementById('chartContainer').style.display = 'none'; 
      } 
    else{
      document.getElementById('chartContainer').style.display = 'block';
      }


      if(name.localeCompare(c_name)){
      document.getElementById('chartContainer1').style.display = 'none'; 
      } else{
      document.getElementById('chartContainer1').style.display = 'block';
      }

      if(name.localeCompare(c_name)){
      document.getElementById('chartContainer2').style.display = 'none'; 
      } else{
      document.getElementById('chartContainer2').style.display = 'block';
      }
   </script>

        

        </div>
        <!-- <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">...</div> -->
      </div>
    </div>
    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
  
  </body>
</html>

