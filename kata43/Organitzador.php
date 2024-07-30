<?php

class Organitzador {
    private array $plans = [];

    public function afegirPlan($plan) {
        foreach ($this->plans as $p) {
            if ($p->getData()->format('Y-m-d') == $plan->getData()->format('Y-m-d')) {
                throw new Exception("Ja existeix un pla per aquesta data.");
            }
        }
        $this->plans[] = $plan;
    }

    public function mostrarPlans() {
        foreach ($this->plans as $plan) {
            echo "Plan: " . get_class($plan) . " - Data: " . $plan->getData()->format('Y-m-d') . "\n";
        }
    }
}

?>