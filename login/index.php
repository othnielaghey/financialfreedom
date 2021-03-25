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

            <div class="col-md-4">

            </div>

            <div class="col-md-6 p-5">

                <div class="row">

                    <div class="col-md-2">

                        <button onclick="goBack()" id="goback"><i class="fas fa-arrow-left"></i></button>

                    </div>

                    <div class="col-md-10 text-right">

                        <a href=""></a>

                    </div>

                </div>

                <div class="row mt-5 mb-5">

                    <form action="" method="post">


                        <h3>Hello !</h3>
                        <span>Lol</span>

                        <br><br>

                        <input type="email" name="email" id="" class="form-control" placeholder="Votre adresse email">

                        <br>

                        <input type="password" name="password" id="" class="form-control" placeholder="Votre mot de passe">

                        <br>

                        <button type="submit" id="connexion-submit">Se connecter</button>

                    </form>

                </div>

                <div class="row">

                    <p>Vous n'avez pas de compte ? <a href="register.php" id="register-btn">Inscrivez vous</a></p>

                </div>

            </div>

        </div>

    </div>

    <script>
        function goBack() {
          window.history.back();
        }
    </script>

    <?php require_once '../config/index.php';
    
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        $email = trim($_POST['email']);
        $password = trim($_POST['password']);

        if(empty($email) || empty($password)){
            die('Error');
        }else{

            $sql = 'SELECT id, email, password FROM users WHERE email = :email';

            if($stmt = $pdo->prepare($sql)){
                $stmt->bindParam(':email', $email, PDO::PARAM_STR);

                if($stmt->execute()){

                    if($stmt->rowCount() === 1){

                        if($row = $stmt->fetch()){

                            $hashed_password = $row['password'];
                            if(password_verify($password, $hashed_password)){

                                session_start();
                                $_SESSION['email'] = $email;
                                $_SESSION['id'] = $row['id'];
                                $_SESSION['name'] = $row['nom'];
                                header('location: ../users/index.php?id=' .$row['id']);
                                exit;
                                /*<?=$row['id'];?> */
                            }
                            else{
                                die('Password non valid');
                            }
                        }
                    } else{
                        die('Pas de compte trouvé');
                    }
                }else{
                    die('Wrong');
                }
            }

            unset($pdo);
        }

    }

    ?>

</body>

</html>