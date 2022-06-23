<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
    <meta charset="<?php bloginfo( 'charset' )?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head()?>
    <title><?php bloginfo( 'name' );?></title>
</head>
<body>
 <!------------------ Header ----------------->
 <header class="header-white">
   <div class="header-white__container container">
      <div class="header-white__body">

         <div class="header-white__logo logo-white">
            <a href="index.html" class="logo-white__link"><i class="icon-logo"></i> <div>Woodtech <br> <span>Architecture</span></div></a>
         </div>

         <div class="header-white__menu menu-white">
         <?php 
                wp_nav_menu( array(
                    'menu'            => '',              // (string) Название выводимого меню (указывается в админке при создании меню, приоритетнее 
                                                          // чем указанное местоположение theme_location - если указано, то параметр theme_location игнорируется)
                    'container'       => '',           // (string) Контейнер меню. Обворачиватель ul. Указывается тег контейнера (по умолчанию в тег div)
                    'container_class' => '',              // (string) class контейнера (div тега)
                    'container_id'    => '',              // (string) id контейнера (div тега)
                    'menu_class'      => 'menu-white__top',          // (string) class самого меню (ul тега)
                    'menu_id'         => '',              // (string) id самого меню (ul тега)
                    'echo'            => true,            // (boolean) Выводить на экран или возвращать для обработки
                    'fallback_cb'     => 'wp_page_menu',  // (string) Используемая (резервная) функция, если меню не существует (не удалось получить)
                    'before'          => '',              // (string) Текст перед <a> каждой ссылки
                    'after'           => '',              // (string) Текст после </a> каждой ссылки
                    'link_before'     => '',              // (string) Текст перед анкором (текстом) ссылки
                    'link_after'      => '',              // (string) Текст после анкора (текста) ссылки
                    'depth'           => 0,               // (integer) Глубина вложенности (0 - неограничена, 2 - двухуровневое меню)
                    'walker'          => '',              // (object) Класс собирающий меню. Default: new Walker_Nav_Menu
                    'theme_location'  => '',               // (string) Расположение меню в шаблоне. (указывается ключ которым было зарегистрировано меню в функции register_nav_menus)
                    'link_class'   => 'menu-white__item',
                    'list_item_class'  => 'menu-white__link'
                ) );
            ?>

            <!-- Burger -->
            <div class="menu__overlay overlay">
               <button class="overlay__close"><i class="icon-close"></i></button>
               <div class="overlay__content">
                  <a href="index.html">Главная</a>
                  <a href="projects.html">Проекты</a>
                  <a href="service.html">Услуги</a>
                  <a href="blog.html">Блог</a>
                  <a href="company.html">Компания</a>
               </div>
            </div>

            <button class="menu__burger"><i class="icon-menu"></i></button>

         </div>

         <div class="header-white__social social-white">
            <div class="social-white__nav">
               <a href="#" class="social-white__item" target="_blank"><i class="icon-vk"></i></a>
               <a href="#" class="social-white__item" target="_blank"><i class="icon-vk"></i></a>
               <a href="#" class="social-white__item" target="_blank"><i class="icon-vk"></i></a>
               <a href="#" class="social-white__item" target="_blank"><i class="icon-vk"></i></a>
            </div>
         </div>
         
      </div>
   </div>
</header>
