<?php
/**
 * Liskov Substitution
 *
 * If S is a subtype of T, then objects of type T in a program may be replaced with objects
 * of type S without altering any of the desirable properties of that program
 */

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
    public function execute()
    {
        parent::execute(); // Does the same as the parent "I do coffee"
    }

    public function sellWater()
    {
        echo "I sell water";
    }
}
