<?php

the_date();
the_tags('<span class="tag"><i class="fa fa-tag"></i>', '</span><span class="tag"><i class="fa fa-tag"></i>', '</span>');
comments_number();

the_content();

comments_template();

?>