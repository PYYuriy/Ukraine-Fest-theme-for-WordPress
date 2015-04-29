 
 <!--відображення статтей на окремій сторінці-->

 <?php get_header();?> <!-- <<<<<<<<<<<<<<<<< викдлик шапки сайту-->

<!-- початок контенту-->        
       <div class="content" > 

<? if ( have_posts() ) : while (have_posts() ) : the_post(); ?>
  
   <!--1-й пост-->
            <div class="post-main">
                <h1>  <? the_title(); ?> </a><span></span>(<? the_time('j.m.y') ?>)</span></h1>
                <div class="post">
                <? the_post_thumbnail ('full','class=imgstyle'); ?> <!--вивкденян мініатюр -->
                <? the_content();?> <!-- виведення контенту-->
  </p>
                
                </div>
             </div> 
<!--1-й пост end-->            
<!-- підключення коментаріїв --> 
<? comments_template() ?> 
<!-- підключення коментаріїв end-->  
   <?endwhile; ?> 

   <?else: ?> 

   <!-- # code...-->
   <? endif; ?>
               
       </div> 
	    
        <!-- вікно категорії-->
            <? get_sidebar(); ?> <!--<<<<<<<<< виклик файлу sidebar(категорії)-->
        <!--end вікно категорії-->

  
   </div>
    
    <!--низ сайту-->
        <? get_footer();?> <!-- викликає низ сайту-->  
    <!-- end низ сайту-->      

 