<?php

namespace App\LinkedListCycle;

class Solution
{
    /**
     * @param ListNode $head
     * @return Boolean
     */
    public function hasCycle(ListNode $head): bool
    {
        $result = [];

        while ($head->next) {
            if (in_array($head->val, $result)) {
                $result[] = $head->val;
            } else {
                return true;
            }

            $head = $head->next;
        }

        return false;
    }
}
