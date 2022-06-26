
<!DOCTYPE html>
<html lang="en-US">
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
							
									<!-- MAIN IMAGE : begin -->
									<div class="main-image main-image--cropped main-image--parallax">
										<p class="main-image__inner" style="background-image: url( '../../content/kolka.jpg' );">
											<span class="screen-reader-text">Veselība</span>
										</p>
									</div>
									<!-- MAIN IMAGE : end -->

									<!-- MAIN CONTENT : begin -->
									<div class="main__content">
										<div class="main__content-wrapper">
											<div class="main__content-inner">

											
												<!-- POST SINGLE : begin -->
												<div class="post-single blog-post-single">
												
													<!-- POST : begin -->
													<article class="post">
														<div class="post__inner">

															<!-- MAIN HEADER : begin -->
															<header class="main-header">
																<div class="main-header__inner">

																	<!-- BREADCRUMBS : begin -->
																	<div class="breadcrumbs">
																		<div class="breadcrumbs__inner">

																			<nav class="breadcrumbs__nav" aria-label="Breadcrumbs">
																				<ul class="breadcrumbs__list">

																					<li class="breadcrumbs__item">
																						<span class="breadcrumbs__item-decor" aria-hidden="true"></span>
																						<a href="" class="breadcrumbs__link">Sākumlapa</a>
																					</li>

																					<li class="breadcrumbs__item">
																						<span class="breadcrumbs__item-decor" aria-hidden="true"></span>
																						<a href="" class="breadcrumbs__link">Veselība</a>
																					</li>

																				</ul>
																			</nav>

																		</div>
																	</div>
																	<!-- BREADCRUMBS : end -->
																
																	<h1 class="main-header__title">Veselība</h1>

																</div>
															</header>
															<!-- MAIN HEADER : end -->

															<!-- POST CONTENT : begin -->
															<div class="post__content">

															<h3>Ingrīdas Liepas ģimenes ārsta prakse</h3>
                                                            <p>«Brigas» Kolka, tālr. 63220549, mob. tālr. 26497507, epasts: liepaingrida@inbox.lv</p>
                                                            <p>Prakses darba laiks:</p>
															<ul>
                                                                <li>Pirmdien: 7.30−15.30</li>
                                                                <li>Otrdien: 7.30−15.30</li>
                                                                <li>Trešdien: 7.30−19.00</li>
                                                                <li>Ceturtdien: 7.30−15.30</li>
                                                                <li>Piektdien: 7.30−15.30</li>
                                                            </ul>
                                                            <p>Ģimenes ārsta pieņemšanas laiks:</p>
															<ul>
                                                                <li>Pirmdien: 9.00−13.00</li>
                                                                <li>Otrdien: 9.00−13.00</li>
                                                                <li>Trešdien: 15.00−19.00</li>
                                                                <li>Ceturtdien: 9.00−13.00</li>
                                                                <li>Piektdien: 9.00−13.00</li>
                                                            </ul>
                                                            <hr>
                                                            <h3>I.Pinkenas ārsta prakse zobārstniecībā</h3>
                                                            <p>«Brigas» Kolka, mob. tālr. 29450671, epasts inga-pinkena@inbox.lv</p>
                                                            <p>Darba laiks:</p>
															<ul>
                                                                <li>Pirmdien: 8.00−14.00</li>
                                                                <li>Otrdien: 11.00−18.00</li>
                                                                <li>Ceturtdien: 8.00−14.00</li>
                                                                <li>Piektdien: 8.00−15.00</li>
                                                            </ul>
                                                            <p>Pacienti tiek pieņemti tikai pēc iepriekšēja pieraksta.<br>Ārstniecības iestādei nav nodrošināta vides pieejamība. Nepieciešamības gadījumā lūdzam iepriekš sazināties!</p>
                                                           <hr>
                                                           <h3>Aptieka «Baiba»</h3>
                                                            <p>«Zītari» Kolka, tālr. 63276484, mob. tālr. 26559762</p>
                                                            <p>Darba laiks:</p>
															<ul>
                                                                <li>Pirmdien: 11.00−17.00</li>
                                                                <li>Otrdien: 11.00−17.00</li>
                                                                <li>Trešdien: 9.00−17.00</li>
                                                                <li>Ceturtdien: 11.00−17.00</li>
                                                                <li>Piektdien: 9.00−17.00</li>
                                                                <li>Sestdien: 10.00−13.00</li>
                                                            </ul>
                                                        </div>
															<!-- POST CONTENT : end -->

														</div>
													</article>
													<!-- POST : end -->
												</div>
												<!-- POST SINGLE : end -->
												
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

												<h3 class="widget__title">Jaunākie raksti</h3>

												<div class="widget__content">

													<!-- LIST : begin -->
													<ul class="lsvr-post-list-widget__list">
													<?php
													$conn = new mysqli("94.100.1.181","kolka","aVD*XpwR4YEkNHn","kolka");
													$result2 = $conn->query("SELECT * FROM blogs INNER JOIN blg_category ON blogs.category_id = blg_category.id_category ORDER BY id_blogs DESC LIMIT 4");
													if (mysqli_num_rows($result2) > 0) {
														$i=0;
														while($row = mysqli_fetch_array($result2)) {
                            						?>
														<!-- LIST ITEM : begin -->
														<li class="lsvr-post-list-widget__item lsvr-post-list-widget__item--has-thumb">
															<div class="lsvr-post-list-widget__item-inner">

																<p class="lsvr-post-list-widget__item-thumb">
																	<a href="../detail/blog-detail?id=<?php echo $row["id_blogs"] ?>" class="lsvr-post-list-widget__item-thumb-link" style="background-image: url( '<?php echo 'data:image/png;base64,' . $row["picture"] . ''; ?>' );">
																		<span class="screen-reader-text"><?php echo $row["title"] ?></span>
																	</a>
																</p>

																<div class="lsvr-post-list-widget__item-content">

																	<p class="lsvr-post-list-widget__item-category">
																		<a href="" class="lsvr-post-list-widget__item-category-link"><?php echo $row["cname"] ?></a>
																	</p>

																	<h4 class="lsvr-post-list-widget__item-title">
																		<a href="../detail/blog-detail?id=<?php echo $row["id_blogs"] ?>" class="lsvr-post-list-widget__item-title-link"><?php echo $row["title"] ?></a>
																	</h4>

																	<p class="lsvr-post-list-widget__item-date"><?php echo $row["created_at"] ?></p>

																</div>

															</div>
														</li>
														<!-- LIST ITEM : end -->
														<?php
                               							  $i++;
														}
													}
													else{
													echo "No result found";
													}
														?>
													</ul>
													<!-- LIST : end -->

													<!-- MORE LINK : begin -->
													<p class="widget__more">
														<a href="../archive/blog-archive" class="widget__more-link">
															<span class="widget__more-link-label">Vairāk rakstu</span>
															<span class="widget__more-link-icon" aria-hidden="true"></span>
														</a>
													</p>
													<!-- MORE LINK : end -->

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
			<?php require($_SERVER["DOCUMENT_ROOT"]."/footer.php");?>
		</div>
		<!-- WRAPPER : end -->

</html>