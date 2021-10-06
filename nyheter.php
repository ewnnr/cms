<div class="nyhet1container">
        <section>
            <h2>NYHETER</h2>
            <article class="enskild">
<?php
          

if (have_posts()) :
   while (have_posts()) :
      the_post();
      the_content();
   endwhile;
endif;

get_footer(); 
?>