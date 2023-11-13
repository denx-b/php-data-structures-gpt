<?php

interface DataStructure
{
    /**
     * Добавляет элемент в структуру данных.
     * 
     * @param mixed $item Элемент для добавления
     * 
     * @return void
     */
    public function input(mixed $item): void;

    /**
     * Удаляет и возвращает элемент из структуры данных.
     * 
     * @return mixed
     * @throws UnderflowException Если структура данных пуста
     */
    public function output(): mixed;

    /**
     * Возвращает все элементы в структуре данных.
     * 
     * @return array
     */
    public function getAll(): array;
}
