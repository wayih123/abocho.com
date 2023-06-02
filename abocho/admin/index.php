<?php
include('includes/header.php');
?>

		
		
        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->
            
<div class="container-fluid">
	<div class="form-head mb-sm-5 mb-3 d-flex flex-wrap align-items-center">
		<h2 class="font-w600 title mb-2 me-auto ">Dashboard</h2>
		<div class="weather-btn mb-2">
			<span class="me-3 font-w600 text-black"><i class="fa fa-cloud me-2"></i>21</span>
			<select class="form-control style-1 default-select  me-3 ">
				<option>Medan, IDN</option>
				<option>Jakarta, IDN</option>
				<option>Surabaya, IDN</option>
			</select>
		</div>
		<a href="javascript:void(0);" class="btn btn-secondary mb-2"><i class="las la-calendar scale5 me-3"></i>Filter Periode</a>
	</div>
	<div class="row">
		<div class="col-xl-3 col-sm-6 m-t35">
			<div class="card card-coin">
				<div class="card-body text-center">
					<!-- d -->
					<h2 class="text-black mb-2 font-w600">
						  <?php
              $query = "SELECT id FROM customer ORDER BY id";
              $result = mysqli_query($conn, $query);

              $row = mysqli_num_rows($result);

              echo ' ' . $row . ' ';


              ?>
					</h2>
					<p class="mb-0 fs-14">
						<svg  width="29" height="22" viewBox="0 0 29 22" fill="none" xmlns="http://www.w3.org/2000/svg">
							<g filter="url(#filter0_d1)">
							<path d="M5 16C5.91797 14.9157 8.89728 11.7277 10.5 10L16.5 13L23.5 4" stroke="#2BC155" stroke-width="2" stroke-linecap="round"/>
							</g>
							<defs>
							<filter id="filter0_d1" x="-3.05176e-05" y="-6.10352e-05" width="28.5001" height="22.0001" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
							<feFlood flood-opacity="0" result="BackgroundImageFix"/>
							<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/>
							<feOffset dy="1"/>
							<feGaussianBlur stdDeviation="2"/>
							<feColorMatrix type="matrix" values="0 0 0 0 0.172549 0 0 0 0 0.72549 0 0 0 0 0.337255 0 0 0 0.61 0"/>
							<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow"/>
							<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow" result="shape"/>
							</filter>
							</defs>
						</svg>
						Actice Customers
					</p>	
				</div>
			</div>
		</div>
		<!-- <div class="col-xl-3 col-sm-6 m-t35">
			<div class="card card-coin">
				<div class="card-body text-center">
					<svg class="mb-3 currency-icon" width="80" height="80" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
						<circle cx="40" cy="40" r="40" fill="white"/>
						<path d="M40 0C17.9083 0 0 17.9083 0 40C0 62.0917 17.9083 80 40 80C62.0917 80 80 62.0917 80 40C80 17.9083 62.0917 0 40 0ZM40 72.5C22.0783 72.5 7.5 57.92 7.5 40C7.5 22.08 22.0783 7.5 40 7.5C57.9217 7.5 72.5 22.0783 72.5 40C72.5 57.9217 57.92 72.5 40 72.5Z" fill="#FFAB2D"/>
						<path d="M42.065 41.2983H36.8133V49.1H42.065C43.125 49.1 44.1083 48.67 44.7983 47.9483C45.52 47.2566 45.95 46.275 45.95 45.1833C45.9517 43.0483 44.2 41.2983 42.065 41.2983Z" fill="#FFAB2D"/>
						<path d="M40 10.8333C23.9167 10.8333 10.8333 23.9166 10.8333 40C10.8333 56.0833 23.9167 69.1666 40 69.1666C56.0833 69.1666 69.1667 56.0816 69.1667 40C69.1667 23.9183 56.0817 10.8333 40 10.8333ZM45.935 53.5066H42.495V58.9133H38.8867V53.5066H36.905V58.9133H33.28V53.5066H26.9067V50.1133H30.4233V29.7799H26.9067V26.3866H33.28V21.0883H36.905V26.3866H38.8867V21.0883H42.495V26.3866H45.6283C47.3783 26.3866 48.9917 27.1083 50.1433 28.26C51.295 29.4116 52.0167 31.025 52.0167 32.775C52.0167 36.2 49.3133 38.995 45.935 39.1483C49.8967 39.1483 53.0917 42.3733 53.0917 46.335C53.0917 50.2816 49.8983 53.5066 45.935 53.5066Z" fill="#FFAB2D"/>
						<path d="M44.385 36.5066C45.015 35.8766 45.3983 35.0316 45.3983 34.08C45.3983 32.1916 43.8633 30.655 41.9733 30.655H36.8133V37.52H41.9733C42.91 37.52 43.77 37.12 44.385 36.5066Z" fill="#FFAB2D"/>
					</svg>
					<h2 class="text-black mb-2 font-w600">$24,098</h2>
					<p class="mb-0 fs-13">
						<svg width="29" height="22" viewBox="0 0 29 22" fill="none" xmlns="http://www.w3.org/2000/svg">
							<g filter="url(#filter0_d2)">
							<path d="M5 16C5.91797 14.9157 8.89728 11.7277 10.5 10L16.5 13L23.5 4" stroke="#2BC155" stroke-width="2" stroke-linecap="round"/>
							</g>
							<defs>
							<filter id="filter0_d2" x="-3.05176e-05" y="-6.10352e-05" width="28.5001" height="22.0001" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
							<feFlood flood-opacity="0" result="BackgroundImageFix"/>
							<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/>
							<feOffset dy="1"/>
							<feGaussianBlur stdDeviation="2"/>
							<feColorMatrix type="matrix" values="0 0 0 0 0.172549 0 0 0 0 0.72549 0 0 0 0 0.337255 0 0 0 0.61 0"/>
							<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow"/>
							<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow" result="shape"/>
							</filter>
							</defs>
						</svg>
						<span class="text-success me-1">45%</span>This week
					</p>	
				</div>
			</div>
		</div> -->
		
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
	<script src="public/vendor/global/global.min.js" type="text/javascript"></script>
				<script src="public/vendor/bootstrap-select/dist/js/bootstrap-select.min.js" type="text/javascript"></script>
					<script src="public/vendor/chart.js/Chart.bundle.min.js" type="text/javascript"></script>
				<script src="public/vendor/peity/jquery.peity.min.js" type="text/javascript"></script>
				<script src="public/vendor/apexchart/apexchart.js" type="text/javascript"></script>
				<script src="public/vendor/owl-carousel/owl.carousel.js" type="text/javascript"></script>
				<script src="public/js/dashboard/dashboard-1.js" type="text/javascript"></script>
					<script src="public/js/custom.js" type="text/javascript"></script>
				<script src="public/js/deznav-init.js" type="text/javascript"></script>
				<script src="public/js/demo.js" type="text/javascript"></script>
				<script src="public/js/styleSwitcher.js" type="text/javascript"></script>
	    </body>

</html>