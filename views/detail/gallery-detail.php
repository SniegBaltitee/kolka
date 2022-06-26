<!DOCTYPE html>
<html lang="en-US">
<?php include_once($_SERVER["DOCUMENT_ROOT"]."/database_config.php"); 
			require($_SERVER["DOCUMENT_ROOT"]."/header.php");
            ?>

			<!-- CORE : begin -->
			<div id="core">
				<div class="core__inner">

					<!-- MAIN : begin -->
					<main id="main">
						<div class="main__inner">

                        <?php
												 // Check existence of id parameter before processing further
    if(isset($_GET["id"]) && !empty(trim($_GET["id"]))){
        // Get URL parameter
        $id =  trim($_GET["id"]);
        
        // Prepare a select statement
        $sql = "SELECT * FROM gallery INNER JOIN gal_category ON gallery.category_id = gal_category.id_category WHERE id_gal = ?";
        if($stmt = mysqli_prepare($conn, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "i", $param_id);
            
            // Set parameters
            $param_id = $id;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                $result = mysqli_stmt_get_result($stmt);
    
                if(mysqli_num_rows($result) == 1){
                    /* Fetch result row as an associative array. Since the result set
                    contains only one row, we don't need to use while loop */
                    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                    
                    // Retrieve individual field value
                    $title = $row["title"];
                    $content = $row["content"];
                    $photo_by = $row["photo_by"];
					$category_id = $row["cname"];
                } else{
                    // URL doesn't contain valid id. Redirect to error page
                    header("location: ../404.html");
                    exit();
                }
                
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
        
        // Close statement
        mysqli_stmt_close($stmt);
        
        // Close connection
        mysqli_close($conn);
    }  else{
        // URL doesn't contain id parameter. Redirect to error page
        header("location: ../404.html");
        exit();
    }
												?>

							<!-- MAIN CONTENT : begin -->
							<div class="main__content">
								<div class="main__content-wrapper">
									<div class="main__content-inner">
										<div class="lsvr-container">

											<!-- POST SINGLE : begin -->
											<div class="post-single lsvr_gallery-post-page lsvr_gallery-post-single">

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
																					<a href="" class="breadcrumbs__link">Home</a>
																				</li>
                                                                                <li class="breadcrumbs__item">
																					<span class="breadcrumbs__item-decor" aria-hidden="true"></span>
																					<a href="" class="breadcrumbs__link">Galerija</a>
																				</li>

																				<li class="breadcrumbs__item">
																					<span class="breadcrumbs__item-decor" aria-hidden="true"></span>
																					<a href="" class="breadcrumbs__link"><?php echo $category_id; ?></a>
																				</li>

																			</ul>
																		</nav>

																	</div>
																</div>
																<!-- BREADCRUMBS : end -->

																<h1 class="main-header__title"><?php echo $title; ?></h1>

																<!-- POST META : begin -->
																<ul class="post-meta" aria-label="Post Meta">

																	<!-- POST CATEGORY : begin -->
																	<li class="post-meta__item post-meta__item--category">
																		<span class="post__terms post__terms--category"><a href="" class="post__term-link"><?php echo $category_id; ?></a></span>
																	</li>
																	<!-- POST CATEGORY : end -->

																</ul>
																<!-- POST META : begin -->

															</div>
														</header>
														<!-- MAIN HEADER : end -->

														<div class="lsvr-grid lsvr-grid--md-reset">

															<div class="lsvr-grid__col lsvr-grid__col--span-4 lsvr-grid__col--order-2">

																<!-- POST CONTENT : begin -->
																<div class="post__content">
																	<p><?php echo $content; ?></p>
																</div>
																<!-- POST CONTENT : end -->

																<!-- POST FIELDS : begin -->
																<div class="post-fields">

																	<dl class="post-fields__list">
																		<dt class="post-fields__item-title">Fotogrāfs</dt>
																		<dd class="post-fields__item-text"><?php echo $photo_by; ?></dd>
																		<dt class="post-fields__item-title">URL</dt>
																		<dd class="post-fields__item-text"><a href="#">www.kolka.lv</a></dd>
																	</dl>

																</div>
																<!-- POST FIELDS : end -->

															</div>

															<div class="lsvr-grid__col lsvr-grid__col--span-8 lsvr-grid__col--order-1">

																	<div class="post-images">

																	<!-- LIST : begin -->
																	<ul class="post-images__list lsvr-grid lsvr-grid--3-cols lsvr-grid--md-2-cols lsvr-grid--masonry">
																	<?php
																	 if(isset($_GET["id"]) && !empty(trim($_GET["id"]))){
																		// Get URL parameter
																		$id =  trim($_GET["id"]);
																		$conn = new mysqli("94.100.1.181","kolka","aVD*XpwR4YEkNHn","kolka");
																	$result2 = $conn->query("SELECT * FROM img_gal INNER JOIN gallery ON img_gal.gal_id = gallery.id_gal WHERE gal_id = $id");
																	if (mysqli_num_rows($result2) > 0) {
																		$i=0;
																		while($row = mysqli_fetch_array($result2)) {
																			$imageURL = '../views/crud/images/'.$row["picture"];
																	?>

																		<li class="lsvr-grid__col post-images__item">
																			<a href="<?php echo $imageURL; ?>" class="post-images__item-link lsvr-open-in-lightbox" title="Town photo">
																				<img class="post-images__item-img" src="<?php echo $imageURL; ?>" alt="Town photo">
																			</a>
																		</li>

																		<?php
																		$i++;
																		}
																	}
																	else{
																	echo "No result found";
																	}
																}
																		?>

																	</ul>
																	<!-- LIST : end -->

																</div>
																<!-- POST IMAGES : end -->

															</div>

														</div>

														<?php 
															
															 if(isset($_GET["id"]) && !empty(trim($_GET["id"]))){
																// Get URL parameter
																$id =  trim($_GET["id"]);
																$conn = new mysqli("94.100.1.181","kolka","aVD*XpwR4YEkNHn","kolka");
															$nextquery = $conn->query("SELECT * FROM gallery WHERE id_gal > $id ORDER BY id_gal ASC LIMIT 1"); 
															
															while($nextrow = mysqli_fetch_array($nextquery))
															{
															$nextid  = $nextrow['id_gal'];
															$title = $nextrow['title'];
															}
															 }
															 if(isset($_GET["id"]) && !empty(trim($_GET["id"]))){
																// Get URL parameter
																$id =  trim($_GET["id"]);
																$conn = new mysqli("94.100.1.181","kolka","aVD*XpwR4YEkNHn","kolka");
															$prevquery = $conn->query("SELECT * FROM gallery WHERE id_gal < $id ORDER BY id_gal DESC LIMIT 1"); 
															
															while($prevrow = mysqli_fetch_array($prevquery))
															{
																$titlee = "";
															$previd  = $prevrow['id_gal'];
															$titlee = $prevrow['title'];
															}
															 }
															 ?>
															<!-- POST NAVIGATION : begin -->
															<div class="post-navigation">
																<ul class="post-navigation__list">

																	<!-- PREVIOUS POST : begin -->
																	<li class="post-navigation__item post-navigation__item--prev">
																		<div class="post-navigation__item-inner">
																		
																			<a href="/detail/gallery-detail?id=<?php echo $previd; ?>" class="post-navigation__item-link">
																				<span class="post-navigation__item-link-label">Iepriekšējais raksts</span>
																				<span class="post-navigation__item-link-title"><?php echo $titlee; ?></span>
																				<span class="post-navigation__item-link-icon" aria-hidden="true"></span>
																			</a>
																			
																		</div>
																	</li>
																	<!-- PREVIOUS POST : end -->

																	<!-- NEXT POST : begin -->
																	<li class="post-navigation__item post-navigation__item--next">
																		<div class="post-navigation__item-inner">
																		
																			<a href="/detail/gallery-detail?id=<?php echo $nextid; ?>" class="post-navigation__item-link">
																				<span class="post-navigation__item-link-label">Nākamais raksts</span>
																				<span class="post-navigation__item-link-title"><?php echo $title; ?></span>
																				<span class="post-navigation__item-link-icon" aria-hidden="true"></span>
																			</a>

																		</div>
																	</li>
																	<!-- NEXT POST : end -->

																</ul>
															</div>
															<!-- POST NAVIGATION : end -->

													</div>
												</article>
												<!-- POST : end -->

											</div>
											<!-- POST SINGLE : end -->

										</div>
									</div>
								</div>
							</div>
							<!-- MAIN CONTENT : begin -->

						</div>
					</main>
					<!-- MAIN : end -->

				</div>
			</div>
			<!-- CORE : end -->
			<?php require($_SERVER["DOCUMENT_ROOT"]."/footer.php");?>

		</div>
		<!-- WRAPPER : end -->

</html>