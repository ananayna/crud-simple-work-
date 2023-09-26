<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bootstrap demo</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    </head>

    <body>

    <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark  ">
        <a class="navbar-brand" href="create.php">
            <h2>foody <span class="text-danger">Bangli</span></h2>
        </a>
        <button 
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#dipa"
        >
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="dipa">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="create.php">Add product</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="productlist.php">product list</a>
                </li>
            </ul>
        </div>
    </nav>
   </header>