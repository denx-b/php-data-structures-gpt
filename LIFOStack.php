<?php

class LIFOStack implements DataStructure
{
    private array $stack = [];

    public function input(mixed $item): void
    {
        $this->stack[] = $item;
    }

    public function output(): mixed
    {
        if ($this->isEmpty()) {
            throw new UnderflowException("Стек пуст");
        }

        return array_pop($this->stack);
    }

    public function getAll(): array
    {
        return $this->stack;
    }

    private function isEmpty(): bool
    {
        return empty($this->stack);
    }
}
