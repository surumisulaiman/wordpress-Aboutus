
<?php 
get_header(); 


while(have_posts()) {
    the_post();  ?>  
<div class="main_conatiner">
      <div class="mainphoto">
           <img src="<?php echo get_theme_file_uri('/images/main.jpg'); ?>" alt="image">
      </div>
    <div class="about_us">
      <h2 class="about_heading"><?php the_title(); ?></h2>
      <p class="sub_line">We know in a SaaS <strong>startup</strong> journey you’ll come across a lot of marketing hurdles and challenges.</p>
    </div>
      <p class="para"><?php  the_content(); ?><p>
</div>
    <?php } 

get_footer(); 
     
?>
