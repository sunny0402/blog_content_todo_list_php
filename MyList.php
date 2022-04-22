<?php

class MyList
{
    private array $todo_list = [];
    private string $list_title;

    public function __construct(string $list_title)
    {
        $this->list_title = $list_title;
    }

    public function addTodo(Todo $todo_item): void
    {
        $this->todo_list[] = $todo_item;
    }

    public function getListTitle(): string
    {
        return $this->list_title;
    }

    public function getList(): array
    {
        return $this->todo_list;
    }
}
