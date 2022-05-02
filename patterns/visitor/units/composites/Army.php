<?php
namespace app\patterns\visitor\units\composites;

use app\patterns\visitor\units\CompositeUnit;

final class Army extends CompositeUnit
{
    public function bombardStrength(): int
    {
        $strength = 0;
        foreach ($this->units as $unit) {
            $strength += $unit->bombardStrength();
        }

        return $strength;
    }
}