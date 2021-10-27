<?php

// declare variables as an array for things and items to buy
$things = ['fish','chicken','mutton','beef','cabbage','carrot', 'apple'];
$shopItem = [];

// declare class for main, market, shelf
class main{
    // declare method setItem
    public function setItem($item){
        $this->item = $item;
        return $this->item;
    }
}

class market extends main{
    // declare method getItem
    public function getItem(){
        $thing = $this->item;
        return $thing;
    }
    // declare method emptyItem
    public function emptyItem(){
        $this->item = null;
    }
}

class shelf extends market{}

// count() == sizeof()
for($i=0;$i<count($things);$i++){
    // set as object in class shelf
    // class shelf got no method
    // inherited method from its parent -> market -> main
    $shopItem[$i] = new shelf;
    // pass the method from class main to assign property
    $shopItem[$i]->setItem($things[$i]);
}

// print_r ($shopItem);

echo "Kevin buys ";
for($i=0;$i<3;){
    // random pick item
    $num = rand(0, sizeof($things) - 1);
    // if item has value execute ~
    if($shopItem[$num]->getItem() !== null){
        // echo the item
        // getItem at class market
        echo " ".$shopItem[$num]->getItem();
        // due to shopItem at class shelf, emptyItem() at class market, can be execute of its parent
        $shopItem[$num]->emptyItem();
        $i++;
    }
}

echo "<br>Fikri buys ";
for($i=0;$i<3;){
    $num = rand(0, sizeof($things) - 1);
    if($shopItem[$num]->getItem() !== null){
        echo " ".$shopItem[$num]->getItem();
        $shopItem[$num]->emptyItem();
        $i++;
    }
}

// reinsert item in empty/null index
echo "<br>Shop restocked ";
for($i=0;$i<3;){
    $num = rand(0, sizeof($things) - 1);
    if($shopItem[$num]->getItem() == null){
        echo " ".$shopItem[$num]->setItem($things[$num]);
        
        $i++;
    }
}

echo "<br>Arjun buys ";
for($i=0;$i<3;){
    $num = rand(0, sizeof($things) - 1);
    if($shopItem[$num]->getItem() !== null){
        echo " ".$shopItem[$num]->getItem();
        $shopItem[$num]->emptyItem();
        $i++;
    }
}

// print_r ($shopItem);
?>
