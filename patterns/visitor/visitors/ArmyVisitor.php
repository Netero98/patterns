<?php

namespace app\patterns\visitor\visitors;

use app\patterns\visitor\units\composites\Army;
use app\patterns\visitor\units\lists\Archer;
use app\patterns\visitor\units\lists\Cavalry;
use app\patterns\visitor\units\lists\LaserCannonUnit;
use app\patterns\visitor\units\lists\TroopCarrierUnit;
use app\patterns\visitor\units\Unit;

abstract class ArmyVisitor
{
    abstract public function visit(Unit $node);

    public function visitArcher(Archer $node)
    {
        $this->visit($node);
    }
    public function visitCavalry(Cavalry $node)
    {
        $this->visit($node);
    }
    public function visitLaserCannonUnit(LaserCannonUnit $node)
    {
        $this->visit($node);
    }
    public function visitTroopCarrierUnit(TroopCarrierUnit $node)
    {
        $this->visit($node);
    }
    public function visitArmy(Army $node)
    {
        $this->visit($node);
    }
}