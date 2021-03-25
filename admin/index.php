<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />

    <link rel="stylesheet" href="../Design/CSS/style.css">

    <title>Financial Freedom | Authentification</title>

    <link rel="shortcut icon" href="../Design/IMG/logo.png" type="image/x-icon">

</head>
<body>
    
    <div class="container-fluid">

        <div class="row">

            <div class="col-md-1">

            </div>

            <div class="col-md-9 p-5">

                <div class="row mt-5 mb-5">

                    <form action="" method="post">


                        <h3>Hello !</h3>
                        <span>Lol</span>

                        <br><br>

                        <input type="text" name="username" id="" class="form-control" placeholder="Votre adresse email">

                        <br>

                        <input type="password" name="password" id="" class="form-control" placeholder="Votre mot de passe">

                        <br>

                        <button type="submit" id="connexion-submit" name="user_submit">Se connecter</button>

                    </form>

                </div>

            </div>

        </div>

    </div>

    <?php require_once '../config/index.php'; 

if(isset($_POST['user_submit'])){

    $username = $_POST['username'];
    $password = $_POST['password'];

    if($username != "" && $password != ""){

        $query = "select * from `admin` where `username`=:username and `password`=:password";

        $stmt = $pdo->prepare($query);
        $stmt->bindParam('username', $username, PDO::PARAM_STR);
        $stmt->bindValue('password', $password, PDO::PARAM_STR);
        $stmt->execute();
        $count = $stmt->rowCount();
        $row   = $stmt->fetch(PDO::FETCH_ASSOC);

        if($count == 1 && !empty($row)){

            $_SESSION['sess_user_id']   = $row['id'];
            $_SESSION['sess_user_name'] = $row['username'];
            $_SESSION['sess_name'] = $row['name'];

            header('location:dashboard.php');

        }
        else{
            $msg = "Invalid username and password!";
        }
    }
    else {
        $msg = "Both fields are required!";
    }

}

    ?>

</body>
</html>