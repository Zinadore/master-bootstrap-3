<?php
/**
 * @version    2.7.x
 * @package    K2
 * @author     JoomlaWorks http://www.joomlaworks.net
 * @copyright  Copyright (c) 2006 - 2016 JoomlaWorks Ltd. All rights reserved.
 * @license    GNU/GPL license: http://www.gnu.org/copyleft/gpl.html
 */

// no direct access
defined('_JEXEC') or die;

?>
<!-- Start K2 Category Layout -->
<div id="k2Container" class="itemListView">
	<?php if(isset($this->category) || ( $this->params->get('subCategories') && isset($this->subCategories) && count($this->subCategories) )): ?>
			<!-- Blocks for current category and subcategories -->
			<div class="itemListCategoriesBlock row flexbox">
				<?php if(isset($this->category) && ( $this->params->get('catImage') || $this->params->get('catTitle') || $this->params->get('catDescription') || $this->category->event->K2CategoryDisplay )): ?>
					<!-- Category block -->
					<div class="itemListCategory">
						<?php if(isset($this->addLink)): ?>
							<!-- Item add link -->
							<span class="catItemAddLink">
								<a data-k2-modal="edit" href="<?php echo $this->addLink; ?>">
									<?php echo JText::_('K2_ADD_A_NEW_ITEM_IN_THIS_CATEGORY'); ?>
								</a>
							</span>
						<?php endif; ?>

						<?php if($this->params->get('catImage') && $this->category->image): ?>
							<!-- Category image -->
							<img alt="<?php echo K2HelperUtilities::cleanHtml($this->category->name); ?>" src="<?php echo $this->category->image; ?>" style="width:<?php echo $this->params->get('catImageWidth'); ?>px; height:auto;" />
						<?php endif; ?>

						<?php if($this->params->get('catTitle')): ?>
							<!-- Category title -->
							<h2>
								<?php echo $this->category->name; ?>
								<?php if($this->params->get('catTitleItemCounter')) echo ' ('.$this->pagination->total.')'; ?>
							</h2>
						<?php endif; ?>

						<?php if($this->params->get('catDescription')): ?>
							<!-- Category description -->
							<h3>
								<?php echo $this->category->description; ?> something about this category
							</h3>
						<?php endif; ?>

						<!-- K2 Plugins: K2CategoryDisplay -->
						<?php echo $this->category->event->K2CategoryDisplay; ?>
					</div>
				<?php endif; ?>
			</div>
			<?php if($this->params->get('subCategories') && isset($this->subCategories) && (count($this->subCategories)>0)): ?>
					<!-- Subcategories -->
					<div class="itemListSubCategories row flexbox">
						<?php foreach($this->subCategories as $key=>$subCategory): ?>
							<div class="subCategoryContainer">
								<div class="subCategory">
									<?php if($this->params->get('subCatImage') && $subCategory->image): ?>
										<!-- Subcategory image -->
										<a class="subCategoryImage" href="<?php echo $subCategory->link; ?>">
											<img alt="<?php echo K2HelperUtilities::cleanHtml($subCategory->name); ?>" src="<?php echo $subCategory->image; ?>" />
										</a>
									<?php endif; ?>

									<?php if($this->params->get('subCatTitle')): ?>
										<!-- Subcategory title -->
										<h2>
											<a href="<?php echo $subCategory->link; ?>">
												<?php echo $subCategory->name; ?>
												<?php if($this->params->get('subCatTitleItemCounter')) echo ' ('.$subCategory->numOfItems.')'; ?>
											</a>
										</h2>
									<?php endif; ?>

									<?php if($this->params->get('subCatDescription')): ?>
										<!-- Subcategory description -->
										<div>
											<?php echo $subCategory->description; ?>
										</div>
									<?php endif; ?>

									<!-- Subcategory more... -->
									<a class="subCategoryMore" href="<?php echo $subCategory->link; ?>">
										<?php// echo JText::_('K2_VIEW_ITEMS'); ?>
									</a>
								</div>
							</div>
						<?php endforeach; ?>
					</div>
				<?php endif; ?>
		<?php endif; ?>

		<?php if((isset($this->leading) || isset($this->primary) || isset($this->secondary) || isset($this->links)) && (count($this->leading) || count($this->primary) || count($this->secondary) || count($this->links))): ?>
			<!-- Item list -->
			<div class="itemList">
				<?php if(isset($this->leading) && count($this->leading)): ?>
					<!-- Leading items -->
					<div id="itemListLeading">
						<?php foreach($this->leading as $key=>$item): ?>
							<div class="itemContainer">
								<?php
									// Load category_item.php by default
									$this->item = $item;
									echo $this->loadTemplate('item');
								?>
							</div>
						<?php endforeach; ?>
					</div>
				<?php endif; ?>

				<?php if(isset($this->primary) && count($this->primary)): ?>
					<!-- Primary items -->
					<div id="itemListPrimary">
						<?php foreach($this->primary as $key=>$item): ?>
							<div class="itemContainer">
								<?php
									// Load category_item.php by default
									$this->item = $item;
									echo $this->loadTemplate('item');
								?>
							</div>
						<?php endforeach; ?>
					</div>
				<?php endif; ?>

				<?php if(isset($this->secondary) && count($this->secondary)): ?>
					<!-- Secondary items -->
					<div id="itemListSecondary">
						<?php foreach($this->secondary as $key=>$item): ?>
							<div class="itemContainer">
								<?php
									// Load category_item.php by default
									$this->item = $item;
									echo $this->loadTemplate('item');
								?>
							</div>
						<?php endforeach; ?>
					</div>
				<?php endif; ?>

				<?php if(isset($this->links) && count($this->links)): ?>
					<!-- Link items -->
					<div id="itemListLinks">
						<h4>
							<?php echo JText::_('K2_MORE'); ?>
						</h4>
						<?php foreach($this->links as $key=>$item): ?>
							<div class="itemContainer">
								<?php
									// Load category_item.php by default
									$this->item = $item;
									echo $this->loadTemplate('item');
								?>
							</div>
						<?php endforeach; ?>
					</div>
				<?php endif; ?>
			</div>

		<!-- Pagination -->
		<?php if($this->pagination->getPagesLinks()): ?>
		<div class="k2Pagination">
			<?php if($this->params->get('catPagination')) echo $this->pagination->getPagesLinks(); ?>
			<?php if($this->params->get('catPaginationResults')) echo $this->pagination->getPagesCounter(); ?>
		</div>
		<?php endif; ?>
	<?php endif; ?>
</div>

<!-- End K2 Category Layout -->
