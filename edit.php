<?php
session_start();
include './enb.php';
$postId = $_REQUEST['id'];
$query = "SELECT * FROM addproduct WHERE id = '$postId'";
$result = mysqli_query($conn, $query);
$view = mysqli_fetch_assoc($result);

include './fontside/header.php';
?>
 <div class="container mt-5">
    <p class="h1 text-center text-capitalize bg-info text-danger">Product Update</p>
    <hr class="w-80" />

<div class= "w-50 mx-auto mt-5">
        <form action="./controler/updatecon.php?id=<?= $view['id'] ?>" method="POST" enctype="multipart/form-data" >
                 <h5 class="text-info"><?php
                echo isset($_SESSION['meg'])? $_SESSION['meg']:"";
                ?></h5>
            <div class="form-group">
                <label>author name</label>
                <input value="<?= $view['author'] ?>" type="text" class="form-control" placeholder="full name" name="author" />
                <p class="text-danger"><?php
                echo isset($_SESSION['author_error'])? $_SESSION['author_error']:"";
                ?></p>
            </div>
            <div class="form-group">
                <label>product name</label>
                <input value="<?= $view['title'] ?>" type="text" class="form-control" placeholder="title" name="title" />
                <p class="text-danger"><?php
                echo isset($_SESSION['title_error'])? $_SESSION['title_error']:"";
                ?></p>
            </div>
            <div class="form-group">
                <label>price</label>
                <input value="<?= $view['price'] ?>" type="number" class="form-control" placeholder="Product price" name="price"  />
                <p class="text-danger"><?php
                echo isset($_SESSION['price_error'])? $_SESSION['price_error']:"";
                ?></p>
            </div>
            <div class="form-group">
                <label>description</label>
                <textarea type="text" class="form-control" placeholder="description" name="des"><?= $view['descrip'] ?></textarea>
                <p class="text-danger"><?php
                echo isset($_SESSION['des_error'])? $_SESSION['des_error']:"";
                ?></p>
            </div>
            <br>
            <button type="submit" class="btn btn-primary cl">Uplode</button>
        </form>
    </div>
    <?php
session_unset();

?>