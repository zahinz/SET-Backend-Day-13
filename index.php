<?php

$things = ['fish','chicken','mutton','beef','kucing','kangaroo'];
$shopItem = [];

class hq{
    public function setItem($item){
        $this->item = $item;
        return $this->item;
    }
}

class shop extends hq{

    public function getItem(){
        $thing = $this->item;
        return $thing;
    }

    public function emptyItem(){
        $this->item = '';
    }

}

class shelf extends shop{

}

for($i=0;$i<sizeof($things);$i++){
    $shopItem[$i] = new shelf;
    $shopItem[$i]->setItem($things[$i]);
}

// print_r ($shopItem);
echo "Kevin buys ";
for($i=0;$i<3;){
    $num = rand(0, sizeof($things) - 1);
    if($shopItem[$num]->getItem() !== ''){
        echo " ".$shopItem[$num]->getItem();
        $shopItem[$num]->emptyItem();
        $i++;
    }
}

echo "<br>Fikri buys ";
for($i=0;$i<3;){
    $num = rand(0, sizeof($things) - 1);
    if($shopItem[$num]->getItem() !== ''){
        echo " ".$shopItem[$num]->getItem();
        $shopItem[$num]->emptyItem();
        $i++;
    }
}

echo "<br>Shop restocked ";
for($i=0;$i<3;){
    $num = rand(0, sizeof($things) - 1);
    if($shopItem[$num]->getItem() == ''){
        echo " ".$shopItem[$num]->setItem($things[$num]);
        
        $i++;
    }
}

echo "<br>Arjun buys ";
for($i=0;$i<3;){
    $num = rand(0, sizeof($things) - 1);
    if($shopItem[$num]->getItem() !== ''){
        echo " ".$shopItem[$num]->getItem();
        $shopItem[$num]->emptyItem();
        $i++;
    }
}

// print_r ($shopItem);
?>
