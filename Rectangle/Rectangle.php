<?php


class Rectangle
{
    private int $width;
    private int $height;

    /**
     * Rectangle constructor.
     * @param int $width
     * @param int $height
     */
    public function __construct(int $width, int $height)
    {
        $this->width = $width;
        $this->height = $height;
    }

    /**
     * @return int
     */
    public function getWidth(): int
    {
        return $this->width;
    }

    /**
     * @param int $width
     */
    public function setWidth(int $width): void
    {
        $this->width = $width;
    }

    /**
     * @return int
     */
    public function getHeight(): int
    {
        return $this->height;
    }

    /**
     * @param int $height
     */
    public function setHeight(int $height): void
    {
        $this->height = $height;
    }

    public function getArea(): int
    {
        return $this->height * $this->width;
    }

    public function getPerimeter(): int
    {
        return ($this->height + $this->width) * 2;
    }

    public function display() : string{
        return " { width = ".$this->width." , height = ".$this->height."}";
    }
}