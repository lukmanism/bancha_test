<div class="logs view">
<h2><?php  echo __('Log'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($log['Log']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('LeadID'); ?></dt>
		<dd>
			<?php echo h($log['Log']['leadID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('CampaignID'); ?></dt>
		<dd>
			<?php echo h($log['Log']['campaignID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Referer'); ?></dt>
		<dd>
			<?php echo h($log['Log']['referer']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ip'); ?></dt>
		<dd>
			<?php echo h($log['Log']['ip']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Logs'); ?></dt>
		<dd>
			<?php echo h($log['Log']['logs']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Type'); ?></dt>
		<dd>
			<?php echo h($log['Log']['type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($log['Log']['created']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Log'), array('action' => 'edit', $log['Log']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Log'), array('action' => 'delete', $log['Log']['id']), null, __('Are you sure you want to delete # %s?', $log['Log']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Logs'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Log'), array('action' => 'add')); ?> </li>
	</ul>
</div>
