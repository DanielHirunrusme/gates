<?php 


$limit = 100; 

if($page->template() == 'index') {
	$limit = 10;
} 

?>

<ul class="teaser cf">
  <?php foreach(page('projects')->children()->visible()->limit($limit) as $project): ?>
  <li>
    
    <?php if($image = $project->images()->sortBy('sort', 'asc')->first()): ?>
    <a class="image-link" href="<?php echo $project->url() ?>">
      <img src="<?php echo $image->url() ?>" alt="<?php echo $project->title()->html() ?>" >
    </a>
    <?php endif ?>
	<h1><a href="<?php echo $project->url() ?>"><?php echo $project->title()->html() ?> <span class="h2"><?php echo $project->year() ?></span></a></h2>
	<!--
    <h3><a href="<?php echo $project->url() ?>"><?php echo $project->title()->html() ?></a></h3>
    <p><?php echo $project->text()->excerpt(80) ?> <a href="<?php echo $project->url() ?>" class="read-more">View&nbsp;Project&nbsp;→</a></p>
	-->
  </li>
  <?php endforeach ?>
</ul>


