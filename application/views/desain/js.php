
<!-- Template Javascript Files
================================================== -->
<!-- jquery -->
<script src="<?php echo base_url()?>assets/js/plugins/jQurey/jquery.min.js"></script>
<!-- Form Validation -->
<script src="<?php echo base_url()?>assets/js/plugins/form-validation/jquery.form.js"></script>
<script src="<?php echo base_url()?>assets/js/plugins/form-validation/jquery.validate.min.js"></script>
<!-- owl carouserl js -->
<script src="<?php echo base_url()?>assets/js/plugins/owl-carousel/owl.carousel.min.js"></script>
<!-- bootstrap js -->
<script src="<?php echo base_url()?>assets/js/plugins/bootstrap/bootstrap.min.js"></script>
<!-- wow js -->
<script src="<?php echo base_url()?>assets/js/plugins/wow-js/wow.min.js"></script>
<!-- slider js -->
<script src="<?php echo base_url()?>assets/js/plugins/slider/slider.js"></script>
<!-- Fancybox -->
<script src="<?php echo base_url()?>assets/js/plugins/facncybox/jquery.fancybox.js"></script>
<!-- template main js -->
<script src="<?php echo base_url()?>assets/js/main.js"></script>

<!--   Core JS Files   -->


<script src="<?php echo base_url()?>assets/js/core/popper.min.js" type="text/javascript"></script>
<script src="<?php echo base_url()?>assets/js/core/bootstrap.min.js" type="text/javascript"></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="<?php echo base_url()?>assets/js/plugins/bootstrap-switch.js"></script>
<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="<?php echo base_url()?>assets/js/plugins/nouislider.min.js" type="text/javascript"></script>



<!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
<script src="<?php echo base_url()?>assets/js/plugins/bootstrap-datepicker.js" type="text/javascript"></script>
<!-- Control Center for Now Ui Kit: parallax effects, scripts for the example pages etc -->
<script src="<?php echo base_url()?>assets/js/now-ui-kit.js" type="text/javascript"></script>

<script type="text/javascript">
   $(document).ready(function () {
            // the body of this function is in assets/js/now-ui-kit.js
           //nowuiKit.initSliders();
        });

        function scrollToDownload() {

            if ($('.section-download').length !== 0) {
                $("html, body").animate({
                    scrollTop: $('.section-download').offset().top
                }, 1000);
            }
        }
        </script>
