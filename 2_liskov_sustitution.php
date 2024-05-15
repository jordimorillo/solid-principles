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
interface cafeInterface {
    public function name(): string;
}

class coffee implements cafeInterface
{
    public function name(): string
    {
        return "cafe";
    }
}

class capucchino implements cafeInterface
{
    public function name(): string
    {
        return "capucchino";
    }
}

class sam
{
    public function execute(): cafeInterface
    {
        $cafe = new Coffee();
        return $cafe->name();
    }
}

class Eden extends sam
{
    public function execute(): cafeInterface
    {
        $cafe = new Capucchino();
        return $cafe->name();
    }
}
