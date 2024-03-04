     <!--**********************************
	Footer start
***********************************-->
<div class="footer">
	<div class="copyright">
		<p>
		© All Rights Reserved CodM Software.
	</p>
	</div>
</div>
<!--**********************************
	Footer end
***********************************-->

    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->
    
	<!--**********************************
		Scripts
	***********************************-->
	<!-- Required vendors -->
	<script src="../mophy/admin/vendor/global/global.min.js"></script>
	<script src="../mophy/admin/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
	<script src="../mophy/admin/vendor/chart-js/chart.bundle.min.js"></script>
	<script src="../mophy/admin/vendor/owl-carousel/owl.carousel.js"></script>
	<!-- Chart piety plugin files -->

	<script src="../mophy/admin/vendor/peity/jquery.peity.min.js"></script>

	<!-- Apex Chart -->
	<script src="../mophy/admin/vendor/apexchart/apexchart.js"></script>

	<!-- Dashboard 1 -->
	<script src="../mophy/admin/js/dashboard/dashboard-1.js"></script>

	<script src="../mophy/admin/js/custom.min.js"></script>
	<script src="../mophy/admin/js/deznav-init.js"></script>
	<script src="../mophy/admin/js/demo.js"></script>

	<script>
		function carouselReview() {
			/*  testimonial one function by = owl.carousel.js */
			/*  testimonial one function by = owl.carousel.js */
			jQuery('.testimonial-one').owlCarousel({
				loop: true,
				margin: 10,
				autoplay: true,
				nav: false,
				center: true,
				rtl: true,
				dots: false,
				navText: ['<i class="fas fa-caret-left"></i>', '<i class="fas fa-caret-right"></i>'],
				responsive: {
					0: {
						items: 2
					},
					400: {
						items: 3
					},
					700: {
						items: 5
					},
					991: {
						items: 6
					},

					1200: {
						items: 4
					},
					1600: {
						items: 5
					}
				}
			})
		}

		jQuery(window).on('load', function () {
			setTimeout(function () {
				carouselReview();

			}, 1000);
		});

		jQuery(document).ready(function () {
			setTimeout(function () {
				dezSettingsOptions.version = 'dark';
				new dezSettings(dezSettingsOptions);

				setCookie('version', 'dark');
			}, 1500)
		});
	</script>

</body>

</html>
