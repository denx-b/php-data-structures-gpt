<?php

class FIFOQueue implements DataStructure
{
    private array $queue = [];

    public function input(mixed $item): void
    {
        $this->queue[] = $item;
    }

    public function output(): mixed
    {
        if ($this->isEmpty()) {
            throw new UnderflowException("Очередь пуста");
        }

        return array_shift($this->queue);
    }

    public function getAll(): array
    {
        return $this->queue;
    }

    private function isEmpty(): bool
    {
        return empty($this->queue);
    }
}
