<!DOCTYPE html>
<html lang="en-US">
<?php include_once($_SERVER["DOCUMENT_ROOT"]."/database_config.php"); 
			require($_SERVER["DOCUMENT_ROOT"]."/header.php");
            ?>
			<!-- HEADER : end -->

			<!-- CORE : begin -->
			<div id="core" class="core--narrow">
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
											<div class="post-archive lsvr_document-post-page lsvr_document-post-archive lsvr_document-post-archive--categorized-attachments">

												<!-- MAIN HEADER : begin -->
												<header class="main-header">
													<div class="main-header__inner">

														<h1 class="main-header__title">Dokumenti</h1>

														<div class="main-header__subtitle">
															<p>Accounting or accountancy is the measurement, processing, and communication of financial and non financial information.</p>
														</div>
														
													</div>
												</header>
												<!-- MAIN HEADER : end -->

												<!-- CATEGORIZED ATTACHMENTS : begin -->
												<div class="lsvr_document-attachments" data-label-expand-submenu="Expand list" data-label-collapse-submenu="Collapse list">

												<?php
														$result3 = mysqli_query($conn,"SELECT * FROM doc_category");
														if (mysqli_num_rows($result3) > 0) {
														$i=0
													?>
													<?php while($row = mysqli_fetch_array($result3)) { ?>
												
													<!-- LIST LEVEL 1 : begin -->
													<ul class="lsvr_document-attachments__children lsvr_document-attachments__children--level-1">
													
														<!-- LIST ITEM : begin -->
														<li class="lsvr_document-attachments__item lsvr_document-attachments__item--folder lsvr_document-attachments__item--level-1">

															<div class="lsvr_document-attachments__item-link-holder lsvr_document-attachments__item-link-holder--folder">
																<span class="lsvr_document-attachments__item-icon lsvr_document-attachments__item-icon--folder" aria-hidden="true"></span>
																<a class="lsvr_document-attachments__item-link lsvr_document-attachments__item-link--folder"><?php echo $row['cname']; ?></a>
															</div>

															<button type="button" class="lsvr_document-attachments__item-toggle" aria-label="Expand list">
																<span class="lsvr_document-attachments__item-toggle-icon" aria-hidden="true"></span>
															</button>

															<!-- LIST LEVEL 2 : begin -->
															<ul class="lsvr_document-attachments__children lsvr_document-attachments__children--level-2">

															<?php
														$result2 = mysqli_query($conn,"SELECT * FROM documents INNER JOIN doc_category ON documents.category_id = doc_category.id_category");
														if (mysqli_num_rows($result2) > 0) {
														$i=0
														
													?>
													<?php while($row = mysqli_fetch_array($result2)) { ?>

																<!-- LIST ITEM : begin -->
																<li class="lsvr_document-attachments__item lsvr_document-attachments__item--file lsvr_document-attachments__item--level-2">

																	<div class="lsvr_document-attachments__item-link-holder lsvr_document-attachments__item-link-holder--file">

																		<span class="lsvr_document-attachments__item-icon lsvr_document-attachment-icon" aria-hidden="true"></span>
																		<a href="../views/archive/download-file.php?id=<?php echo $row['id_doc'];?>" class="lsvr_document-attachments__item-link lsvr_document-attachments__item-link--file"><?php echo $row['file_namee']; ?></a>

																		<span class="lsvr_document-attachments__item-size-wrapper" role="group">
																			<span class="screen-reader-text">File size:</span>
																			<span class="lsvr_document-attachments__item-size"><?php echo $row['file_size'] >> 10; ?>kb</span>
																		</span>

																	</div>

																</li>
																<!-- LIST ITEM : end -->
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
															<!-- LIST LEVEL 2 : end -->

														</li>
														<!-- LIST ITEM : end -->
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
													<!-- LIST LEVEL 1 : end -->

												</div>
												<!-- CATEGORIZED ATTACHMENTS : end -->

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