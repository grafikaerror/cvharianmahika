<!-- start footer Area -->		
			<footer class="footer-area section-gap">
				<div class="container">
					<div class="row">
						<div class="col-lg-3  col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h4 class="text-white">Alamat</h4>
								<p>
									Jl. Bla bla No. 02, Malang, Jatim
								</p>
							</div>
						</div>
						<div class="col-lg-4  col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h4 class="text-white">Tentang Kami</h4>
								<p>
									Kami menjual berbagai bahan bangunan, konstruksi bangunan, design autocad, dll.
								</p>
							</div>
						</div>						
						<div class="col-lg-5  col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h4 class="text-white">Kontak Kami</h4>
								<p>
									Silahkan kontak kami via WhatsApp di bawah ini, atau tekan tombol kontak di pojok kiri bawah.
								</p>
								<p class="number">
									<i class="fab fa-whatsapp"></i>&nbsp; 012-6532-568-9746<br>
								</p>
							</div>
						</div>						
					</div>
					<div class="footer-bottom d-flex justify-content-between align-items-center flex-wrap">
						<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            <p class="footer-text m-0">Copyright &copy;<script>document.write(new Date().getFullYear());</script> Bariq Firjatullah, All rights reserved | This template is made by <a href="https://colorlib.com" target="_blank">Colorlib</a></p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						
					</div>
				</div>
				<div class="fixed-action-btn vertical" style="bottom: 35px; right: 94%;">
				<a class="btn-floating btn-large red">
					<i class="fas fa-phone"></i>
				</a>
				<ul>
					<!-- <li>
						<a id="first-fab" class="btn-floating" data-fabcolor="#45d1ff">
							<i class="material-icons"></i>
						</a>
					</li> -->
					<li>
						<a id="second-fab" class="btn-floating" data-fabcolor="#7345ff">
							<i class="fab fa-instagram fa-1x"></i>
						</a>
					</li>
					<li>
						<a id="third-fab" class="btn-floating" data-fabcolor="#0084ff">
							<i class="fab fa-facebook fa-1x"></i>
						</a>
					</li>
					<li>
						<a id="fourth-fab" class="btn-floating" data-fabcolor="#25d366">
							<i class="fab fa-whatsapp fa-1x"></i>
						</a>
					</li>
				</ul>
			</div>
			</footer>	
			<!-- End footer Area -->
			<!-- <a href="#"><img src="<?= base_url('assets/')?>img/whatsapp.png" class="wabutton"></a> -->
			<!-- Floating Action Button like Google Material -->
			<div class="backTop"><i title="Back To Top" class="fas fa-angle-double-up fa-4x"></i></div>
		</body>
			<script src="<?= base_url('assets/')?>js/vendor/jquery-2.2.4.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
			<script src="<?= base_url('assets/')?>js/vendor/bootstrap.min.js"></script>			
			<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
  			<script src="<?= base_url('assets/')?>js/easing.min.js"></script>			
			<script src="<?= base_url('assets/')?>js/hoverIntent.js"></script>
			<script src="<?= base_url('assets/')?>js/superfish.min.js"></script>	
			<script src="<?= base_url('assets/')?>js/jquery.ajaxchimp.min.js"></script>
			<script src="<?= base_url('assets/')?>js/jquery.magnific-popup.min.js"></script>	
			<script src="<?= base_url('assets/')?>js/owl.carousel.min.js"></script>			
			<script src="<?= base_url('assets/')?>js/jquery.sticky.js"></script>
			<script src="<?= base_url('assets/')?>js/jquery.nice-select.min.js"></script>	
			<script src="<?= base_url('assets/')?>js/waypoints.min.js"></script>
			<script src="<?= base_url('assets/')?>js/jquery.counterup.min.js"></script>					
			<script src="<?= base_url('assets/')?>js/parallax.min.js"></script>	
			<script src="<?= base_url('assets/')?>js/mail-script.js"></script>	
			<script src="<?= base_url('assets/')?>js/main.js"></script>
			<script src="<?= base_url('assets/')?>js/jquery-fab-button.js"></script>
			<script type="text/javascript">
				var $backToTop = $(".backTop");
				$backToTop.hide();
				$(window).on('scroll', function() {
				if ($(this).scrollTop() > 100) {
					$backToTop.fadeIn();
				} else {
					$backToTop.fadeOut();
				}
				});

				$backToTop.on('click', function(e) {
				$("html, body").animate({scrollTop: 0}, 500);
				});
			</script>		
			
</html>