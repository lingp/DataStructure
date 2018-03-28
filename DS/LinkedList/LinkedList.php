<?php
/**
 *  单链表 未完待续
 * Date: 2018-03-28
 * Time: 11:37
 */

namespace DS\LinkedList;


class LinkedList implements \Iterator
{
    private $_firstNode = NULL;
    private $_lastNode = NULL;
    private $_totalNode = 0;
    private $_currentNode = NULL;
    private $_currentPosition = 0;

    public function insert($data = NULL)
    {
        $newNode = new ListNode($data);
        if ($this->_firstNode === NULL) {
            $this->_firstNode = $newNode;
            $this->_lastNode = $newNode;
            $this->_currentNode = $newNode;
        } else {
            $current = $this->_lastNode;
            $current->next = $newNode;
            $newNode->prev = $current;
            $this->_lastNode = $newNode;
        }
        $this->_totalNode++;
        return true;
    }

    public function insertAtFirst($data = null)
    {
        $newNode = new ListNode($data);
        if ($this->_firstNode === NULL) {
            $this->_firstNode = $newNode;
            $this->_lastNode = $newNode;
            $this->_currentNode = $newNode;
        } else {
            $current_first_node = $this->_firstNode;
            $this->_firstNode = $newNode;
            $newNode->next = $current_first_node;
            $current_first_node->prev = $newNode;
        }
        $this->_totalNode++;
        return true;
    }

    public function search($data = null)
    {
        if ($this->_totalNode) {
            $current_code = $this->_firstNode;
            while ($current_code !== NULL) {
                if ($current_code->data === $data) {
                    return $current_code;
                }
                $current_code = $current_code->next;
            }
        }
        return false;
    }

    public function insertBefore($data = null, $query = null)
    {
        $new_node = new ListNode($data);

        if($this->_firstNode)
        {
            $previous = null;
            $current_node = $this->_firstNode;
            while($current_node !== null) {
                if ($current_node->data === $query)
                {
                    $new_node->next = $current_node;
                    $current_node->prev = $new_node;

                    if($previous === NULL)
                    {
                        $this->_firstNode = $new_node;
                    }else{
                        $previous->next = $new_node;
                    }

                    $this->_totalNode++;
                    break;
                }
                $previous = $current_node;
                $current_node = $current_node->next;
            }
        }
    }



    public function current()
    {
        return $this->_currentNode->data;
    }

    public function next()
    {
        $this->_currentPosition++;
        $this->_currentNode = $this->_currentNode->next;
    }

    public function valid()
    {
        return $this->_currentNode !== NULL;
    }

    public function key()
    {
        return $this->_currentPosition;
    }

    public function rewind()
    {
        $this->_currentPosition = 0;
        $this->_currentNode = $this->_firstNode;
    }
}