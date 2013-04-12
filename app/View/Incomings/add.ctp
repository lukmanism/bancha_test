<div class="incomings form">
<?php echo $this->Form->create('Incoming'); ?>
	<fieldset>
		<legend><?php echo __('Add Incoming'); ?></legend>
	<?php
		echo $this->Form->input('leads');
		echo $this->Form->input('campaign');
		echo $this->Form->input('email');
		echo $this->Form->input('ip');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Incomings'), array('action' => 'index')); ?></li>
	</ul>
</div>
