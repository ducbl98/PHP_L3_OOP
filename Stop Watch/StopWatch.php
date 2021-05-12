<?php


class StopWatch
{
    private float $startTime;
    private float $endTime;

    /**
     * StopWatch constructor.
     */
    public function __construct()
    {
        $this->startTime=time();
    }

    /**
     * @return int
     */
    public function getStartTime(): float
    {
        return $this->startTime;
    }

    /**
     * @return int
     */
    public function getEndTime(): float
    {
        return $this->endTime;
    }


    public function start(): void
    {
        $this->startTime = round(microtime(true) * 1000);
    }

    public function stop(): void
    {
        $this->endTime = round(microtime(true) * 1000);
    }
    public function getElapsedTime():float
    {
        return $this->endTime-$this->startTime;
    }


}