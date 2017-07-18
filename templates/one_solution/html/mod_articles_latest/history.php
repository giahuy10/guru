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

		
				<?php $i = 1;foreach ($list as $item) : ?>
						<?php $images  = json_decode($item->images);?>
					   <li <?php if ($i %2 == 0) echo 'class="timeline-inverted"';?>>
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="<?php echo $images->image_intro;?>" alt="<?php echo $item->title?>">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4><?php echo $item->title?></h4>
                                    <h4 class="subheading"><?php echo $item->introtext?></h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted"><?php echo $item->fulltext?></p>
                                </div>
                            </div>
                        </li>
						<?php $i++;?>
                      
                     
				<?php endforeach; ?>
          
			