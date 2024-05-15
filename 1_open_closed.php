<?php
/**
 * Open-Closed
 *
 * Classes should be open for extension, but closed for modification
 */

/** NOT APPLYING SOLID */
class example_not_applying_solid
{
    public function what_i_do()
    {
        echo "I cut things";
    }
}

// After a few commits later, in the same class...
class example_not_applying_solid
{
    public function what_i_do()
    {
        echo "I paint things";
    }
}


/** APPLYING SOLID */
interface example {
    public function what_i_do();
}

class example_that_cut_things interface example
{
    public function what_i_do()
    {
        echo "I cut things";
    }
}

class example_that_paint_things interface example
{
    public function what_i_do()
    {
        echo "I paint things";
    }
}