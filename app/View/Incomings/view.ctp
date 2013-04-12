<div class="incomings view">
<h2><?php  echo __('Incoming'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($incoming['Incoming']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Leads'); ?></dt>
		<dd>
			<?php echo h($incoming['Incoming']['leads']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Campaign'); ?></dt>
		<dd>
			<?php echo h($incoming['Incoming']['campaign']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($incoming['Incoming']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ip'); ?></dt>
		<dd>
			<?php echo h($incoming['Incoming']['ip']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($incoming['Incoming']['created']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Incoming'), array('action' => 'edit', $incoming['Incoming']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Incoming'), array('action' => 'delete', $incoming['Incoming']['id']), null, __('Are you sure you want to delete # %s?', $incoming['Incoming']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Incomings'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Incoming'), array('action' => 'add')); ?> </li>
	</ul>
</div>
