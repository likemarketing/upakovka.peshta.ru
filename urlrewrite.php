<?php
$arUrlRewrite=array (
  2 => 
  array (
    'CONDITION' => '#^/catalog/([^\\/]+)/($|\\?.*)#',
    'RULE' => 'ID=$1',
    'ID' => '',
    'PATH' => '/catalog/detail.php',
    'SORT' => 100,
  ),
  3 => 
  array (
    'CONDITION' => '#^/cases/([^\\/]+)/($|\\?.*)#',
    'RULE' => 'ID=$1',
    'ID' => '',
    'PATH' => '/cases/detail.php',
    'SORT' => 100,
  ),
  1 => 
  array (
    'CONDITION' => '#^/content/faq/#',
    'RULE' => '',
    'ID' => 'bitrix:support.faq',
    'PATH' => '/content/faq/index.php',
    'SORT' => 100,
  ),
  0 => 
  array (
    'CONDITION' => '#^/rest/#',
    'RULE' => '',
    'ID' => NULL,
    'PATH' => '/bitrix/services/rest/index.php',
    'SORT' => 100,
  ),
);
