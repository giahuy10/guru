<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_articles_latest
 *
 * @copyright   Copyright (C) 2005 - 2017 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;
?>

			<div class="row">
				<?php foreach ($list as $item) : ?>
				
				
					<div class="col-md-4 col-sm-6 portfolio-item">
						<a href="/#portfolioModal<?php echo $item->id?>" class="portfolio-link" data-toggle="modal">
							<div class="portfolio-hover">
								<div class="portfolio-hover-content">
									<i class="fa fa-plus fa-3x"></i>
								</div>
							</div>
							<?php $images  = json_decode($item->images);?>
							<?php $urls  = json_decode($item->urls);?>

						<div class="project-img text-center">
							<img src="<?php echo $images->image_intro;?>"  alt="<?php echo $item->title?>">
						</div>
						</a>
						<div class="portfolio-caption">
							<h4><?php echo $item->title?></h4>
							<p class="text-muted"><?php echo $item->category_title?></p>
						</div>
					</div>
					  <!-- Portfolio Modals -->
						<!-- Use the modals below to showcase details about your portfolio projects! -->

						<!-- Portfolio Modal 1 -->
						<div class="portfolio-modal modal fade" id="portfolioModal<?php echo $item->id?>" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="close-modal" data-dismiss="modal">
										<div class="lr">
											<div class="rl">
											</div>
										</div>
									</div>
									<div class="container">
										<div class="row">
											<div class="col-lg-8 col-lg-offset-2">
												<div class="modal-body">
													<!-- Project Details Go Here -->
													<h2>Project Name</h2>
													<p class="item-intro text-muted"><?php echo $item->title?></p>
													
													<?php echo $item->introtext?>
													<a href="<?php echo $urls->urla;?>" class="btn btn-primary" target="_blank"><i class="fa fa-eye" aria-hidden="true"></i> View Demo</a>
													<button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
				<?php endforeach; ?>
            </div>
			<a class="btn btn-xl" href="#">See More Projects</a>