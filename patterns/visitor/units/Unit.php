<?php

namespace app\patterns\visitor\units;

use app\patterns\visitor\visitors\ArmyVisitor;

abstract class Unit
{
    protected $depth = 0;

    public function accept(ArmyVisitor $visitor)
    {
        $refthis = new \ReflectionClass($this::class);
        $method = 'visit'.$refthis->getShortName();
        $visitor->$method($this);
    }

    protected function setDepth($depth)
    {
        $this->depth = $depth;
    }

    public function getDepth()
    {
        return $this->depth;
    }

    abstract public function bombardStrength();
}