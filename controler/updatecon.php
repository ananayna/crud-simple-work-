<?php 

session_start();
include './../enb.php';
$postId = $_REQUEST['id'];
$errors=[];


//validate name

$author = (trim($_REQUEST["author"]));
if(empty($author)){
    $errors["author_error"]= "enter name.";
}
else{
    if(strlen($author) > 50){
        $errors["author_error"]= "name must be 50 word.";
    }
}

//title validation

$title = (trim($_REQUEST["title"]));
if(empty($title)){
    $errors["title_error"]= "enter title.";
}
else{
    if(strlen($title) > 50){
        $errors["title_error"]= "title must be 50 word.";
    }
}


//price validation

$price = $_REQUEST["price"];
if (empty($price)){
    $errors["price_error"]= "enter price.";
 } else if (!is_numeric($price)){
       $errors["price_error"]= "plz enter a number.";
 }

 $des = (trim($_REQUEST["des"]));
if(empty($des)){
    $errors["des_error"]= "enter description.";
}
else{
    if(strlen($des) > 500){
        $errors["des_error"]= "description must be 500 word.";
    }
}



if (count($errors)>0){
    $_SESSION = $errors;
    header("location: ./../edit.php?id=$postId");
} else{
    $query = "UPDATE addproduct SET author='$author',title='$title',price='$price', descrip='$des' WHERE id='$postId'";

     $result=mysqli_query($conn,$query);
     header("location: ./../edit.php?id=$postId");
     if($result){
        $_SESSION["meg"]= "your product update successfully";
     }else{
        $_SESSION["meg"]= "somthing wrong";
     }
}