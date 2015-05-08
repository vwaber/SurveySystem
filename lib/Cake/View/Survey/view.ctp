
<?php echo $this->fetch('title');?>
<?php echo $this->fetch('menu'); ?>			
<!-- Echo the content of the form -->
<?php echo $this->fetch('content'); ?>

<div class="panel">
	<h2><?php echo $this->fetch('sectionTitle'); ?></h2>
	<div class="panelcontent">
		<?php echo $this->fetch('section'); ?>
	</div>
</div>