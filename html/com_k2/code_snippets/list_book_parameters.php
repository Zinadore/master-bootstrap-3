<?php if($this->item->params->get('catItemDateCreated')): ?>
    <!-- Date created -->
    <span class="catItemDateCreated">
        <?php echo JHTML::_('date', $this->item->created , JText::_('K2_DATE_FORMAT_LC2')); ?>
    </span>
<?php endif; ?>


<?php if($this->item->params->get('catItemExtraFields') && count($this->item->extra_fields)): ?>
			<!-- Item extra fields -->
			<div class="catItemExtraFields">
				<h4><?php echo JText::_('K2_ADDITIONAL_INFO'); ?></h4>
				<ul>
					<?php foreach ($this->item->extra_fields as $key=>$extraField): ?>
						<?php if($extraField->value != ''): ?>
							<li class="<?php echo ($key%2) ? "odd" : "even"; ?> type<?php echo ucfirst($extraField->type); ?> group<?php echo $extraField->group; ?>">
								<?php if($extraField->type == 'header'): ?>
									<h4 class="catItemExtraFieldsHeader"><?php echo $extraField->name; ?></h4>
								<?php else: ?>
									<span class="catItemExtraFieldsLabel"><?php echo $extraField->name; ?></span>
									<span class="catItemExtraFieldsValue"><?php echo $extraField->value; ?></span>
								<?php endif; ?>
							</li>
						<?php endif; ?>
					<?php endforeach; ?>
				</ul>>
			</div>
	  <?php endif; ?>


        <?php if($this->item->params->get('catItemVideo') && !empty($this->item->video)): ?>
	<!-- Item video -->
	<div class="catItemVideoBlock">
		<h3>
			<?php echo JText::_('K2_RELATED_VIDEO'); ?>
		</h3>
		<?php if($this->item->videoType=='embedded'): ?>
			<div class="catItemVideoEmbedded">
				<?php echo $this->item->video; ?>
			</div>
		<?php else: ?>
			<span class="catItemVideo"><?php echo $this->item->video; ?></span>
		<?php endif; ?>
	</div>
  <?php endif; ?>

  <?php if($this->item->params->get('catItemImageGallery') && !empty($this->item->gallery)): ?>
  <!-- Item image gallery -->
  <div class="catItemImageGallery">
	  <h4><?php echo JText::_('K2_IMAGE_GALLERY'); ?></h4>
	  <?php echo $this->item->gallery; ?>
  </div>
  <?php endif; ?>

	<?php if($this->item->params->get('catItemCommentsAnchor') && ( ($this->item->params->get('comments') == '2' && !$this->user->guest) || ($this->item->params->get('comments') == '1')) ): ?>
	<!-- Anchor link to comments below -->
	<div class="catItemCommentsLink">
		<?php if(!empty($this->item->event->K2CommentsCounter)): ?>
			<!-- K2 Plugins: K2CommentsCounter -->
			<?php echo $this->item->event->K2CommentsCounter; ?>
		<?php else: ?>
			<?php if($this->item->numOfComments > 0): ?>
			<a href="<?php echo $this->item->link; ?>#itemCommentsAnchor">
				<?php echo $this->item->numOfComments; ?> <?php echo ($this->item->numOfComments>1) ? JText::_('K2_COMMENTS') : JText::_('K2_COMMENT'); ?>
			</a>
			<?php else: ?>
			<a href="<?php echo $this->item->link; ?>#itemCommentsAnchor">
				<?php echo JText::_('K2_BE_THE_FIRST_TO_COMMENT'); ?>
			</a>
			<?php endif; ?>
		<?php endif; ?>
	</div>
	<?php endif; ?>


    
	<?php if($this->item->params->get('catItemDateModified')): ?>
	<!-- Item date modified -->
	<?php if($this->item->modified != $this->nullDate && $this->item->modified != $this->item->created ): ?>
	<span class="catItemDateModified">
		<?php echo JText::_('K2_LAST_MODIFIED_ON'); ?> <?php echo JHTML::_('date', $this->item->modified, JText::_('K2_DATE_FORMAT_LC2')); ?>
	</span>
	<?php endif; ?>
	<?php endif; ?>


    <?php if($this->item->params->get('catItemAttachments') && count($this->item->attachments)): ?>
			<!-- Item attachments -->
			<div class="catItemAttachmentsBlock">
				<span>
					<?php echo JText::_('K2_DOWNLOAD_ATTACHMENTS'); ?>
				</span>
				<ul class="catItemAttachments">
					<?php foreach ($this->item->attachments as $attachment): ?>
						<li>
							<a title="<?php echo K2HelperUtilities::cleanHtml($attachment->titleAttribute); ?>" href="<?php echo $attachment->link; ?>">
								<?php echo $attachment->title ; ?>
							</a>
							<?php if($this->item->params->get('catItemAttachmentsCounter')): ?>
							<span>(<?php echo $attachment->hits; ?> <?php echo ($attachment->hits==1) ? JText::_('K2_DOWNLOAD') : JText::_('K2_DOWNLOADS'); ?>)</span>
							<?php endif; ?>
						</li>
					<?php endforeach; ?>
				</ul>
			</div>
		<?php endif; ?>