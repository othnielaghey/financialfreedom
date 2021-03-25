<?php include '../config/index.php';

    if(!isset($_SESSION['sess_user_id']) || !isset($_SESSION['sess_user_name']) || !isset($_SESSION['sess_name'])){
    header('Locaton: index.php');
    }

    $q = "SELECT * FROM users";

    $sth = $pdo->prepare($q);
    $sth->execute();
    $collections = $sth->fetchAll();



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

                        <a href="logout.php" id="rigght-btn">Se deconnecter</a>

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

                                <th class="th-sm">
                                    Nom & prénom
                                </th>

                                <th class="th-sm">
                                    Email
                                </th>

                                <th class="th-sm">
                                    Numéro de telephone
                                </th>

                                <th class="th-sm">
                                    profession
                                </th>

                            </tr>

                        </thead>

                        <tbody>

                            <?php foreach ($collections as $collection): ?>

                                <tr>

                                <td><?= $collection['nom'];?></td>
                                <td><?= $collection['email'];?></td>
                                <td><?= $collection['numero'];?></td>
                                <td><?= $collection['profession'];?></td>
                                <td>
                                    <a href="view_info.php?id=<?= $collection['id'];?>" id="rigght-btn">En savoir plus</a>
                                </td>

                                </tr>

                            <?php endforeach ?>
                        </tbody>

                    </table>

                </div>

            </div>

        </div>



</body>
</html>