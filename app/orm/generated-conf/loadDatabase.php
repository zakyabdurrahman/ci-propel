<?php
$serviceContainer = \Propel\Runtime\Propel::getServiceContainer();
$serviceContainer->initDatabaseMapFromDumps(array (
  'default' => 
  array (
    'tablesByName' => 
    array (
      'news' => '\\News\\Map\\NewsTableMap',
    ),
    'tablesByPhpName' => 
    array (
      '\\News' => '\\News\\Map\\NewsTableMap',
    ),
  ),
));
