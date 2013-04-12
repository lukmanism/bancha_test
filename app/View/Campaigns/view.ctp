<div class="campaigns view">
<h2><?php  echo __('Campaign'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($campaign['Campaign']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($campaign['Campaign']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Alias'); ?></dt>
		<dd>
			<?php echo h($campaign['Campaign']['alias']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('External'); ?></dt>
		<dd>
			<?php echo h($campaign['Campaign']['external']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rules'); ?></dt>
		<dd>
			<?php echo h($campaign['Campaign']['rules']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Method'); ?></dt>
		<dd>
			<?php echo h($campaign['Campaign']['method']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Note'); ?></dt>
		<dd>
			<?php echo h($campaign['Campaign']['note']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($campaign['Campaign']['created']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Campaign'), array('action' => 'edit', $campaign['Campaign']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Campaign'), array('action' => 'delete', $campaign['Campaign']['id']), null, __('Are you sure you want to delete # %s?', $campaign['Campaign']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Campaigns'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Campaign'), array('action' => 'add')); ?> </li>
	</ul>
</div>
