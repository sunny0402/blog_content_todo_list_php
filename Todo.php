<?php

class Todo
{
    private string $name;

    public function __construct(string $a_name)
    {
        $this->name = $a_name;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $new_name): void
    {
        $this->name = $new_name;
    }
}
