<?php

class Category
{
    private string $category_name;

    public function __construct(string $category)
    {
        $this->category_name = $category;
    }
    public function getCategoryName(): string
    {
        return $this->category_name;
    }

    public function setCategoryName(string $new_name): void
    {
        $this->category_name = $new_name;
    }
}
