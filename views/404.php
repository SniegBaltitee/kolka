<!DOCTYPE html>
<html lang="en-US">
			<!-- HEADER : begin -->
			<?php 
			require($_SERVER["DOCUMENT_ROOT"]."/header.php");
            ?>

			<!-- CORE : begin -->
			<div id="core">
				<div class="core__inner">

					<!-- MAIN : begin -->
					<main id="main" class="main--narrow">
						<div class="main__inner">

							<!-- ERROR 404 PAGE : begin -->
							<div class="error-404-page">
								<div class="error-404-page__inner">
									<div class="error-404-page__wrapper">

										<h1 class="error-404-page__404">404</h1>

										<div class="error-404-page__content">

											<p class="error-404-page__text">Serveris nespēj atrast tīmekļa vietnes lapu, kuru izvēlējāties. Tīmekļu vietnes lapa ir pārvietota uz citu vietu vai arī izdzēsta, pastāv iespēja, ka Jūs ierakstījāt nepareizu URL.</p>

											<p class="error-404-page__back">
												<a href="/" class="error-404-page__back-link">
													<span class="error-404-page__back-link-icon" aria-hidden="true"></span>
													<span class="error-404-page__back-link-label">Atpakaļ uz sākumlapu</span>
												</a>
											</p>

										</div>

									</div>
								</div>
							</div>
							<!-- ERROR 404 PAGE : end -->

						</div>
					</main>
					<!-- MAIN : end -->

				</div>
			</div>
			<!-- CORE : end -->

			<!-- FOOTER : begin -->
			<?php 
			require($_SERVER["DOCUMENT_ROOT"]."/footer.php");
            ?>
</html>