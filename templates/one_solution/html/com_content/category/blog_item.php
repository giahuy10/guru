<?php
/**
 * @package     Joomla.Site
 * @subpackage  com_content
 *
 * @copyright   Copyright (C) 2005 - 2017 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

// Create a shortcut for params.
$params = $this->item->params;
JHtml::addIncludePath(JPATH_COMPONENT . '/helpers/html');
$canEdit = $this->item->params->get('access-edit');
$info    = $params->get('info_block_position', 0);

// Check if associations are implemented. If they are, define the parameter.
$assocParam = (JLanguageAssociations::isEnabled() && $params->get('show_associations'));

?>

	<div class="portfolio-item">
						<a href="/#portfolioModal<?php echo $this->item->id?>" class="portfolio-link" data-toggle="modal">
							<div class="portfolio-hover">
								<div class="portfolio-hover-content">
									<i class="fa fa-plus fa-3x"></i>
								</div>
							</div>
							<?php $images  = json_decode($this->item->images);?>
							<?php $urls  = json_decode($this->item->urls);?>

						<div class="project-img text-center">
							<img src="<?php echo $images->image_intro;?>"  alt="<?php echo $this->item->title?>">
						</div>
						</a>
						<div class="portfolio-caption">
							<h4><?php echo $this->item->title?></h4>
							<p class="text-muted"><?php echo $this->item->category_title?></p>
						</div>
		</div>				
<div class="portfolio-modal modal fade" id="portfolioModal<?php echo $this->item->id?>" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
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
													<p class="item-intro text-muted"><?php echo $this->item->title?></p>
													
													<?php echo $this->item->introtext?>
													<a href="<?php echo $urls->urla;?>" class="btn btn-primary" target="_blank"><i class="fa fa-eye" aria-hidden="true"></i> View Demo</a>
													<button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>