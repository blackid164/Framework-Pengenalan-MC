
<script> // Example starter JavaScript for disabling form submissions if there are invalid fields 
	(function() { 'use strict';
	window.addEventListener('load', function() {   
		// Fetch all the forms we want to apply custom Bootstrap validation styles to   
		var forms = document.getElementsByClassName('needs-validation');   
		// Loop over them and prevent submission   
		var validation = Array.prototype.filter.call(forms, function(form) {     
			form.addEventListener('submit', function(event) {       
				if (form.checkValidity() === false) {         
					event.preventDefault();         
					event.stopPropagation();       
				}       
				form.classList.add('was-validated');     
			}, false);   
		}); }, false); 
	})(); 
</script>
<script type="text/javascript">
        $(document).ready( function () {
            $('#myTable').DataTable({
            	"bInfo" : false,
            	"ordering" : true,
            	"dom": '<<"col-sm-4"l><"col-sm-4 text-center"f>>rti<<"col-sm-4 text-center"><"col-sm-4 text-center"p>>'
            });
        } );
</script>
<a href="#header" class="scrollup"><i class="fa fa-chevron-up"></i></a>

  <script src="assets/js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
  <script src="assets/js/jquery.js"></script>
  <script src="assets/js/jquery.easing.1.3.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD8HeI8o-c1NppZA-92oYlXakhDPYR7XMY"></script>
  <script src="assets/js/jquery.isotope.min.js"></script>
  <script src="assets/js/jquery.nicescroll.min.js"></script>
  <script src="assets/js/fancybox/jquery.fancybox.pack.js"></script>
  <script src="assets/js/skrollr.min.js"></script>
  <script src="assets/js/jquery.scrollTo.js"></script>
  <script src="assets/js/jquery.localScroll.js"></script>
  <script src="assets/js/stellar.js"></script>
  <script src="assets/js/responsive-slider.js"></script>
  <script src="assets/js/jquery.appear.js"></script>
  <script src="assets/js/grid.js"></script>
  <script src="assets/js/main.js"></script>
  <script src="assets/js/wow.min.js"></script>
  <script>
    wow = new WOW({}).init();
  </script>
  <script src="assets/contactform/contactform.js"></script>

<li class="list-inline-item">
                <a href="#">
                  <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-github fa-stack-1x fa-inverse"></i>
                  </span>
                </a>
              </li>
            </ul>
            <p class="copyright text-muted"><center> &copy; POLINEMA ea mhank 2018</center></p>
          </div>
        </div>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="<?php echo base_url() ?>assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url() ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="<?php echo base_url() ?>assets/js/clean-blog.min.js"></script>

  </body>

</html>