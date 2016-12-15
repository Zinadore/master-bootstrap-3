<?php
/**
 * @version		$Id: category_item.php 1812 2013-01-14 18:45:06Z lefteris.kavadas $
 * @package		K2
 * @author		JoomlaWorks http://www.joomlaworks.net
 * @copyright	Copyright (c) 2006 - 2013 JoomlaWorks Ltd. All rights reserved.
 * @license		GNU/GPL license: http://www.gnu.org/copyleft/gpl.html
 */

// no direct access
defined('_JEXEC') or die;

// Define default image size (do not change)
K2HelperUtilities::setDefaultImage($this->item, 'itemlist', $this->params);

?>
<!-- Start K2 Item Layout -->
<div class="catItemView group<?php echo ucfirst($this->item->itemGroup); ?><?php echo ($this->item->featured) ? ' catItemIsFeatured' : ''; ?><?php if($this->item->params->get('pageclass_sfx')) echo ' '.$this->item->params->get('pageclass_sfx'); ?>">

	<!-- Plugins: BeforeDisplay -->
	<?php echo $this->item->event->BeforeDisplay; ?>

	<!-- K2 Plugins: K2BeforeDisplay -->
	<?php echo $this->item->event->K2BeforeDisplay; ?>

	<div class="catItemHeader">
		<?php if($this->item->params->get('catItemTitle')): ?>
			<!-- Item title -->
			<h3 class="catItemTitle">
				<?php if(isset($this->item->editLink)): ?>
					<!-- Item edit link -->
					<span class="catItemEditLink">
						<a class="modal" rel="{handler:'iframe',size:{x:990,y:550}}" href="<?php echo $this->item->editLink; ?>">
							<?php echo JText::_('K2_EDIT_ITEM'); ?>
						</a>
					</span>
				<?php endif; ?>

				<?php if ($this->item->params->get('catItemTitleLinked')): ?>
					<a href="<?php echo $this->item->link; ?>">
						<?php echo $this->item->title; ?>
					</a>
				<?php else: ?>
					<?php echo $this->item->title; ?>
				<?php endif; ?>

				<?php if($this->item->params->get('catItemFeaturedNotice') && $this->item->featured): ?>
				<!-- Featured flag -->
				<span>
					<sup>
						<?php echo JText::_('K2_FEATURED'); ?>
					</sup>
				</span>
				<?php endif; ?>
			</h3>
		<?php endif; ?>

		<?php if($this->item->params->get('catItemAuthor')): ?>
			<!-- Item Author -->
			<span class="catItemAuthor">
				<?php echo K2HelperUtilities::writtenBy($this->item->author->profile->gender); ?> 
				<?php if(isset($this->item->author->link) && $this->item->author->link): ?>
				<a rel="author" href="<?php echo $this->item->author->link; ?>"><?php echo $this->item->author->name; ?></a>
				<?php else: ?>
				<?php echo $this->item->author->name; ?>
				<?php endif; ?>
			</span>
		<?php endif; ?>
		<?php if($this->item->params->get('catItemExtraFields') && count($this->item->extra_fields)): ?>
			<!-- Item extra fields -->
			<div class="item_info_section">
				<ul>
					<?php foreach ($this->item->extra_fields as $key=>$extraField): ?>
						<?php if($extraField->value != ''): ?>
							<?php if($extraField->name === "Συγγραφέας" || $extraField->name === "Εκδότης" || 
							$extraField->name === "Εικονογράφηση"): ?>
								<li class="item_info">
									<?php if($extraField->type == 'header'): ?>
										<h4 class="item_info_title"><?php echo $extraField->name; ?></h4>
									<?php else: ?>
										<span class="item_info_title"><?php echo $extraField->name; ?></span>
										<span class="item_info_value"><?php echo $extraField->value; ?></span>
									<?php endif; ?>
								</li>
							<?php endif; ?>
						<?php endif; ?>
					<?php endforeach; ?>
				</ul>>
			</div>
	  <?php endif; ?>
  </div>

  <!-- Plugins: AfterDisplayTitle -->
  <?php echo $this->item->event->AfterDisplayTitle; ?>
  <!-- K2 Plugins: K2AfterDisplayTitle -->
  <?php echo $this->item->event->K2AfterDisplayTitle; ?>

  <div class="catItemBody">
	  <!-- Plugins: BeforeDisplayContent -->
	  <?php echo $this->item->event->BeforeDisplayContent; ?>
	  <!-- K2 Plugins: K2BeforeDisplayContent -->
	  <?php echo $this->item->event->K2BeforeDisplayContent; ?>

	  <?php if($this->item->params->get('catItemImage') && !empty($this->item->image)): ?>
		<!-- Item Image -->
		<div class="catItemImageBlock">
			<span class="catItemImage">
				<a href="<?php echo $this->item->link; ?>" 
					title="<?php if(!empty($this->item->image_caption)) echo K2HelperUtilities::cleanHtml($this->item->image_caption); else echo K2HelperUtilities::cleanHtml($this->item->title); ?>">
					<img src="<?php echo $this->item->image; ?>" 
					alt="<?php if(!empty($this->item->image_caption)) echo K2HelperUtilities::cleanHtml($this->item->image_caption); else echo K2HelperUtilities::cleanHtml($this->item->title); ?>" />
				</a>
			</span>
		</div>
	  <?php endif; ?>

	  <!-- Plugins: AfterDisplayContent -->
	  <?php echo $this->item->event->AfterDisplayContent; ?>
	  <!-- K2 Plugins: K2AfterDisplayContent -->
	  <?php echo $this->item->event->K2AfterDisplayContent; ?>
  </div>

  <?php if($this->item->params->get('catItemHits') || $this->item->params->get('catItemCategory') || 
	$this->item->params->get('catItemTags') ||
	$this->item->params->get('catItemAttachments')): ?>
	<div class="catItemLinks">
			<?php if($this->item->params->get('catItemHits')): ?>
				<!-- Item Hits -->
				<div class="catItemHitsBlock">
					<span class="catItemHits">
						<?php echo JText::_('K2_READ'); ?> <b><?php echo $this->item->hits; ?></b> <?php echo JText::_('K2_TIMES'); ?>
					</span>
				</div>
			<?php endif; ?>

			<?php if($this->item->params->get('catItemCategory')): ?>
				<!-- Item category name -->
				<div class="catItemCategory">
					<span>
						<?php echo JText::_('K2_PUBLISHED_IN'); ?>
					</span>
					<a href="<?php echo $this->item->category->link; ?>">
						<?php echo $this->item->category->name; ?>
					</a>
				</div>
			<?php endif; ?>

		<?php if($this->item->params->get('catItemTags') && count($this->item->tags)): ?>
			<!-- Item tags -->
			<div class="catItemTagsBlock">
				<span>
					<?php echo JText::_('K2_TAGGED_UNDER'); ?>
				</span>
				<ul class="catItemTags">
					<?php foreach ($this->item->tags as $tag): ?>
						<li>
							<a href="<?php echo $tag->link; ?>">
								<?php echo $tag->name; ?>
							</a>
						</li>
					<?php endforeach; ?>
				</ul>
			</div>
		<?php endif; ?>
	</div>
  <?php endif; ?>

<?php if ($this->item->params->get('catItemReadMore')): ?>
	<!-- Item "read more..." link -->
	<div class="catItemReadMore">
		<a class="k2ReadMore" href="<?php echo $this->item->link; ?>">
			<?php echo JText::_('K2_READ_MORE'); ?>
		</a>
	</div>
<?php endif; ?>


  <!-- Plugins: AfterDisplay -->
  <?php echo $this->item->event->AfterDisplay; ?>
  <!-- K2 Plugins: K2AfterDisplay -->
  <?php echo $this->item->event->K2AfterDisplay; ?>
</div>
<!-- End K2 Item Layout -->
