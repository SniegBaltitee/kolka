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

							<!-- MAIN CONTENT : begin -->
							<div class="main__content">
								<div class="main__content-wrapper">
									<div class="main__content-inner">

										<div class="lsvr-container">

											<!-- POST ARCHIVE : begin -->
											<div class="post-archive post-archive--grid blog-post-page blog-post-archive blog-post-archive--grid post-archive--layout-style-dark">

												<!-- MAIN HEADER : begin -->
												<header class="main-header">
													<div class="main-header__inner">

														<h1 class="main-header__title">Jaunumi</h1>

														<div class="main-header__subtitle">
															<p>News is information about current events. This may be provided through many different media: word of mouth, printing, postal systems or through the testimony.</p>
														</div>

														<?php
														$result2 = mysqli_query($conn,"SELECT * FROM blogs INNER JOIN blg_category ON blogs.category_id = blg_category.id_category");
														if (mysqli_num_rows($result2) > 0) {
														$i=0
													?>

														<!-- POST ARCHIVE CATEGORIES : begin -->
														<nav class="post-archive-categories" title="Categories">
															<span class="post-archive-categories__icon" aria-hidden="true"></span>

															<!-- CATEGORIES LIST : begin -->
															<ul class="post-archive-categories__list">

																<li class="post-archive-categories__item post-archive-categories__item--all">
																	<a href="" class="post-archive-categories__item-link post-archive-categories__item-link--active">Visi</a>
																</li>
																<?php while($row = mysqli_fetch_array($result2)) { ?>
																<li class="post-archive-categories__item post-archive-categories__item--category">
																	<a href="?category=<?php echo $row['cname'] ?>" class="post-archive-categories__item-link"><?php echo $row['cname']; ?></a>
																</li>
																<?php
																$i++;
																}
																?>
																<?php
																}
																else{
																echo "No result found";
																}
																?>

															</ul>
															<!-- CATEGORIES LIST : end -->

														</nav>
														<!-- POST ARCHIVE CATEGORIES : end -->

													</div>
													<?php
												if (isset($_GET['page_no']) && $_GET['page_no']!="") {
												$page_no = $_GET['page_no'];
												} else {
													$page_no = 1;
													}

													$total_records_per_page = 9;
													$offset = ($page_no-1) * $total_records_per_page;
													$previous_page = $page_no - 1;
													$next_page = $page_no + 1;
													$adjacents = "2";

													$result_count = mysqli_query(
														$conn,
														"SELECT COUNT(*) As total_records FROM `blogs`"
														);
														$total_records = mysqli_fetch_array($result_count);
														$total_records = $total_records['total_records'];
														$total_no_of_pages = ceil($total_records / $total_records_per_page);
														$second_last = $total_no_of_pages - 1; // total pages minus 1
													
                               						 $result = mysqli_query($conn,"SELECT * FROM blogs INNER JOIN blg_category ON blogs.category_id = blg_category.id_category LIMIT $offset, $total_records_per_page");
                                					 if (mysqli_num_rows($result) > 0) {
                            						?>
												</header>
												<!-- MAIN HEADER : end -->

												<!-- POST ARCHIVE LIST : begin -->
												<div class="post-archive__list lsvr-grid lsvr-grid--sm-reset lsvr-grid--3-cols lsvr-grid--md-2-cols lsvr-grid--masonry">

													<!-- LIST ITEM : begin -->
													<?php
                               							 $i=0;
                               							 while($row = mysqli_fetch_array($result)) {
                           								 ?>
													<div class="post-archive__item lsvr-grid__col">

														<!-- POST : begin -->
														<article class="post post--has-thumbnail">
															<div class="post__inner">

																<!-- POST THUMBNAIL : begin -->
																<p class="post__thumbnail post__thumbnail--cropped">
																	<a href="/detail/blog-detail?id=<?php echo $row["id_blogs"] ?>" class="post__thumbnail-link post__thumbnail-link--cropped" style="background-image: url( '<?php echo 'data:image/png;base64,' . $row["picture"] . ''; ?>' );">
																		<span class="screen-reader-text"><?php echo $row["title"] ?></span>
																	</a>
																</p>
																<!-- POST THUMBNAIL : end -->

																<!-- POST CONTAINER : begin -->
																<div class="post__container">

																	<!-- POST HEADER : begin -->
																	<header class="post__header">

																		<!-- POST CATEGORIES : begin -->
																		<p class="post__categories" title="Category">
																			<span class="post__terms post__terms--category">
																				<a href="" class="post__term-link"><?php echo $row["cname"] ?></a>
																			</span>
																		</p>
																		<!-- POST CATEGORIES : end -->

																		<!-- POST TITLE : begin -->
																		<h2 class="post__title">
																			<a href="/detail/blog-detail?id=<?php echo $row["id_blogs"] ?>" class="post__title-link" rel="bookmark"><?php echo $row["title"]; ?></a>
																		</h2>
																		<!-- POST TITLE : end -->

																		<!-- POST META : begin -->
																		<ul class="post-meta" aria-label="Post Meta">

																			<!-- POST DATE : begin -->
																			<li class="post-meta__item post-meta__item--date"><?php echo $row["created_at"]; ?></li>
																			<!-- POST DATE : end -->

																			<!-- POST AUTHOR : begin -->
																			<li class="post-meta__item post__meta-item--author">
																				<a href="" class="post-meta__item-link" rel="author"><?php echo $row["blog_author"]; ?></a>
																			</li>
																			<!-- POST AUTHOR : end -->

																		</ul>
																		<!-- POST META : end -->

																	</header>
																	<!-- POST HEADER : end -->

																	<!-- POST PERMALINK : begin -->
																	<p class="post-permalink">
																		<a href="/detail/blog-detail?id=<?php echo $row["id_blogs"] ?>" class="post-permalink__link" rel="bookmark">
																			<span class="post-permalink__link-label">Turpināt lasīt</span>
																			<span class="post-permalink__link-icon" aria-hidden="true"></span>
																		</a>
																	</p>
																	<!-- POST PERMALINK : end -->

																</div>
																<!-- POST CONTAINER : end -->

															</div>
														</article>
						</div>
						<?php
                               							 $i++;} ?>
<?php
                            }
                            else{
                            echo "No result found";
                            }
                        ?>
													</div>
													<!-- LIST ITEM : end -->

												</div>
												<!-- POST ARCHIVE LIST : end -->

												<!-- PAGINATION : begin -->
												<nav class="post-pagination">
													<h6 class="screen-reader-text">Posts navigation</h6>
													<ul class="post-pagination__list">
													 	
														<li class=" post-pagination__item post-pagination__item--prev">
															<a  <?php if($page_no > 1){
															echo "href='?page_no=$previous_page'";
															} ?> class="post-pagination__item-link">Previous</a>
														</li>

														<?php
															if ($total_no_of_pages <= 10){  	 
															for ($counter = 1; $counter <= $total_no_of_pages; $counter++){
															if ($counter == $page_no) {
															echo "<li class='post-pagination__item post-pagination__item--number post-pagination__item--active'><a class='post-pagination__item-link'>$counter</a></li>";	
																	}else{
																echo "<li class='post-pagination__item post-pagination__item--number'><a href='?page_no=$counter' class='post-pagination__item-link'>$counter</a></li>";
																		}
																}
														}
														elseif ($total_no_of_pages > 10){
															if($page_no <= 4) {			
																for ($counter = 1; $counter < 8; $counter++){		 
																   if ($counter == $page_no) {
																	echo "<li class='post-pagination__item post-pagination__item--number post-pagination__item--active'><a class='post-pagination__item-link'>$counter</a></li>";		
																	   }else{
																		echo "<li class='post-pagination__item post-pagination__item--number'><a href='?page_no=$counter' class='post-pagination__item-link'>$counter</a></li>";
																			   }
															   }
															   echo "<li class='post-pagination__item post-pagination__item--number'><a class='post-pagination__item-link'>...</a></li>";
															   echo "<li class='post-pagination__item post-pagination__item--number'><a href='?page_no=$second_last' class='post-pagination__item-link'>$second_last</a></li>";
															   echo "<li class='post-pagination__item post-pagination__item--number'><a href='?page_no=$total_no_of_pages' class='post-pagination__item-link'>$total_no_of_pages</a></li>";
															   }
															elseif($page_no > 4 && $page_no < $total_no_of_pages - 4) {		 
																echo "<li class='post-pagination__item post-pagination__item--number'><a href='?page_no=1' class='post-pagination__item-link'>1</a></li>";
															   echo "<li class='post-pagination__item post-pagination__item--number'><a href='?page_no=2' class='post-pagination__item-link'>2</a></li>";
															   echo "<li class='post-pagination__item post-pagination__item--number'><a class='post-pagination__item-link'>...</a></li>";
																for (
																	 $counter = $page_no - $adjacents;
																	 $counter <= $page_no + $adjacents;
																	 $counter++
																	 ) {		
																	 if ($counter == $page_no) {
																		echo "<li class='post-pagination__item post-pagination__item--number post-pagination__item--active'><a class='post-pagination__item-link'>$counter</a></li>";		
																	}else{
																	 echo "<li class='post-pagination__item post-pagination__item--number'><a href='?page_no=$counter' class='post-pagination__item-link'>$counter</a></li>";
																			}               
																	   }
																	   echo "<li class='post-pagination__item post-pagination__item--number'><a class='post-pagination__item-link'>...</a></li>";
																echo "<li class='post-pagination__item post-pagination__item--number'><a href='?page_no=$second_last' class='post-pagination__item-link'>$second_last</a></li>";
																echo "<li class='post-pagination__item post-pagination__item--number'><a href='?page_no=$total_no_of_pages' class='post-pagination__item-link'>$total_no_of_pages</a></li>";
																}
																else {
																	echo "<li class='post-pagination__item post-pagination__item--number'><a href='?page_no=1' class='post-pagination__item-link'>1</a></li>";
															   echo "<li class='post-pagination__item post-pagination__item--number'><a href='?page_no=2' class='post-pagination__item-link'>2</a></li>";
															   echo "<li class='post-pagination__item post-pagination__item--number'><a class='post-pagination__item-link'>...</a></li>";
																	for (
																		 $counter = $total_no_of_pages - 6;
																		 $counter <= $total_no_of_pages;
																		 $counter++
																		 ) {
																		 if ($counter == $page_no) {
																			echo "<li class='post-pagination__item post-pagination__item--number post-pagination__item--active'><a class='post-pagination__item-link'>$counter</a></li>";		
																		}else{
																		 echo "<li class='post-pagination__item post-pagination__item--number'><a href='?page_no=$counter' class='post-pagination__item-link'>$counter</a></li>";
																				}                    
																		 }
																		}
																	}
														?>
														
														<li class=" post-pagination__item post-pagination__item--next">
															<a <?php if($page_no < $total_no_of_pages) {
															echo "href='?page_no=$next_page'";
															} ?> class="post-pagination__item-link">Next</a>
														</li>
													
													</ul>

												</nav>
												<!-- PAGINATION : end -->

											</div>
											<!-- POST ARCHIVE : end -->

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