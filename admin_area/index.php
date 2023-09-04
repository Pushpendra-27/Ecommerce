<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin_Dashboard</title>
    <!--bootstrap CSS link  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Font Awesome  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- CSS link  -->
    <link rel="stylesheet" href="../style.css">
    <style>
    .admin_image {
        width: 100px;
        object-fit: contain;
    }

    .footer {
        position: absolute;
        bottom: 0;
    }
    </style>
</head>

<body>
    <!--nav bar  -->
    <div class="container-fluid p-0">
        <!-- first child -->
        <nav class="navbar navbar-expand-lg navbar-light bg-info">
            <div class="container-fluid">
                <img src="../image/logo.jpg" alt="" class="logo">
                <nav class="navbar navbar-expand-lg ">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="" class="nav-link">Welcome Guest!</a>

                        </li>

                    </ul>

                </nav>
            </div>
        </nav>

        <!-- Second Child -->
        <div class="bg-light">
            <h3 class="text-center p-3">Manage Details</h3>
        </div>
        <!--Third child  -->
        <div class="row">
            <div class="col-md-12 bg-secondary p-1 d-flex align-items-center">
                <div class="p-3">
                    <a href="#"><img src="../image/stra.jpg." alt="" class="admin_image"></a>
                    <p class="text-light text-center">Admin Name</p>
                </div>
                <div class="button text-center">
                    <!--button*10>a.nav-link.text-light.bg-info.my-1 -->
                    <button class="my-3"><a href="insert_product.php" class="nav-link text-light bg-info my-1">Insert
                            Products
                        </a></button>
                    <button><a href="" class="nav-link text-light bg-info my-1">View Products </a></button>
                    <button><a href="index.php?insert_category" class="nav-link text-light bg-info my-1">Insert
                            Category</a></button>
                    <button><a href="" class="nav-link text-light bg-info my-1">View Category</a></button>
                    <button><a href="index.php?insert_brand" class="nav-link text-light bg-info my-1">insert
                            brands</a></button>
                    <button><a href="" class="nav-link text-light bg-info my-1">View brands</a></button>
                    <button><a href="" class="nav-link text-light bg-info my-1">All Orders</a></button>
                    <button><a href="" class="nav-link text-light bg-info my-1">All payments</a></button>
                    <button><a href="" class="nav-link text-light bg-info my-1">List Users </a></button>
                    <button><a href="" class="nav-link text-light bg-info my-1"> Logout </a></button>
                </div>
            </div>
        </div>

        <!-- Fourth Child -->
        <div class="container my-3">
            <?php
            if(isset($_GET['insert_category'])){
                include('insert_categories.php');  
            }
            if(isset($_GET['insert_brand'])){
                include('insert_brands.php');  
            }
             
             
            ?>
        </div>



        <!--- last Child -->

        <div class="bg-info p-3 text-center footer">
            <p>© 2023 Copyright:E-commerce.com</p>
        </div>

    </div>


    <!--bootstarp Js link  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>