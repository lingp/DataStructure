<?php
define('ROOT', __DIR__);

require_once ROOT . DIRECTORY_SEPARATOR . 'Tools' . DIRECTORY_SEPARATOR .  'Loader.php';
spl_autoload_register("Loader::autoload");

$linked_list = new \DS\LinkedList\LinkedList();
$linked_list->insert('11');
$linked_list->insert('12');
$linked_list->insertAtFirst('10');
$linked_list->rewind();
echo $linked_list->current();

var_dump($linked_list->search('11'));
