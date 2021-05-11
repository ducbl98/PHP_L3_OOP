<?php


use JetBrains\PhpStorm\Pure;

class QuadraticEquation
{
    private int $a;
    private int $b;
    private int $c;

    /**
     * QuadraticEquation constructor.
     * @param int $a
     * @param int $b
     * @param int $c
     */
    public function __construct(int $a, int $b, int $c)
    {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }

    /**
     * @return int
     */
    public function getA(): int
    {
        return $this->a;
    }

    /**
     * @return int
     */
    public function getB(): int
    {
        return $this->b;
    }

    /**
     * @return int
     */
    public function getC(): int
    {
        return $this->c;
    }

    public function getDiscriminant(): int
    {
        return pow($this->b, 2) - 4 * $this->a * $this->c;
    }

    public function getDoubleRoot(): int
    {
        if ($this->a == 0) {
            throw new Exception("a can't be zero");
        }
        return -$this->b / (2 * $this->a);
    }

    public function getRoot1(): float|int
    {
        if ($this->a == 0) {
            throw new Exception("a can't be zero");
        }
        return (-$this->b + sqrt($this->getDiscriminant())) / (2 * $this->a);
    }

    public function getRoot2(): float|int
    {
        if ($this->a == 0) {
            throw new Exception("a can't be zero");
        }
        return (-$this->b - sqrt($this->getDiscriminant())) / (2 * $this->a);
    }

}