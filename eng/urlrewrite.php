<?php
$arUrlRewrite=array (
  5 => 
  array (
    'CONDITION' => '#^/eng/blog/([^\\/]+)/([^\\/]+)/($|\\?.*)#',
    'RULE' => 'ELEMENT_CODE=$2',
    'ID' => '',
    'PATH' => '/eng/blog/detail.php',
    'SORT' => 100,
  ),
  2 => 
  array (
    'CONDITION' => '#^/industries/([^\\/]+)/($|\\?.*)#',
    'RULE' => 'CODE=$1',
    'ID' => '',
    'PATH' => '/industries/detail.php',
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
  6 => 
  array (
    'CONDITION' => '#^/eng/blog/([^\\/]+)/($|\\?.*)#',
    'RULE' => 'ID=$1',
    'ID' => '',
    'PATH' => '/eng/blog/section.php',
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
  4 => 
  array (
    'CONDITION' => '#^/lp/#',
    'RULE' => NULL,
    'ID' => 'bitrix:landing.pub',
    'PATH' => '/lp/index.php',
    'SORT' => 100,
  ),
);
