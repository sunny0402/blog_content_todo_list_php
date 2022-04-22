<?php

class Category
{
    private string $category_name;

    public function __construct(string $category)
    {
        $this->category_name = $category;
    }

    public function getCategory(): string
    {
        return $this->category_name;
    }
}
