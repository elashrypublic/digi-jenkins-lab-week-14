<?php
namespace App;

class SubscriptionManager {
    public function getDaysRemaining($totalDays, $daysUsed) {
        // If they used more than or equal to the total, it's expired (0 days left)
        if ($daysUsed >= $totalDays) {
            return 0;
        }
        
        // Otherwise, return the actual difference
        return $totalDays - $daysUsed;
    }
}
