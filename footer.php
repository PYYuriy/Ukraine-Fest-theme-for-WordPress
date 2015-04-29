<div class="footer">
        	
            <div class="foot-cpu">
           	  
            	<p><a href="<? echo home_url();?>"><span>Ukrain Fest</span></a>
          	  </p>
            	<p>Ukrain Fest 2014 <br/>
                   Всі порава захищені<br/>
				           Email:<?bloginfo('admin_email')?> <!-- виведеннч пошти з wordpresu-->
                </p>
            </div>
            
<? if(!dynamic_sidebar('footer')): ?> <!--виведнння категорій в футер-->
    <div class="foot-menu-kat">
      <h2>Категорії</h2>
    </div>
<? endif; ?> 
            <!--  
            <div class="foot-menu-kat">
            	<h2>Категорії</h2>
                <ul>
                	<li>- <a href="#">Івано-Фраківськ</a></li>        
                    <li>- <a href="#">Одеса</a></li>
                    <li>- <a href="#">Львів</a></li>
                    <li>- <a href="#">Київ</a></li>
                    <li>- <a href="#">Харків</a></li>
           	  </ul>
             </div> 
              -->
             
    <div class="foot-stranicu">
             	<h2>Сторінки</h2>
                <?wp_nav_menu(array(
                'theme_location'=>'menu', /* передаються стилі menu */
                'container'=>false, /* забирається зовнішній контейнера */
                'menu_class'=>'', /* Обнулюємо класс меню */
                'before'=>'- ' 
                )); ?> <!-- <<<<Звернення до меню яке було зроблене в WP аналогічно як і в heder прочто поміняли значеннч в якоств footer -->	
               <!-- 
               <ul>
        			<li> <a href="#">Головна</a></li>
           			<li> <a href="#">Автор</a></li>
            		<li> <a href="#">Контакти</a></li>
             	</ul> 
                -->        
    </div>
     </div>  
 
</div>
<? wp_footer();?>
</body>
</html>
