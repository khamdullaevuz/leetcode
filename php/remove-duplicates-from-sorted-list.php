<?php

class ListNode {
    public $val = 0;
    public $next = null;
    function __construct($val = 0, $next = null) {
        $this->val = $val;
        $this->next = $next;
    }
}

class Solution {

    /**
     * @param ListNode $head
     * @return ListNode
     */
    function deleteDuplicates($head) {
        $dummy = new ListNode(-1);
        $dummy->next = $head;
        $current = $dummy;

        while($current->next !== null){
            $val = $current->val;
            while($current->next !== null and $current->next->val === $val){
                $current->next = $current->next->next;
            }

            $current = $current->next;
        }

        return $dummy->next;
    }
}

$head = new ListNode(1);
$head->next = new ListNode(1);
$head->next->next = new ListNode(2);
$head->next->next->next = new ListNode(3);

print_r((new Solution())->deleteDuplicates($head)); // Output: 1->2->3