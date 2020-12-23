<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  
  <body>
  <h1><center>Charts</center></h1>
 
  <div class="container" style="width: 800px;margin: 0px auto;">
    <canvas id="myChart"></canvas>
  </div>
 
  <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
  <script type="text/javascript">
    var ctx = document.getElementById('myChart').getContext('2d');
    var chart = new Chart(ctx, {
    type: 'pie',
    data: {
        labels: [
          <?php
            if (count($graph)>0) {
              foreach ($graph as $data) {
                echo "'" .$data->year ."',";
              }
            }
          ?>
        ],
        datasets: [{
            label: 'Pembelian',
            backgroundColor: [
              "Yellow",
              "Blue",
              "Black",
              "Red",
              "Green",
              "Gray",
              "Brown",
            ],
            borderColor: 'White',
            data: [
              <?php
                if (count($graph)>0) {
                   foreach ($graph as $data) {
                    echo $data->purchase . ", ";
                  }
                }
              ?>
            ],
            borderWidth: [1, 1, 1, 1, 1,1,1]
          }]
    },
});
  </script>
  </body>
</html>