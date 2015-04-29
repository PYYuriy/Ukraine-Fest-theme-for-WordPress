<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="<? bloginfo('stylesheet_url') ?>
  "/>
  <title><?bloginfo('name');wp_title(); ?></title>
  <? wp_head();?></head>

<body>
  <div class="main">

    <!-- Початок шапки сайту-->

    <div class="head">
      <a href="<? echo home_url();?>
        "> <i><span>U</span>
          krain
          <span>F</span>
          est</i> 
      </a>
    </div>

    <div class="contant-main">

      <?wp_nav_menu(array('theme_location'=>
      'menu','container'=>false)); ?>
      <!-- <<<<Звернення до меню яке було зроблене в ВП-->
      <form class="search-main" action="<?echo home_url('/');//удосконалення пошуки при включені додаткових функцій?>
        " method="">
        <input class="search-txt" type="text" name="s"/>
        <input class="search-btn" type="image" src="<? bloginfo('template_url') ?>/imges/менюvc.jpg" /></form>

      <!--<ul class="menu">
      <li>
        <a href="#">Головна</a>
      </li>
      <li>
        <a href="#">Автор</a>
      </li>
      <li>
        <a href="#">Контакти</a>
      </li>

    </ul>
    -->
    <!-- кінець шапки сайту-->
    <!-- cлайдер -->
    <div id="slider-wrapper">
      <div class="inner-wrapper">
        <input checked type="radio" name="slide" class="control" id="Slide1"/>
        <label for="Slide1" id="s1"></label>
        <input type="radio" name="slide" class="control" id="Slide2"/>
        <label for="Slide2" id="s2"></label>
        <input type="radio" name="slide" class="control" id="Slide3"/>
        <label for="Slide3" id="s3"></label>
        <input type="radio" name="slide" class="control" id="Slide4"/>
        <label for="Slide4" id="s4"></label>

        <!--!!!!!!?????не виводить чомусь?????!!!!
            
            <input type="radio" name="slide" class="control" id="Slide5"/>
        <label for="Slide5" id="s5"></label>
        <input type="radio" name="slide" class="control" id="Slide6"/>

        <label for="Slide6" id="s6"></label>
        !!!!!!?????не виводить чомусь?????!!!!!!-->
        <div class="overflow-wrapper">

          <a class="slide" href="">
            <img src="<? bloginfo('template_url') ?>/slayder/img/Italy.jpg"/></a>
          <a class="slide" href="">
            <img src="<? bloginfo('template_url') ?>/slayder/img/Germany.jpg"/></a>
          <a class="slide" href="">
            <img src="<? bloginfo('template_url') ?>/slayder/img/Francija.jpg"/></a>
          <a class="slide" href="">
            <img src="<? bloginfo('template_url') ?>/slayder/img/GB.jpg"/></a>
          <a class="slide" href="">
            <img src="<? bloginfo('template_url') ?>/slayder/img/Egipat.jpg"/></a>
          <a class="slide" href="">
            <img src="<? bloginfo('template_url') ?>/slayder/img/АОЕ.jpg"/></a>

        </div>
      </div>
    </div>
    <!--end cлайдер-->