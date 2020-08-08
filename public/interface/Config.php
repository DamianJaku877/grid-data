<?php


use Cassandra\Column;

interface Config
{
    /**
     * Dodaje nową kolumną do DataGrid.
     * @param string $key
     * @param Column $column
     * @return Config
     */
    public function addColumn(string $key, Column $column): Config;

    /**
     * Zwraca wszystkie kolumny dla danego DataGrid.
     */
    public function getColumns(): array;
}