<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta http-equiv="Content-Style-Type" content="text/css">
  <title></title>
  <meta name="Generator" content="Cocoa HTML Writer">
  <meta name="CocoaVersion" content="2022.3">
  <style type="text/css">
    p.p1 {margin: 0.0px 0.0px 0.0px 0.0px; font: 13.0px 'Helvetica Neue'}
    p.p2 {margin: 0.0px 0.0px 0.0px 0.0px; font: 13.0px 'Helvetica Neue'; min-height: 15.0px}
    span.Apple-tab-span {white-space:pre}
  </style>
</head>
<body>
<p class="p1">&lt;?php</p>
<p class="p2"><br></p>
<p class="p1">/**</p>
<p class="p1">Create 3 classes: TodoList, Item, Category</p>
<p class="p1">-no gui, no db/file</p>
<p class="p1">-a todolist with items and categories</p>
<p class="p1">-adding item to a list (belonging to a category)</p>
<p class="p1">-removing an item from the list</p>
<p class="p1">-changing an existing item</p>
<p class="p1">-swap order of 2 items</p>
<p class="p1">-print in order (item 1 - category 1 - 1)</p>
<p class="p2"><br></p>
<p class="p1">Name: Yatharth Alpeshkumar Soni.</p>
<p class="p1">Date Created: Apr 18, 2022</p>
<p class="p1">Description: A interview question solved which I failed to solve on spot..</p>
<p class="p2"><br></p>
<p class="p1">*/</p>
<p class="p2"><br></p>
<p class="p2"><br></p>
<p class="p2"><br></p>
<p class="p1">class TodoList{</p>
<p class="p1">public $todoList = array();</p>
<p class="p2"><br></p>
<p class="p1">//add Item</p>
<p class="p1">public function addItem($item, $category){</p>
<p class="p1"><span class="Apple-tab-span">	</span>//add first item..</p>
<p class="p1"><span class="Apple-converted-space">    </span>array_push($this-&gt;todoList, $item. " - " .$category);</p>
<p class="p2"><br></p>
<p class="p1">}</p>
<p class="p2"><br></p>
<p class="p1">//remove Item</p>
<p class="p1">public function removeItem(){</p>
<p class="p1"><span class="Apple-tab-span">	</span><span class="Apple-tab-span">	</span>array_pop($this-&gt;todoList);</p>
<p class="p1">}</p>
<p class="p2"><br></p>
<p class="p2"><br></p>
<p class="p2"><br></p>
<p class="p1">//change existing item</p>
<p class="p1">public function changeItem($item, $category){</p>
<p class="p1"><span class="Apple-tab-span">	</span> unset($this-&gt;todoList[0]);</p>
<p class="p1"><span class="Apple-tab-span">	</span> $this-&gt;todoList[0] = $item." - ".$category;</p>
<p class="p1">}</p>
<p class="p2"><br></p>
<p class="p1">public function swapItems($index1, $index2){</p>
<p class="p1"><span class="Apple-tab-span">	</span>$index1--;</p>
<p class="p1"><span class="Apple-converted-space">    </span>$index2--;</p>
<p class="p1"><span class="Apple-tab-span">	</span>$temp = $this-&gt;todoList[$index2];</p>
<p class="p1"><span class="Apple-converted-space">    </span>$this-&gt;todoList[$index2] = $this-&gt;todoList[$index1];</p>
<p class="p1"><span class="Apple-converted-space">    </span>$this-&gt;todoList[$index1] = $temp;</p>
<p class="p2"><br></p>
<p class="p1">}</p>
<p class="p2"><br></p>
<p class="p2"><br></p>
<p class="p1">//Display TodoList</p>
<p class="p1">public function displayTodo(){</p>
<p class="p2"><br></p>
<p class="p1"><span class="Apple-tab-span">	</span>//for loop for categories</p>
<p class="p1"><span class="Apple-converted-space">    </span>for($i = 0; $i &lt; count($this-&gt;todoList); $i++){</p>
<p class="p1"><span class="Apple-converted-space">    <span class="Apple-tab-span">	</span></span>echo $this-&gt;todoList[$i]. " - ". ($i+1). "&lt;br /&gt;";</p>
<p class="p2"><span class="Apple-converted-space">    </span></p>
<p class="p1"><span class="Apple-converted-space">    </span>}</p>
<p class="p2"><br></p>
<p class="p1">}</p>
<p class="p2"><br></p>
<p class="p1">}</p>
<p class="p2"><br></p>
<p class="p1">class Item{</p>
<p class="p2"><br></p>
<p class="p2"><br></p>
<p class="p1">private $item;</p>
<p class="p2"><br></p>
<p class="p2"><br></p>
<p class="p1">//create an Item</p>
<p class="p1">public function setItem($item){</p>
<p class="p1"><span class="Apple-tab-span">	</span>$this-&gt;item = $item;</p>
<p class="p2"><br></p>
<p class="p1">}</p>
<p class="p2"><br></p>
<p class="p1">public function getItem(){</p>
<p class="p1"><span class="Apple-tab-span">	</span>return $this-&gt;item;</p>
<p class="p1">}</p>
<p class="p2"><br></p>
<p class="p2"><br></p>
<p class="p1">}</p>
<p class="p2"><br></p>
<p class="p1">class Category{</p>
<p class="p1">private $category;</p>
<p class="p1">//create a Category</p>
<p class="p1">public function setCategory($category){</p>
<p class="p1"><span class="Apple-tab-span">	</span>$this-&gt;category = $category;</p>
<p class="p2"><br></p>
<p class="p1">}</p>
<p class="p2"><br></p>
<p class="p1"><span class="Apple-tab-span">	</span>public function getCategory(){</p>
<p class="p1"><span class="Apple-converted-space">    </span>return $this-&gt;category;</p>
<p class="p2"><span class="Apple-converted-space">    </span></p>
<p class="p1"><span class="Apple-converted-space">    </span>}</p>
<p class="p2"><br></p>
<p class="p2"><br></p>
<p class="p1">}</p>
<p class="p1">//Creating items 1,2,3</p>
<p class="p1">$item1 = new Item();</p>
<p class="p1">$item1-&gt;setItem("Buy Milk");</p>
<p class="p2"><br></p>
<p class="p1">$item2 = new Item();</p>
<p class="p1">$item2-&gt;setItem("Buy Shampoo");</p>
<p class="p2"><br></p>
<p class="p2"><br></p>
<p class="p1">$item3 = new Item();</p>
<p class="p1">$item3-&gt;setItem("Finish homework");</p>
<p class="p2"><br></p>
<p class="p2"><br></p>
<p class="p1">//Category Objects</p>
<p class="p1">$cat1 = new Category();</p>
<p class="p1">$cat1-&gt;setCategory("Shopping");</p>
<p class="p2"><br></p>
<p class="p1">$cat2 = new Category();</p>
<p class="p1">$cat2-&gt;setCategory("School Work");</p>
<p class="p2"><br></p>
<p class="p2"><br></p>
<p class="p2"><br></p>
<p class="p1">//Todo List Object</p>
<p class="p1">$obj = new TodoList();</p>
<p class="p1">$obj-&gt;addItem($item1-&gt;getItem(), $cat1-&gt;getCategory());</p>
<p class="p1">$obj-&gt;addItem($item2-&gt;getItem(), $cat1-&gt;getCategory());</p>
<p class="p1">$obj-&gt;addItem($item3-&gt;getItem(), $cat2-&gt;getCategory());</p>
<p class="p2"><br></p>
<p class="p2"><br></p>
<p class="p1">echo "Initial Array... &lt;br /&gt;";</p>
<p class="p1">$obj-&gt;displayTodo();</p>
<p class="p2"><br></p>
<p class="p1">echo "&lt;br /&gt; &lt;br /&gt; After adding an element ... &lt;br/&gt;";</p>
<p class="p1">$item4 = new Item();</p>
<p class="p1">$item4-&gt;setItem("Buy Coffee");</p>
<p class="p2"><br></p>
<p class="p1">$obj-&gt;addItem($item4-&gt;getItem(), $cat1-&gt;getCategory());</p>
<p class="p1">$obj-&gt;displayTodo();</p>
<p class="p2"><br></p>
<p class="p2"><br></p>
<p class="p1">//remove an item from an array</p>
<p class="p1">echo "&lt;br /&gt;Array after removing an item... &lt;br /&gt;";</p>
<p class="p1">$obj-&gt;removeItem();</p>
<p class="p1">$obj-&gt;displayTodo();</p>
<p class="p2"><br></p>
<p class="p2"><br></p>
<p class="p1">//changing existing item...</p>
<p class="p1">echo "&lt;br /&gt;After changing an existing Item... &lt;br /&gt;";</p>
<p class="p1">$item1-&gt;setItem("Buy Carrots");</p>
<p class="p1">$obj-&gt;changeItem($item1-&gt;getItem(), $cat1-&gt;getCategory());</p>
<p class="p1">$obj-&gt;displayTodo();<span class="Apple-converted-space"> </span></p>
<p class="p2"><br></p>
<p class="p1">//Changing the element sequence</p>
<p class="p2"><br></p>
<p class="p1">echo "&lt;br /&gt;After changing the Element Sequence... &lt;br /&gt;";</p>
<p class="p1">$obj-&gt;swapItems(1,2);</p>
<p class="p1">$obj-&gt;displayTodo();</p>
<p class="p2"><br></p>
<p class="p2"><br></p>
<p class="p2"><br></p>
<p class="p1">?&gt;</p>
</body>
</html>
