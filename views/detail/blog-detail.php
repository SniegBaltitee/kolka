
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

						<?php
												 // Check existence of id parameter before processing further
    if(isset($_GET["id"]) && !empty(trim($_GET["id"]))){
        // Get URL parameter
        $id =  trim($_GET["id"]);
        
        // Prepare a select statement
        $sql = "SELECT * FROM blogs INNER JOIN blg_category ON blogs.category_id = blg_category.id_category WHERE id_blogs = ?";
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
                    $picture = $row["picture"];
                    $blog_author = $row["blog_author"];
					$created_at = $row["created_at"];
					$category_id = $row["cname"];
                } else{
                    // URL doesn't contain valid id. Redirect to error page
                    header("location: /404");
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
        header("location: /404");
        exit();
    }
												?>
							
							<!-- MAIN : begin -->
							<main id="main">
								<div class="main__inner">
							
									<!-- MAIN IMAGE : begin -->
									<div class="main-image main-image--cropped main-image--parallax">
										<p class="main-image__inner" style="background-image: url( '<?php echo 'data:image/png;base64,' . $picture . ''; ?>' );">
											<span class="screen-reader-text"><?php echo $row["title"] ?></span>
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

																		<!-- POST DATE : begin -->
																		<li class="post-meta__item post-meta__item--date"><?php echo $created_at; ?></li>
																		<!-- POST DATE : end -->

																		<!-- POST AUTHOR : begin -->
																		<li class="post-meta__item post-meta__item--author">
																			Raksta autors <a href="" class="post-meta__item-link" rel="author"><?php echo $blog_author; ?></a>
																		</li>
																		<!-- POST AUTHOR : end -->

																		<!-- POST CATEGORY : begin -->
																		<li class="post-meta__item post-meta__item--category">
																			<span class="post__terms post__terms--category">Kategorija <a href="" class="post__term-link"><?php echo $category_id; ?></a></span>
																		</li>
																		<!-- POST CATEGORY : end -->

																	</ul>
																	<!-- POST META : begin -->

																</div>
															</header>
															<!-- MAIN HEADER : end -->

															<!-- POST CONTENT : begin -->
															<div class="post__content">

																<p><?php echo $content; ?></p>
															</div>
															<!-- POST CONTENT : end -->
															
															<?php 
															
															 if(isset($_GET["id"]) && !empty(trim($_GET["id"]))){
																// Get URL parameter
																$id =  trim($_GET["id"]);
																$conn = new mysqli("94.100.1.181","kolka","aVD*XpwR4YEkNHn","kolka");
															$nextquery = $conn->query("SELECT * FROM blogs WHERE id_blogs > $id ORDER BY id_blogs ASC LIMIT 1"); 
															
															while($nextrow = mysqli_fetch_array($nextquery))
															{
															$nextid  = $nextrow['id_blogs'];
															$title = $nextrow['title'];
															}
															 }
															 if(isset($_GET["id"]) && !empty(trim($_GET["id"]))){
																// Get URL parameter
																$id =  trim($_GET["id"]);
																$conn = new mysqli("94.100.1.181","kolka","aVD*XpwR4YEkNHn","kolka");
															$prevquery = $conn->query("SELECT * FROM blogs WHERE id_blogs < $id ORDER BY id_blogs DESC LIMIT 1"); 
															
															while($prevrow = mysqli_fetch_array($prevquery))
															{
																$titlee = "";
															$previd  = $prevrow['id_blogs'];
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
																		
																			<a href="/detail/blog-detail?id=<?php echo $previd; ?>" class="post-navigation__item-link">
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
																		
																			<a href="/detail/blog-detail?id=<?php echo $nextid; ?>" class="post-navigation__item-link">
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
																	<a href="/detail/blog-detail?id=<?php echo $row["id_blogs"] ?>" class="lsvr-post-list-widget__item-thumb-link" style="background-image: url( '<?php echo 'data:image/png;base64,' . $row["picture"] . ''; ?>' );">
																		<span class="screen-reader-text"><?php echo $row["title"] ?></span>
																	</a>
																</p>

																<div class="lsvr-post-list-widget__item-content">

																	<p class="lsvr-post-list-widget__item-category">
																		<a href="/archive/blog-archive" class="lsvr-post-list-widget__item-category-link"><?php echo $row["cname"] ?></a>
																	</p>

																	<h4 class="lsvr-post-list-widget__item-title">
																		<a href="/detail/blog-detail?id=<?php echo $row["id_blogs"] ?>" class="lsvr-post-list-widget__item-title-link"><?php echo $row["title"] ?></a>
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
														<a href="/archive/blog-archive" class="widget__more-link">
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