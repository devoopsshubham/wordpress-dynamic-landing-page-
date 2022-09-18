<?php /* Template Name: custom-templete */ 
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>
		Dem Test 	
	</title>
	<?php wp_head(); ?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body id="page" >
<div  id="main_row">
	<div  class="first"><img class="logo_class" src="<?php echo the_field('image2','20');?>" alt="Girl in a jacket" >
<div class="container"> 
  <h2><?php the_field('title1','20');?></h2>
  <p><?php the_field('title1','20');?></p>
  <p><?php the_field('title2','20');?></p>
  <p><?php the_field('title3','20');?></p>
  
</div>
	</div>
	<div class="second"></div>
</div>
<div  id="second_row">
	<div  class="first2"><div class="first_inner"><img class="logo_class1" src="<?php echo the_field('image','20');?>" alt="Girl in a jacket" ></div>
	<div class="second_inner">
	<?php the_field('content','20');?><br />
  <?php the_field('name','20');?> <strong>& </strong><?php the_field('role','20');?>


	</div>
	</div>
	<div class="second2">

<?php echo do_shortcode( '[contact-form-7 id="32" title="Untitled"]'); ?>
	</div>
</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>
