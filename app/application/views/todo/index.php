<h3>
	<?php echo __('tinyissue.your_todos'); ?>
	<span><?php echo __('tinyissue.your_todos_description'); ?></span>
</h3>
<?php 
	$config_app = require path('public') . 'config.app.php';
	if (!isset($config_app['Percent'])) { $config_app['Percent'] = array (100,0,10,80,100); }
?>
<div class="pad" id="todo-lanes">
  <?php foreach($lanes as $index => $items):  ?>
  <div class="todo-lane blue-box" id="lane-status-<?php echo $index; ?>" data-status="<?php echo $index; ?>">
    <h4><?php echo $status[$index]; ?> ( <?php echo $config_app['Percent'][$index]; echo (($index == 0) ? '' :  ' - '.($config_app['Percent'][$index+1]-1)); ?> % )</h4>
    <div class="inside-pad todo-lane-inner">
      <?php foreach($items as $todo): ?>
      <div class="todo-list-item <?php if ($index > 0) { echo ' draggable'; } ?>" id="todo-id-<?php echo $todo['issue_id']; ?>" data-issue-id="<?php echo $todo['issue_id']; ?>">
        <div class="todo-list-item-inner">
          <span>#<?php echo $todo['issue_id']; ?></span>
          <a href="<?php echo $todo['issue_link']; ?>"><?php echo $todo['issue_name']; ?></a>&nbsp;<span>( <?php echo $todo['weight']; ?>%)</span>
          <a class="todo-button del" title="<?php echo __('tinyissue.todos_remove'); ?>" data-issue-id="<?php echo $todo['issue_id']; ?>" href="#">[X]</a>
          <div><?php echo $todo['project_name']; ?></div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
  <?php endforeach; ?>
</div>
