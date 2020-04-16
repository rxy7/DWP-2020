<!DOCTYPE html>
<html lang="en">
<head>
 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
    <title><?php echo $page_title; ?></title>
 
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"  rel="stylesheet">
<!-- Font Awesome Icons -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
  <link href="./assets/styles.css"  rel="stylesheet">
  
</head>
<body>
 
    <!-- container -->
    <div class="container-fluid">
 
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
   
    <img class="duck-logo" src="./assets/images/logo.png">
    <a class="navbar-brand" href="#">DUCK SHOP</a>



   
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
   
        

       
        
            <div class="collapse navbar-collapse row" id="navbarNav">
                <ul class="navbar-nav col">
         
                     <li class="nav-item active ">
                        <a class="nav-link " href="#"> <i class="fas fa-home"></i> Home &nbsp; <span class="sr-only">(current)</span></a>
                    </li>

                    <li class="nav-item ">
                        <a class="nav-link " href="#"><i class="fas fa-money-check-alt"></i>&nbsp;Products</a>
                    </li>

                    <li class="nav-item ">
                        <a class="nav-link disabled " href="#"> <i class="fas fa-user-shield"></i> &nbsp;Admin Panel</a>
                     </li>

                </ul>

           
        
        <div class="col d-flex justify-content-end">
        <div class="user-icon "> <i class="fas fa-user"></i></div>

        </div>
              
    </div>

    </nav>
        <?php
        // show page header
        echo "
        <div class='page-header m-3'>
            <div class='row d-flex justify-content-around'>
                <div class='col'><h1>{$page_title}</h1></div>
                <div data-toggle='tooltip' data-placement='left' title='Shopping Basket' class='col d-flex justify-content-end'><div class='basket-icon'  ><i class='fas fa-shopping-cart'></i></div></div>
            </div>
        </div>";
        ?>