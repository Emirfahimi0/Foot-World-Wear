<?php

//php code segment to send data from ajax to database mysql

session_start();
include "db_conn.php";
     
    $name = $_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $state = $_POST['state'];
    $zip = $_POST['zip'];
    $cname = $_POST['cname'];
    $ccnum = $_POST['ccnum'];
    $cartItems =  $_POST['cartItems'];
    $cvv = $_POST['cvv'];
    $productItem = $_POST['product'];
    $total = $_POST['total'];
    $card = $_POST['card'];
    $phoneNo = $_POST['phone'];
   
    $productItem =implode(',',$productItem);

// check entry
    $sql = "SELECT COUNT(*) AS cntuser from customerinfo WHERE email='".$email."'";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($result);
    $count = $row['cntuser'];



if($count > 0){
    // update
    $updatequery = "UPDATE customerinfo SET fname='".$name."',product='".$productItem."', CustAddress='".$address."', total='".$total."',payment='".$card."',ccnum='".$ccnum."' WHERE email='".$email."'";
    mysqli_query($conn,$updatequery);
    $sqlproduct = "SELECT customer_ID FROM customerinfo where email='".$email."'";
    $result = mysqli_query($conn,$sqlproduct);
    $row = mysqli_fetch_array($result);
    $customer_ID = $row['customer_ID'];
    Insertproduct($cartItems,$conn,$customer_ID);
  
}else{

    // insert
    $insertquery = "INSERT INTO customerinfo(fname,email,product,CustAddress,zip,total,ccname,ccnum,cvv,payment,phone_no) VALUES('".$name."','".$email."','".$productItem."',
    '".$address."','".$zip."','".$total."','".$cname."','".$ccnum."','".$cvv."','".$card."','".$phoneNo."')";
    mysqli_query($conn,$insertquery);
    $customer_ID =$conn->insert_id;
    Insertproduct($cartItems,$conn,$customer_ID);    
}

$tracking = uniqid('#MY');  
print_r($tracking);

/* Insert product to table productitem to relate the table with customerinfo*/
function Insertproduct($array, $connect,$customer_ID)  
{  
  
     if(is_array($array))  
     {  
          foreach($array as $row => $value)  
          {  
               $item_name = mysqli_real_escape_string($connect, $value['name']);  
               $qty = mysqli_real_escape_string($connect, $value['inCart']);  
               $price = mysqli_real_escape_string($connect, $value['price']);  
               $sql = "INSERT INTO productitem(customer_id,ProductName,Price,inCart) VALUES ('".$customer_ID."','".$item_name."', '".$price."', '".$qty."')";  
               mysqli_query($connect, $sql);  
          }  
     }  
}  

?>