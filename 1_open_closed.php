<?php

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
class example_applying_solid
{
    public function what_i_do()
    {
        echo "I cut things";
        echo "and I paint things";
    }
}