<?php

/**
Create 3 classes: TodoList, Item, Category
-no gui, no db/file
-a todolist with items and categories
-adding item to a list (belonging to a category)
-removing an item from the list
-changing an existing item
-swap order of 2 items
-print in order (item 1 - category 1 - 1)

Name: Yatharth Alpeshkumar Soni.
Date Created: Apr 18, 2022
Description: A interview question solved which I failed to solve on spot..

*/



class TodoList{
public $todoList = array();

//add Item
public function addItem($item, $category){
	//add first item..
    array_push($this->todoList, $item. " - " .$category);

}

//remove Item
public function removeItem(){
		array_pop($this->todoList);
}



//change existing item
public function changeItem($item, $category){
	 unset($this->todoList[0]);
	 $this->todoList[0] = $item." - ".$category;
}

public function swapItems($index1, $index2){
	$index1--;
    $index2--;
	$temp = $this->todoList[$index2];
    $this->todoList[$index2] = $this->todoList[$index1];
    $this->todoList[$index1] = $temp;

}


//Display TodoList
public function displayTodo(){

	//for loop for categories
    for($i = 0; $i < count($this->todoList); $i++){
    	echo $this->todoList[$i]. " - ". ($i+1). "<br />";
    
    }

}

}

class Item{


private $item;


//create an Item
public function setItem($item){
	$this->item = $item;

}

public function getItem(){
	return $this->item;
}


}

class Category{
private $category;
//create a Category
public function setCategory($category){
	$this->category = $category;

}

	public function getCategory(){
    return $this->category;
    
    }


}
//Creating items 1,2,3
$item1 = new Item();
$item1->setItem("Buy Milk");

$item2 = new Item();
$item2->setItem("Buy Shampoo");


$item3 = new Item();
$item3->setItem("Finish homework");


//Category Objects
$cat1 = new Category();
$cat1->setCategory("Shopping");

$cat2 = new Category();
$cat2->setCategory("School Work");



//Todo List Object
$obj = new TodoList();
$obj->addItem($item1->getItem(), $cat1->getCategory());
$obj->addItem($item2->getItem(), $cat1->getCategory());
$obj->addItem($item3->getItem(), $cat2->getCategory());


echo "Initial Array... <br />";
$obj->displayTodo();

echo "<br /> <br /> After adding an element ... <br/>";
$item4 = new Item();
$item4->setItem("Buy Coffee");

$obj->addItem($item4->getItem(), $cat1->getCategory());
$obj->displayTodo();


//remove an item from an array
echo "<br />Array after removing an item... <br />";
$obj->removeItem();
$obj->displayTodo();


//changing existing item...
echo "<br />After changing an existing Item... <br />";
$item1->setItem("Buy Carrots");
$obj->changeItem($item1->getItem(), $cat1->getCategory());
$obj->displayTodo(); 

//Changing the element sequence

echo "<br />After changing the Element Sequence... <br />";
$obj->swapItems(1,2);
$obj->displayTodo();



?>
