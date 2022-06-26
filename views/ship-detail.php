<!DOCTYPE html>
<html lang="en-US">

	<link rel="stylesheet" type="text/css" href="/assets/css/ship/stule.css"><!-- Place your own CSS into this file -->
	<!-- STYLESHEETS : end -->

	<?php include_once($_SERVER["DOCUMENT_ROOT"]."/database_config.php"); 
			require($_SERVER["DOCUMENT_ROOT"]."/header.php");
            ?>

		<!-- CORE : begin -->
		<div id="core">
			<div class="core__inner">

				<!-- CORE COLUMNS : begin -->
				<div class="core__columns">

					<div class="core__columns-col core__columns-col--left core__columns-col--main">

						<!-- MAIN : begin -->
						<main id="main">
							<div class="main__inner">

								<!-- MAIN CONTENT : begin -->
								<div class="main__content">
									<div class="main__content-wrapper">
										<div class="main__content-inner">

											<!-- MAIN HEADER : begin -->
											<header class="main-header">
												<div class="main-header__inner">

													<h1 class="main-header__title">Kuģi pie Kolkas</h1>

												</div>
											</header>
											<!-- MAIN HEADER : end -->

											<!-- POST CONTENT : begin -->
											<div class="post__content">

												<p>Tiešsaistes dati par kuģiem Kolkas raga apkārtnē </p>


												<script type="text/javascript">
													// Map appearance
													var width = "87%";         // width in pixels or percentage
													// height in pixels
													var latitude = "57.55";      // center latitude (decimal degrees)
													var longitude = "22.80";// center longitude (decimal degrees)
													var zoom = "9";             // initial zoom (between 3 and 18)
													var names = true;           // always show ship names (defaults to false)

													// Single ship tracking
													var mmsi = "123456789";     // display latest position (by MMSI)
													var imo = "1234567";        // display latest position (by IMO, overrides MMSI)
													var show_track = true;     // display track line (last 24 hours)

													// Fleet tracking
													var fleet = ""; // your personal Fleet key (displayed in your User Profile)
													var fleet_name = "DEFAULT FLEET"; // display particular fleet from your fleet list
													var fleet_timespan = "1440"; // maximum age in minutes of the displayed ship positions
												</script>
												<script type="text/javascript"
													src="https://www.vesselfinder.com/aismap.js"></script>

												<p style="font-size:17px; color:black; font-weight:bold">
													Informācija tiek saņemta no kuģiem, kas ir aprīkoti ar automātiskās
													identifikācijas sistēmu (AIS)
												</p>

												<h3>Lidmašīnās virs Kolkas</h3>
												<p>
													Tiešsaistes dati par pāri Kolkai ceļojošām lidmašīnām.
												</p>
												<p>Uzklikšķini uz lidmašīnas un uzzināsi visu– kas, no kurienes, uz
													kurieni, kā un kāpēc.</p>

												<p><iframe
														src="http://www.flightradar24.com/simple_index.php?lat=57.82&amp;lon=22.33&amp;z=8"
														width="87%" height="500"></iframe></p>



											</div>
											<!-- POST CONTENT : end -->


										</div>
									</div>
								</div>
								<!-- MAIN CONTENT : begin -->

							</div>
						</main>
						<!-- MAIN : end -->

					</div>

					<div class="core__columns-col core__columns-col--right core__columns-col--sidebar">

						<!-- SIDEBAR : begin -->
						<aside id="sidebar">
							<div class="sidebar__wrapper">
								<div class="sidebar__inner">

									<!-- LSVR POSTS WIDGET : begin -->
									<div class="widget lsvr-post-list-widget">
										<div class="widget__inner">
											<div class="widget__content">
												<h3 class="widgettitle">Informācija par Vēju Kolkā</h3>
												<iframe
													src="https://www.meteoblue.com/en/weather/maps/widget/kolka_latvia_458682?windAnimation=0&windAnimation=1&gust=0&gust=1&satellite=0&satellite=1&cloudsAndPrecipitation=0&cloudsAndPrecipitation=1&temperature=0&temperature=1&sunshine=0&sunshine=1&extremeForecastIndex=0&geoloc=fixed&tempunit=C&windunit=km%252Fh&lengthunit=metric&zoom=5&autowidth=auto"
													frameborder="0" scrolling="NO" allowtransparency="true"
													sandbox="allow-same-origin allow-scripts allow-popups allow-popups-to-escape-sandbox"
													style="width: 420px; height: 420px; "></iframe>
												<div>
													<!-- DO NOT REMOVE THIS LINK --><a
														href="https://www.meteoblue.com/en/weather/maps/kolka_latvia_458682?utm_source=weather_widget&utm_medium=linkus&utm_content=map&utm_campaign=Weather%2BWidget"
														target="_blank" rel="noopener"></a>
												</div>
												
												<div style="padding-top:30px;width:420px ;" >
													<h3 class="widgettitle">Tiešsaistes kamera Kolkā</h3>
													<p>
														<img alt="Otrā Kolkas tiešsaistes kamera" onerror="setTimeout(function() {src = src.substring(0, (src.lastIndexOf(&quot;t=&quot;)+2))+(new Date()).getTime()}, 1000)" onload="setTimeout(function() {src = src.substring(0, (src.lastIndexOf(&quot;t=&quot;)+2))+(new Date()).getTime()}, 1000)" src="http://84.15.209.153:8113/snap.jpeg?t=1650973786078" title="Tiešsaistes attēls no vebkameras Kolkā pie pagastmājas. Lai saglabātu momentuzņēmumu datorā, nospiest zemāk redzamo pogu">
													</p>		
												</div>
											</div>
										</div>
									</div>
									<!-- LSVR POSTS WIDGET : end -->

								</div>
							</div>
						</aside>
						<!-- SIDEBAR : end -->

					</div>

				</div>
				<!-- CORE COLUMNS : end -->

			</div>
		</div>
		<!-- CORE : end -->

		<?php
			require($_SERVER["DOCUMENT_ROOT"]."/footer.php");
            ?>
	</div>
	<!-- WRAPPER : end -->

</html>