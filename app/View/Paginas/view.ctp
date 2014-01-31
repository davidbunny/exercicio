
<div id="page-container" class="row">

	<div id="sidebar" class="col-sm-3">
		
		<div class="actions">
			
			<ul class="list-group">			
						<li class="list-group-item"><?php echo $this->Html->link(__('Edit Pagina'), array('action' => 'edit', $pagina['Pagina']['id']), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Form->postLink(__('Delete Pagina'), array('action' => 'delete', $pagina['Pagina']['id']), array('class' => ''), __('Are you sure you want to delete # %s?', $pagina['Pagina']['id'])); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('List Paginas'), array('action' => 'index'), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('New Pagina'), array('action' => 'add'), array('class' => '')); ?> </li>
				
			</ul><!-- /.list-group -->
			
		</div><!-- /.actions -->
		
	</div><!-- /#sidebar .span3 -->
	
	<div id="page-content" class="col-sm-9">
		
		<div class="paginas view">

			<h2><?php  echo __('Pagina'); ?></h2>
			
			<div class="table-responsive">
				<table class="table table-striped table-bordered">
					<tbody>
						<tr>		<td><strong><?php echo __('Id'); ?></strong></td>
		<td>
			<?php echo h($pagina['Pagina']['id']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Title'); ?></strong></td>
		<td>
			<?php echo h($pagina['Pagina']['title']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Content'); ?></strong></td>
		<td>
			<?php echo h($pagina['Pagina']['content']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Description'); ?></strong></td>
		<td>
			<?php echo h($pagina['Pagina']['description']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Slug'); ?></strong></td>
		<td>
			<?php echo h($pagina['Pagina']['slug']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Created'); ?></strong></td>
		<td>
			<?php echo h($pagina['Pagina']['created']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Modified'); ?></strong></td>
		<td>
			<?php echo h($pagina['Pagina']['modified']); ?>
			&nbsp;
		</td>
</tr>					</tbody>
				</table><!-- /.table table-striped table-bordered -->
			</div><!-- /.table-responsive -->
			
		</div><!-- /.view -->

			
	</div><!-- /#page-content .span9 -->

</div><!-- /#page-container .row-fluid -->
