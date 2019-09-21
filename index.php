<?php
require_once( 'functions.php' );
require_once( 'data.php' );
require_once( 'helpers.php' );
$title = 'Главная';

$page_content = include_template( 'main.php'
                                , ['lots' => $lots
                                  , 'categories' => $categories
                                  ]
                                );
$layout_content = include_template( 'layout.php'
                                  , ['page_content' => $page_content
                                   , 'categories' => $categories
                                   , 'title' => $title
                                   , 'is_auth' => $is_auth
                                   , 'user_name' => $user_name
                                    ]
                                  );
print($layout_content);
?>