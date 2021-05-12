<?php


use JetBrains\PhpStorm\Pure;

class Fan
{
    const SLOW = 1;
    const MEDIUM = 2;
    const FAST = 3;
    private int $speed = self::SLOW;
    private bool $on = false;
    private float $radius = 5;
    private string $color = "blue";

    /**
     * Fan constructor.
     */
    public function __construct()
    {
    }

    /**
     * @return int
     */
    public function getSpeed(): int
    {
        return $this->speed;
    }

    /**
     * @param int $speed
     */
    public function setSpeed(int $speed): void
    {
        $this->speed = $speed;
    }

    /**
     * @return bool
     */
    public function isOn(): bool
    {
        return $this->on;
    }

    /**
     * @param bool $on
     */
    public function setOn(bool $on): void
    {
        $this->on = $on;
    }

    /**
     * @return float|int
     */
    public function getRadius(): float|int
    {
        return $this->radius;
    }

    /**
     * @param float|int $radius
     */
    public function setRadius(float|int $radius): void
    {
        $this->radius = $radius;
    }

    /**
     * @return string
     */
    public function getColor(): string
    {
        return $this->color;
    }

    /**
     * @param string $color
     */
    public function setColor(string $color): void
    {
        $this->color = $color;
    }

    #[Pure] public function toString(): string
    {
        if ($this->isOn()) {
            return "Fan is on { Speed : " . $this->getSpeed() . " ,Radius : " . $this->getRadius() . " ,Color : " . $this->getColor()."}";
        }else{
            return "Fan is off {Radius : " . $this->getRadius() . " ,Color : " . $this->getColor()."}";
        }
    }
}