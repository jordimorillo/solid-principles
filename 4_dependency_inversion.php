<?php
/**
 * Dependency Inversion
 *
 * - High-level modules should not depend on low-level modules. Both should depend on the abstraction.
 *
 * - Abstractions should not depend on details. Details should depend on abstractions.
 */

/** NOT APPLYING SOLID */
class CutPizzaUseCase
{
    public function execute(Pizza $aPizza) {
        $cutterArm = new CutterArm();
        $cutterArm->cut($pizza);
        echo "I cut pizza with my cutter arm! :D";
    }
}

/** APPLYING SOLID */
class CutPizzaUseCase {
    private $tool;

    public function __construct(Tool $tool) {
        $this->tool = $tool;
    }

    public function execute(Pizza $aPizza) {
        $this->tool->cut($aPizza);
        echo "I cut pizza with any tool given to me! :D";
    }
}
