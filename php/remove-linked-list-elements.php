<?php

class ListNode {
    public $val = null;
    public $next = null;
    function __construct($val = null, $next = null) {
        $this->val = $val;
        $this->next = $next;
    }
}

class Solution {

    /**
     * @param ListNode $head
     * @param Integer $val
     * @return ListNode
     */
    function removeElements($head, $val) {
        $dummy = new ListNode(-1);
        $dummy->next = $head;

        $current = $dummy;

        while($current->next !== null)
        {
            if($current->next->val === $val)
            {
                $current->next = $current->next->next;
            }else{
                $current = $current->next;
            }
        }

        return $dummy->next;
    }
}

$head = new ListNode(1);
$head->next = new ListNode(2);
$head->next->next = new ListNode(6);
$head->next->next->next = new ListNode(3);
$head->next->next->next->next = new ListNode(4);
$head->next->next->next->next->next = new ListNode(5);
$head->next->next->next->next->next->next = new ListNode(6);

print_r((new Solution())->removeElements($head, 6));