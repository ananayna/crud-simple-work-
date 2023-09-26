<?php
include './enb.php';
$query ="SELECT * FROM addproduct";
$result = mysqli_query($conn,$query);
$add = mysqli_fetch_all($result, 1);
include './fontside/header.php';
?>


   <div class="container mt-5">
    <p class="h1 text-center text-capitalize bg-info text-danger">Product List</p>
    <hr class="w-80" />
    <section id="">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <table id="dtable" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Sl. no</th>
                                    <th>Author Name</th>
                                    <th>Product Name</th>
                                    <th>price</th>
                                    <th>Description</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                foreach($add as $key=> $adds){ 
                                ?>
                                 <tr>
                                    <td scope="row"><?= ++$key?></td>
                                    <td scope="row"><?= $adds['author']?></td>
                                    <td scope="row"><?= $adds['title']?></td>
                                    <td scope="row"><?= $adds['price']?> /-</td>
                                    <td scope="row"><?= strlen($adds['descrip']) > 20 ?substr($adds['descrip'],0,20)."...":$adds['descrip']; ?></td>
                                    <td><div class="btn_group-sm">
                                        <a href="./view.php?id= <?= $adds['id']?>" class="btn btn-info">view</a>
                                        <a href="./edit.php?id= <?= $adds['id']?>" class="btn btn-warning">edit</a>
                                        <a href="./controler/deletepd.php?id= <?= $adds['id']?>" class="btn btn-danger">delete</a>
                                    </td>
                                    </div>
                                </tr>
                                <?php
                                }
                                ?>
                              
                            <tbody>
                          
                        </table>
                    </div>
                </div>
            </div>
        </section>
   </body>