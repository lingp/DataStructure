<?php

/**
 * 节点元素
 * Date: 2018-03-28
 * Time: 11:33
 */
namespace DS\LinkedList;

class ListNode
{
    public  $data = null;
    public  $prev = null;
    public  $next = null;

    public function __construct($data = null)
    {
        $this->data = $data;
    }
}