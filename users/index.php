<?php require_once '../config/index.php';
    session_start();
    if(!isset($_SESSION['id'])){
        header('Location: ../login/index.php');
        exit();
    }

    if(isset($_GET['id'])){
        $id = $_GET['id'];

        if(empty($id)){

            error_log('Hey');

        }else{

            $q = "SELECT * FROM users WHERE id = '".$id."'";

            $sth = $pdo->prepare($q);
            $sth->execute();
        
            $hello = $sth->fetch(PDO::FETCH_ASSOC);

        }

    }



?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../Design/CSS/style.css">
    <script src="Design/Outils/jquery-3.4.1.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <title>Financial Freedom | Reach your financial goal's</title>

    <link rel="shortcut icon" href="../Design/IMG/logo.png" type="image/x-icon">

</head> 

<body>

    <!-- Header Section -->

        <header>

            <div class="container-fluid">
        
                <div class="row">
        
                    <div id="logo" class="col-md-2">
        
                        <img src="../Design/IMG/logoblock.png" alt="">
        
                    </div>
        
                    <div class="col-md-4"></div>

                    <div class="col-md-4 text-end">

                        <h2><?= $hello['nom'];?></h2>

                    </div>

                    <div class="col-md-2">

                        <a href="logout.php" id="rigght-btn">Se deconnecter</a>

                    </div>
        
                </div>
        
            </div>
    
        </header>
        
    <!-- Header end -->

        <div class="container">

            <div class="row mt-5">

                <div class="col-md-6 mt-5 g-3">

                    <div class="text-center mt-5" id="mycart">

                        <p>Vous avez choisi un</p>

                        <h2></h2>

                        <p>de capital</p>

                        <h2></h2>

                        <p>sur une durée de</p>

                        <h2></h2>

                    </div>

                </div>

                <div class="col-md-6 mt-5 g-3">

                    <div class="mt-5 text-center" id="mycart">
                        <img src="../Design/IMG/graph.jpg" alt="">
                    </div>

                </div>

            </div>

        </div>

    
    <!-- footer section -->

        <footer style="border-top: 1px solid grey;">
 
            <div class="container">

                <div class="row mt-1">

                    <div class="col-md-12 text-start">

                        <a href=""><i class="fab fa-facebook-f  me-2 rs rs1"></i></a>
                        <a href=""><i class="fab fa-twitter me-2 rs rs2"></i></a>
                        <a href=""><i class="fab fa-instagram me-2 rs rs3"></i></a>
                        <a href=""><i class="fab fa-telegram-plane rs rs4"></i></a>

                    </div>

                </div>

                <div class="row">

                    <div class="col-md-12 text-end mt-1">

                        <p>Copyright © 2023</p>

                        <p>Website made by <a href="https://datkominformatics.com" target="_blank" rel="noopener noreferrer" id="webmaker">DATKOM-INFORMATICS</a></p>

                    </div>

                </div>

            </div>

        </footer>

    <!-- footer end -->

    <script src="Design/JS/main.js"></script>

    <?php 
    

    
    ?>

</body>

</html>