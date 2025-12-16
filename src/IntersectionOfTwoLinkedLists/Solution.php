<?php

namespace App\IntersectionOfTwoLinkedLists;

class Solution
{
    public function getIntersectionNode(ListNode $headA, ListNode $headB): ?ListNode
    {
        $pointA = $headA;
        $pointB = $headB;

        while ($pointA !== $pointB) {
            $pointA = $pointA === null ? $headB : $pointA->next;
            $pointB = $pointB === null ? $headA : $pointB->next;
        }

        return $pointA;
    }
}
