<?php

namespace App;

abstract class Worker implements WorkerInterface
{

    private string $name;
    private int $age;
    private array $hours;
    private string $position;
    private string $positionInFuture;

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return int
     */
    public function getAge(): int
    {
        return $this->age;
    }

    /**
     * @param int $age
     */
    public function setAge(int $age): void
    {
        $this->age = $age;
    }

    /**
     * @return array
     */
    public function getHours(): array
    {
        return $this->hours;
    }

    /**
     * @param array $hours
     */
    public function setHours(array $hours): void
    {
        $this->hours = $hours;
    }

    /**
     * @return string
     */
    public function getPosition(): string
    {
        return $this->position;
    }

    /**
     * @param string $position
     */
    public function setPosition(string $position): void
    {
        $this->position = $position;
    }

    /**
     * @return string
     */
    public function getPositionInFuture(): string
    {
        return $this->positionInFuture;
    }

    /**
     * @param string $positionInFuture
     */
    public function setPositionInFuture(string $positionInFuture): void
    {
        $this->positionInFuture = $positionInFuture;
    }

    /**
     * @param string $name
     * @param int $age
     * @param array $hours
     */
    public function __construct(string $name, int $age, array $hours)
    {
        $this->name = $name;
        $this->age = $age;
        $this->hours = $hours;
    }


}