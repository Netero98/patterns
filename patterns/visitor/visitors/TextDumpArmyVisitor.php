<?php

namespace app\patterns\visitor\visitors;

use app\patterns\visitor\units\Unit;

class TextDumpArmyVisitor extends ArmyVisitor
{
    private $text = '';

    public function visit(Unit $node)
    {
        $txt = '';
        $pad = 4*$node->getDepth();
        $txt .= sprintf("%{$pad}s", "");
        $txt .= $node::class . ": ";
        $txt .= "Огневая мощь: {$node->bombardStrength()}</br>";
        $this->text .= $txt;
    }

    public function getText()
    {
        return $this->text;
    }
}