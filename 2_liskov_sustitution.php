<?php

/** NOT APPLYING SOLID */
class sam
{
    public function execute()
    {
        echo "I do coffee";
    }
}

class sam_child extends sam
{
    public function execute()
    {
        echo "I sell water";
    }
}


/** APPLYING SOLID */
class sam
{
    public function execute()
    {
        echo "I do coffee";
    }
}

class sam_child extends sam
{
    public function execute() {
        parent::execute();
    }

    public function sellWater() {
        echo "I sell water";
    }
}
