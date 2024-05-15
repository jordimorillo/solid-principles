<?php
/**
 * Interface Segregation
 *
 * Clients should not be forced to depend on methods that they do not use.
 */


/** NOT APPLYING SOLID */
interface Robot
{
    public function spinAround();

    public function rotateArms();

    public function wiggleAntennas();
}

class RobotWithAntennas implements Robot{

    public function spinAround()
    {
        echo "I spin around!! :D"
    }

    public function rotateArms()
    {
        echo "I can rotate arms!! :D";
    }

    public function wiggleAntennas()
    {
        echo "I can wiggle antennas!! :D";
    }
}

class RobotWithoutAntennas implements Robot{

    public function spinAround()
    {
        echo "I spin around!! :D";
    }

    public function rotateArms()
    {
        echo "I can rotate arms!! :D";
    }

    public function wiggleAntennas()
    {
        // oops, I don't have antennas, so I won't implement this class :(
    }
}

/** APPLYING SOLID */
interface RobotThatCanSpinAround
{
    public function spinAround();
}

interface RobotThatCanRotateArms
{
    public function rotateArms();
}

interface RobotThatCanWiggleAntennas
{
    public function wiggleAntennas();
}

class RobotWithAntennas implements RobotThatCanWiggleAntennas, RobotThatCanSpinAround, RobotThatCanRotateArms {

    public function spinAround()
    {
        echo "I spin around!! :D";
    }

    public function rotateArms()
    {
        echo "I can rotate arms!! :D";
    }

    public function wiggleAntennas()
    {
        echo "I can wiggle antennas!! :D";
    }
}

class RobotWithoutAntennas implements RobotThatCanRotateArms, RobotThatCanSpinAround {

    public function spinAround()
    {
        echo "I spin around!! :D";
    }

    public function rotateArms()
    {
        echo "I can rotate arms!! :D";
    }
}