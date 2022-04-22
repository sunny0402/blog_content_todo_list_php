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

print_r($my_list);
