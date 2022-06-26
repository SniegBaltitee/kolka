<!DOCTYPE html>
<html lang="en-US">


	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700&display=swap" rel="stylesheet">
	<link href="site.css" rel="stylesheet">

	<?php include_once($_SERVER["DOCUMENT_ROOT"]."/database_config.php"); 
			require($_SERVER["DOCUMENT_ROOT"]."/header.php");
            ?>
		<!-- HEADER : end -->

		<!-- CORE : begin -->
		<div id="core">
			<div class="core__inner">

				<!-- CORE COLUMNS : begin -->
				<div class="core__columns">

					<div class="core__columns-col core__columns-col--right core__columns-col--main">

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



												</div>
											</header>
											<!-- MAIN HEADER : end -->

											<!-- POST CONTENT : begin -->
											<div class="post__content">





												<iframe
													src="https://www.meteoblue.com/en/weather/widget/three/kolka_latvia_458682?geoloc=fixed&nocurrent=0&noforecast=0&days=7&tempunit=CELSIUS&windunit=KILOMETER_PER_HOUR&layout=image"
													frameborder="0" scrolling="NO" allowtransparency="true"
													sandbox="allow-same-origin allow-scripts allow-popups allow-popups-to-escape-sandbox"
													style="width: 100%; height: 622px"></iframe>
												<div>
													<!-- DO NOT REMOVE THIS LINK --><a
														href="https://www.meteoblue.com/en/weather/week/kolka_latvia_458682?utm_source=weather_widget&utm_medium=linkus&utm_content=three&utm_campaign=Weather%2BWidget"
														target="_blank" rel="noopener"></a>
												</div>

												<img src="./content/img/meteogram_kolka.png">
												<img src="./content/img/meteogram_14day_kolka.png">



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

					<div class=" core__columns-col--left core__columns-col--sidebar">

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
													style="width: 340px; height: 400px;"></iframe>
												<div>
													<!-- DO NOT REMOVE THIS LINK --><a
														href="https://www.meteoblue.com/en/weather/maps/kolka_latvia_458682?utm_source=weather_widget&utm_medium=linkus&utm_content=map&utm_campaign=Weather%2BWidget"
														target="_blank" rel="noopener"></a>
												</div>

												<div style="padding-top:30px;width:340px ;" >
													<h3 class="widgettitle">Tiešsaistes kamera Kolkā</h3>
													<p>
														<img alt="Otrā Kolkas tiešsaistes kamera" onerror="setTimeout(function() {src = src.substring(0, (src.lastIndexOf(&quot;t=&quot;)+2))+(new Date()).getTime()}, 1000)" onload="setTimeout(function() {src = src.substring(0, (src.lastIndexOf(&quot;t=&quot;)+2))+(new Date()).getTime()}, 1000)" src="http://84.15.209.153:8113/snap.jpeg?t=1650973786078" title="Tiešsaistes attēls no vebkameras Kolkā pie pagastmājas. Lai saglabātu momentuzņēmumu datorā, nospiest zemāk redzamo pogu">
													</p>		
													</div>
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


</body>

</html>