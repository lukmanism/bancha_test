<div class="incomings index">
	<h2><?php echo __('Incomings'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('leads'); ?></th>
			<th><?php echo $this->Paginator->sort('campaign'); ?></th>
			<th><?php echo $this->Paginator->sort('email'); ?></th>
			<th><?php echo $this->Paginator->sort('ip'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($incomings as $incoming): ?>
	<tr>
		<td><?php echo h($incoming['Incoming']['id']); ?>&nbsp;</td>
		<td><?php echo h($incoming['Incoming']['leads']); ?>&nbsp;</td>
		<td><?php echo h($incoming['Incoming']['campaign']); ?>&nbsp;</td>
		<td><?php echo h($incoming['Incoming']['email']); ?>&nbsp;</td>
		<td><?php echo h($incoming['Incoming']['ip']); ?>&nbsp;</td>
		<td><?php echo h($incoming['Incoming']['created']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $incoming['Incoming']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $incoming['Incoming']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $incoming['Incoming']['id']), null, __('Are you sure you want to delete # %s?', $incoming['Incoming']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>

	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Incoming'), array('action' => 'add')); ?></li>
	</ul>
</div>
