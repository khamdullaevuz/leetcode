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
     * @param ListNode $list1
     * @param ListNode $list2
     * @return ListNode
     */
    function mergeTwoLists($list1, $list2) {
        if($list1->val === null)
        {
            return $list2;
        }

        if($list2->val === null)
        {
            return $list1;
        }

        if($list1->val <= $list2->val)
        {
            $list1->next = $this->mergeTwoLists($list1->next, $list2);
            return $list1;
        }else{
            $list2->next = $this->mergeTwoLists($list1, $list2->next);
            return $list2;
        }
    }
}

$node1 = new ListNode(1);
$node1->next = new ListNode(4);

$node2 = new ListNode(2);
$node2->next = new ListNode(3);

print_r((new Solution())->mergeTwoLists($node1, $node2)); // Output: 1->1->2->3->4->4