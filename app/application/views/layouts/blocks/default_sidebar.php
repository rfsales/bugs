<h2>
	<?php if(Auth::user()->permission('project-create')): ?>
	<a href="<?php echo URL::to('projects/new'); ?>" class="add" title="New Project"><?php __('tinyissue.new'); ?></a>
	<?php endif; ?>
	<?php echo __('tinyissue.active_projects');?>
	<span><?php echo __('tinyissue.active_projects_description');?></span>
</h2>

<ul>
	<?php 
		$Proj = array();
		$SansAccent = array();
		foreach(Project\User::active_projects() as $row) {
			$Proj[$row->to()] = $row->name.'&nbsp;<span class="info-open-issues" title="Number of Open Tickets">('.$row->count_open_issues().')</span>';
		}
		foreach ($Proj as $ind => $val ){
			$SansAccent[$ind] = htmlentities($val, ENT_NOQUOTES, 'utf-8');
			$SansAccent[$ind] = preg_replace('#&([A-za-z])(?:uml|circ|tilde|acute|grave|cedil|ring);#', '\1', $SansAccent[$ind]);
			$SansAccent[$ind] = preg_replace('#&([A-za-z]{2})(?:lig);#', '\1', $SansAccent[$ind]);
			$SansAccent[$ind] = preg_replace('#&[^;]+;#', '', $SansAccent[$ind]);		
		}
		asort($SansAccent); 
	?>


	<?php foreach($SansAccent as $ind => $val): ?>
	<li>
		<a href="<?php echo $ind; ?>"><?php echo $Proj[$ind]; ?> </a>
	</li>
	<?php endforeach ?>

</ul>
