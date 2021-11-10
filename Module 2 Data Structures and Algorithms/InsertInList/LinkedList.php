<?php
require_once('Node.php');

class LinkedList
{
    // https://www.hackerrank.com/challenges/insert-a-node-at-the-head-of-a-linked-list/problem

    public function __construct(private $head =null)
    {
    }

    //Add element at the start of the list
    public function unshift($item)
    {
        $newNode = new Node();
        $newNode->data = $item;
        $newNode->next = $this->head;
        $this->head = $newNode;
    }

    //display the content of the list
    public function print()
    {
        $temp = $this->head;
        if ($temp != null) {
            echo "The list is: ";
            while ($temp != null) {
                echo $temp->data." ";
                $temp = $temp->next;
            }
            echo "\n";
        } else {
            echo "The list is empty.\n";
        }
    }
}

// test the code
$MyList = new LinkedList();

//Add three elements at the start of the list.
$MyList->unshift(10);
$MyList->unshift(20);
$MyList->unshift(30);
$MyList->print();