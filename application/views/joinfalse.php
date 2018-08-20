<!DOCTYPE html>
<html lang="en">

    <head>

        <?php $this->load->view('desain/css'); ?>

    </head>

    <body class="index-page sidebar-collapse">
        <!-- Navbar -->
      <?php $this->load->view('desain/navbar'); ?>
        <!-- End Navbar -->

        <div class="wrapper">

            <div class="main">


        <?php $this->load->view('desain/Form') ?>
        

<?php $this->load->view('desain/footer'); ?>
            </div>
    </body>
    <?php $this->load->view('desain/js'); ?>



<script>

// Set the date we're counting down to
var countDownDate = new Date("Jan 5, 2019 15:37:25").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get todays date and time
  var now = new Date().getTime();

  // Find the distance between now and the count down date
  var distance = countDownDate - now;

  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  // Display the result in the element with id="demo"
  document.getElementById("demo").innerHTML = days + "d " + hours + "h "
  + minutes + "m " + seconds + "s ";

  // If the count down is finished, write some text
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("demo").innerHTML = "EXPIRED";
  }
}, 1000);

</script>
</html>
