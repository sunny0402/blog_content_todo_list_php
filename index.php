<?php

require_once "./MyList.php";
require_once "./Todo.php";
require_once "./Category.php";

/* 
* Getting Started:
    - create 1 todo list
    - create 3 items ("item 1", "item 2", "item 3")
    - create 2 categories ("cat 1", "cat 2")
    - associate all the items with the todo list (sorted by order of adding)
**/

$my_list = new MyList("My First TODO List");

$todo_1 = new Todo("item 1");
$todo_2 = new Todo("item 2");
$todo_3 = new Todo("item 3");

$category_1 = new Category("cat 1");
$category_2 = new Category("cat 2");

$my_list->addTodo($todo_1);
$my_list->addTodo($todo_2);
$my_list->addTodo($todo_3);

echo $my_list->getListTitle() . PHP_EOL;
print_r($my_list);

/*
*Second List of tasks:
    - associate "item 1" and "item 2" with "cat 1"
    - associate "item 3" with the "cat 2"
    - change "item 1" to "item 1 - modified"
    - swap the order of "item 2" and "item 3"
**/

$todo_1->addCategory($category_1);
$todo_2->addCategory($category_1);
$todo_3->addCategory($category_2);

echo $todo_1->getCategory()->getCategoryName() . PHP_EOL;
echo $todo_3->getCategory()->getCategoryName() . PHP_EOL;

$todo_1->setName("item 1 - modified");

$my_list->swapListItems(1, 2);
print_r($my_list);
