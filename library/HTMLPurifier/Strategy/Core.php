<?php

/**
 * Core strategy composed of the big four strategies.
 */
class HTMLPurifier_Strategy_Core extends HTMLPurifier_Strategy_Composite
{
    public function __construct($enabledStrategies = array())
    {
        if (in_array("RemoveForeignElements", $enabledStrategies)) {
            $this->strategies[] = new HTMLPurifier_Strategy_RemoveForeignElements();
        }

        if (in_array("MakeWellFormed", $enabledStrategies)) {
            $this->strategies[] = new HTMLPurifier_Strategy_MakeWellFormed();
        }

        if (in_array("FixNesting", $enabledStrategies)) {
            $this->strategies[] = new HTMLPurifier_Strategy_FixNesting();
        }

        if (in_array("ValidateAttributes", $enabledStrategies)) {
            $this->strategies[] = new HTMLPurifier_Strategy_ValidateAttributes();
        }
    }
}

// vim: et sw=4 sts=4
