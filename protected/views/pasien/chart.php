<div>
  <canvas id="myChart"></canvas>
</div>


<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.0/chart.js"></script>

<<script>


  const data = {
  datasets: [{
  backgroundColor: ['rgb(93, 12, 120)','rgb(200, 21, 122)','rgb(78, 34, 231)'],
  data: [<?php echo $sudahbayar ?>, <?php echo $belumbayar ?>]
  }],

  // These labels appear in the legend and in the tooltips when hovering different arcs
  labels: [
  'sudah bayar',
  'belum bayar'
  ]
  };


  const config = {
  type: 'pie',
  data: data,
  options: {}
  };
  </script>

  <script>
    const myChart = new Chart(
      document.getElementById('myChart'),
      config
    );
  </script>

  </script>