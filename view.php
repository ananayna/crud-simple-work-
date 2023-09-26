<?php
include './enb.php';
$postId = $_REQUEST['id'];
$query = "SELECT * FROM addproduct WHERE id = '$postId'";
$result = mysqli_query($conn, $query);
$view = mysqli_fetch_assoc($result);
include './fontside/header.php';
?>


        <section class="mt-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 mx-auto">
                        <div class="card">
                            <div class="card-header">
                                <h2 class="text-warning"><?= $view['title'] ?></h2>
                                <p class="bg-light"><?= $view['price'] ?>/-</p>

                            </div>
                            <div class="card-body">
                                <p>
                                <?= $view['descrip'] ?>
                                </p>
                            </div>
                            <div class="card-footer">
                                <p>By <?= $view['author'] ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    </body>

</html>