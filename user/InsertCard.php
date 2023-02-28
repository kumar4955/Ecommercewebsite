<?php
error_reporting(0);
session_start();
if(isset($_SESSION['user'])){


$product_type=$_POST['ptype'];
 $product_price=$_POST['pprice'];
 $product_code=$_POST['pcode'];
if(isset($_POST['addCart'])){
$check_product=array_column($_SESSION['cart'],'ProductCode');
if(in_array($product_code,$check_product)){
    echo"
    <script>
    alert('product already added');
    window.location.href='index.php';
    </script>
    ";
}
 

else{
$_SESSION['cart'][]=array('ProductType'=> $product_type,
'ProductPrice'=> $product_price,
'ProductCode'=> $product_code);
header("location:ViewCart.php");

}
}
//remove product
if(isset($_POST['remove'])){
    foreach($_SESSION['cart'] as $key=>$value){
        if($value['ProductCode']===$_POST['item']){
            unset($_SESSION['cart'][$key]);
            $_SESSION['cart']=array_values($_SESSION['cart']);
            header('location:ViewCart.php');
        }
    }
}
}
else{
    header("location:form/login.php");
}

?>