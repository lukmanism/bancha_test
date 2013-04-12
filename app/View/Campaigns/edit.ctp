<div class="campaigns form">
<?php echo $this->Form->create('Campaign'); ?>
	<fieldset>
		<legend><?php echo __('Edit Campaign'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('alias');
		echo $this->Form->input('external');
		echo $this->Form->input('rules');
		echo $this->Form->input('method');
		echo $this->Form->input('note');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Campaign.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Campaign.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Campaigns'), array('action' => 'index')); ?></li>
	</ul>
</div>
