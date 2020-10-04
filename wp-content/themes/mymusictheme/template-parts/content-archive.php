<img src="<?php the_post_thumbnail_url('thumbnail'); ?>">
<?php

the_title();
the_excerpt();


?>

<a class="more-link" href="<?php echo the_permalink();?>">Read more &rarr;</a>; 