<?php include '../config/index.php';

    if(!isset($_SESSION['sess_user_id']) || !isset($_SESSION['sess_user_name']) || !isset($_SESSION['sess_name'])){
    header('Locaton: index.php');
    }

    if(isset($_GET['id'])){
        $id = $_GET['id'];

        if(empty($id)){
            error_log('Aucun client trouvé');
        }
        else{

            $sql = "SELECT * FROM `users` WHERE id = '".$id."'";

            $sth = $pdo->prepare($sql);
            $sth->execute();

            $coll = $sth->fetch(PDO::FETCH_ASSOC);  

        }
    }



?>
<!DOCTYPE html>
<html lang="fr">
<head>

<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />

    <link rel="stylesheet" href="../Design/CSS/dashboard.css">
    <link rel="stylesheet" href="../Design/CSS/style.css">

    <title>Financial Freedom | Admin | dashboard</title>

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

                    <div class="col-md-4"></div>

                    <div class="col-md-2 text-end">

                        <a href="logout.php">Se deconnecter</a>

                    </div>
        
                </div>
        
            </div>
    
        </header>
        
    <!-- Header end -->

        <div class="container mt-5">

            <div class="row mt-5">

                <div class="col-md-12 mt-5">

                    <table class="table" width="100%">

                        <thead>

                            <tr>

                                <th colspan="2" class="th-sm text-center">
                                    <h2><?= $coll['nom']?></h2>
                                </th>

                            </tr>

                        </thead>

                        <tbody>

                            <tr>

                                <td><h4>Email</h4></td>
                                <td><?= $coll['email']?></td>

                            </tr>

                            <tr>

                                <td><h4>Sexe</h4></td>
                                <td><?= $coll['sexe']?></td>

                            </tr>

                            <tr>

                                <td><h4>Profession</h4></td>
                                <td><?= $coll['profession']?></td>

                            </tr>

                            <tr>

                                <td><h4>Numéro de téléphone</h4></td>
                                <td><?= $coll['numero']?></td>

                            </tr>

                            <tr>

                                <td><h4>Numéro whatsapp</h4></td>
                                <td><?= $coll['whatsapp']?></td>

                            </tr>

                            <tr>

                                <td><h4>Pays de résidence</h4></td>
                                <td><?= $coll['pays']?></td>

                            </tr>

                            <tr>

                                <td><h4>programme choisi</h4></td>
                                <td><?= $coll['programme']?></td>

                            </tr>

                            <tr>

                                <td><h4>Capital à investir</h4></td>
                                <td><?= $coll['capital']?></td>

                            </tr>

                            <tr>

                                <td><h4>Durée d'investissement</h4></td>
                                <td><?= $coll['duree']?></td>

                            </tr>

                            <tr>

                                <td><h4>Heure libre pour discuter au téléphone</h4></td>
                                <td><?= $coll['heure']?></td>

                            </tr>

                            <tr>

                                <td><h4>Date de début d'investissement</h4></td>
                                <td><?= $coll['date_debut']?></td>

                            </tr>

                            <tr>

                                <td></td>
                                <td></td>

                            </tr>

                        </tbody>

                    </table>

                </div>

            </div>

        </div>
 
        <div class="container mt-5 mb-5">

            <div class="row">

                <div class="col-md-2">

                    <button onclick="goBack()" id="goback">Retour</button>

                </div>

            </div>

        </div>

        <script>
        function goBack() {
          window.history.back();
        }
        </script>

</body>
</html>