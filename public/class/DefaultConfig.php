<?php


use Cassandra\Column;

class DefaultConfig implements Config
{
    
    /**
     * DefaultConfig constructor.
     */
    public function __construct(){
        
    }

    public function addColumn(string $key, Column $column): Config{
        // TODO: Implement addColumn() method.
    }

    public function getColumns(): array{
        // TODO: Implement getColumns() method.
    }

    public function addIntColumn(string $string)
    {
    }
}