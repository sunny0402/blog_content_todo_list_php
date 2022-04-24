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

    public function getTodo(int $todo_idx): Todo
    {
        return $this->todo_list[$todo_idx];
    }

    public function swapListItems(int $idx_item1, int $idx_item2): void
    {
        $temp = $this->getTodo($idx_item1);
        $this->todo_list[$idx_item1] = $this->getTodo($idx_item2);
        $this->todo_list[$idx_item2] = $temp;
    }
}
