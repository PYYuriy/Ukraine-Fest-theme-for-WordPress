 <?php get_header();?> <!-- <<<<<<<<<<<<<<<<< викдлик шапки сайту-->
<!-- початок контенту-->        
       <div class="content" > 
<h2 class="page_title">Результати пошуку: </h2>
<? if ( have_posts() ) : while (have_posts() ) : the_post(); ?>
  
   <!--1-й пост-->
            <div class="post-main">
                <h1> <a href="<? the_permalink(); ?>"> <? the_title(); ?> </a><span></span>(<? the_time('j.m.y') ?>)</span></h1>
                <div class="post">
                <? the_post_thumbnail ('full','class=imgstyle'); ?> <!--вивкденян мініатюр -->
                <? the_excerpt();    ?> <!--виклик цитати-->
 <p> <a href="<? the_permalink(); ?>" > Читати далі</a> </p> 
                
                </div>
             </div>
<!--1-й пост end-->            
   <?endwhile; ?> 
<!-- Підключення можливості відображати декілька сторінок-->
<div class="pagination"> 
<?php
//global $wp_query;

$big = 999999999; // need an unlikely integer

echo paginate_links( array(
  'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
  'format' => '?paged=%#%',
  'current' => max( 1, get_query_var('paged') ),// номер сторінки
  'total' => $wp_query->max_num_pages,// маусимальна кількість сторінок
  'prev_text'=>'&laquo',
  'next_text'=>'&raquo',
) );
?>
</div>
<!-- end Підключення можливості відображати декілька сторінок-->
   <?else: ?> 
<p> По запиту нічого не знайдено</p>
   <? endif; ?>
               
       </div> 
      
        <!-- вікно категорії-->
            <? get_sidebar(); ?> <!--<<<<<<<<< виклик файлу sidebar(категорії)-->
        <!--end вікно категорії-->

  
   </div>
    
    <!--низ сайту-->
        <? get_footer();?> <!-- викликає низ сайту-->  
    <!-- end низ сайту-->      

 