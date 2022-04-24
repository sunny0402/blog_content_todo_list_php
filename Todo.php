<?php

class Todo
{
    private string $name;
    private Category $task_category;

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

    public function addCategory(Category $another_category)
    {
        $this->task_category = $another_category;
    }

    public function getCategory(): Category
    {
        return $this->task_category;
    }
}
