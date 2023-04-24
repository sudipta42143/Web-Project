<?php

require_once '../Model/model.php';

if(isset($_POST['submit'])){
    
    function fetchFood($id){
        return showfood($id);
    }
    $data = fetchFood($_POST['id']);
    foreach($data as $i => $food){
        $name = $food['Name'];
        $price = $food['Price'];
        $quantity = $food['Quantity'];
        $id = $food['id'];
        
    }
    if($_POST['quantity']>$quantity){
        echo "Not enough quantity";
    }
    else{
        $data['quantity'] = $quantity-$_POST['quantity'];
        $data['id'] = $_POST['id'];
        if (updateFood($id,$data)) {
             header("location:../View/FoodMenuMemberView.php");
            
        }
    }
}
?>