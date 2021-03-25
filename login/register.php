<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../Design/Outils/animate.min.css">
    <script src="../Design/Outils/jquery-3.4.1.min.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />

    <link rel="stylesheet" href="../Design/CSS/style.css">

    <title>Financial Freedom | Register</title>

    <link rel="shortcut icon" href="../Design/IMG/logo.png" type="image/x-icon">

</head>

<body>

    <div class="container">

        <div class="row mt-3 pb-2" style="border-bottom: 1px solid black;">

            <div class="col-md-2">

                <h2>Bienvenue !</h2>

            </div>

            <div class="col-md-9"></div>

            <div class="col-md-1">

                <button onclick="goBack()" id="goback">Retour</button>

            </div>

        </div>

        <div class="row">

            <div class="col-md-8">

                <h1>Inscrivez-vous, pour faire partie de l'aventure !</h1>
                <p>Veuillez remplir le formulaire ci-dessous. Nous nous engageons à protéger vos données personnelles.</p>

            </div>

        </div>

        <div class="row mt-5">

            <div class="col-md-12">

                <form action="" method="post" class="row g-3">

                    <div class="col-md-6">

                        <label for="">Votre nom et prénom</label>
                        <input type="text" name="name" id="" class="form-control">

                    </div>

                    <div class="col-md-6">

                        <label for="">Votre email</label>
                        <input type="email" name="email" id="" class="form-control">

                    </div>

                    <div class="col-md-6">

                        <label for="">Votre sexe</label>
                        <select name="sexe" id="" class="form-select">
                            <option value=""></option>
                            <option value="Homme">Homme</option>
                            <option value="Femme">Femme</option>
                        </select>

                    </div>
                    
                    <div class="col-md-6">

                        <label for="">Votre profession</label>
                        <input type="text" name="profession" id="" class="form-control">

                    </div>

                    <div class="col-md-4">

                        <label for="">Votre numéro de téléphone</label>
                        <input type="tel" name="numero" id="" class="form-control">

                    </div>

                    <div class="col-md-4">

                        <label for="">Votre numéro whatsapp</label>
                        <input type="tel" name="whatsapp" id="" class="form-control">

                    </div>

                    <div class="col-md-4">

                        <label for="">Votre pays de résidence</label>
                        <input type="text" name="pays" id="" class="form-control">

                    </div>

                    <div class="col-md-4">

                        <label for="">Votre choix du programme d'investissement</label>
                        <select name="programme" id="programme" class="form-select">
                            <option value="Regular pack">Regular pack</option>
                            <option value="Low pack">Low pack</option>
                            <option value="Medium pack">Medium pack</option>
                            <option value="High pack">High pack</option>
                            <option value="Top pack">Top pack</option>
                        </select>

                    </div>

                    <div class="col-md-4">

                        <label for="">Quel est votre capital d'investissement ?</label>
                        <select name="capital" id="capital" class="form-select">
                            <optgroup id="regular-invest" label="Regular Pack">
                                <option value="1000r">450.000 f cfa / $1000</option>
                                <option value="1444">650.000 f cfa / $1444</option>
                                <option value="1888">850.000 f cfa / $1888</option>
                                <option value="2666">1.200.000 f cfa / $2666</option>
                                <option value="6666">3.000.000 f cfa / $6666</option>
                                <option value="7777">3.500.000 f cfa / $7777</option>
                                <option value="10000">4.500.000 f cfa / $10.000</option>
                                <option value="18888">8.500.000 f cfa / $18.888</option>
                                <option value="33333">15.000.000 f cfa / $33.333</option>                                          
                            </optgroup>

                            <optgroup id="low-invest" label="Low Pack">
                                <option value="122">55.000 f cfa / $122</option>
                                <option value="337">170.000 f cfa / $337</option>
                            </optgroup>

                            <optgroup id="medium-invest" label="Medium Pack">
                                <option value="1000m">450.000 f cfa / $1000</option>
                                <option value="1233">555.000 f cfa / $1233</option>
                                <option value="2333">1.050.000 f cfa / $2333</option>
                                <option value="3455">1.555.000 f cfa / $3455</option>
                            </optgroup>

                            <optgroup id="high-invest" label="High Pack">
                                <option value="7777m">3.500.000 f cfa / $7777</option>
                                <option value="14444">6.500.000 f cfa / $14.444</option>
                                <option value="25555">11.500.000 f cfa / $25.555</option>
                            </optgroup>

                            <optgroup id="top-invest" label="Top Pack">
                                <option value="444">200.000 f cfa / $444</option>
                                <option value="777">350.000 f cfa / $777</option>
                                <option value="1466">660.000 f cfa / $1466</option>
                                <option value="2122">955.000 f cfa / $2122</option>
                                <option value="2888">1.300.000 f cfa / $2888</option>
                                <option value="3555">1.600.000 f cfa / $3555</option>
                                <option value="7777t">3.500.000 f cfa / $7777</option>
                                <option value="10666">4.800.000 f cfa / $10.666</option>
                                <option value="14444">6.500.000 f cfa / $14.444</option>
                                <option value="27777">12.500.000 f cfa / $27.777</option>
                                <option value="47777">21.500.000 f cfa / $47.777</option>
                                <option value="78888">35.500.000 f cfa / $78.888</option>
                                <option value="166666">75.000.000 f cfa / $166.666</option>
                            </optgroup>
                        </select>

                    </div>

                    <div class="col-md-4">

                        <label for="">Quel durée d'investissement, choisissez-vous ?</label>
                        <select name="duree" id="duree" class="form-select">

                        </select>

                    </div>

                    <div class="col-md-6">

                        <label for="">Un créneau libre pour discuter au téléphone ?</label>
                        <input type="time" name="heure" id="" class="form-control">

                    </div>
                    
                    <div class="col-md-6">

                        <label for="">Quand pouvez-vous débuter votre investissement ?</label>
                        <input type="date" name="date_debut" id="" class="form-control">

                    </div>
                    
                    <div class="col-md-12 text-center">

                        <span>Votre retour sur investissement est de</span>

                        <h1></h1>
                        <span>FCFA</span>

                    </div>

                    <div class="col-md-6">

                        <label for="">Creer votre mot de passe</label>
                        <input type="password" name="password" id="" class="form-control">
                        <span class="invalid-feedback"><?php echo $password_err; ?></span>

                    </div>

                    <div class="col-md-6">

                        <label for="">Confirmer votre mot de passe</label>
                        <input type="password" name="confirm_password" id="" class="form-control">

                    </div>

                    <div class="col-md-12 mb-5">

                        <input type="submit" value="S'inscrire" class="form-control" id="connexion-submit">

                    </div>
                </form>

            </div>

        </div>

        <div class="row text-center">

            <div class="col-md-12">

                <p>Vous avez déjà un compte ? <a href="index.html" id="login-btn">Connectez-vous</a></p>

            </div>

        </div>

    </div>

    <script>
        function goBack() {
          window.history.back();
        }
    </script>
    <script>
            if (document.getElementById('programme').options[0].selectedIndex == "Regular pack") {
alert('running');
    document.getElementById('capital').innerHTML +=  `
    <option value="1000">450.000 f cfa / 1000$</option>
    <option value="1000">450.000 f cfa / 1000$</option>
    <option value="1000">450.000 f cfa / 1000$</option>
    `
}
    </script>

    <script src="../Design/JS/main.js"></script>

    <?php require_once '../config/index.php';

    $password_err = '';

    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        $name = trim($_POST['name']);
        $email = trim($_POST['email']);
        $sexe = trim($_POST['sexe']);
        $profession = trim($_POST['profession']);
        $phone = trim($_POST['numero']);
        $whatsapp = trim($_POST['whatsapp']);
        $pays = trim($_POST['pays']);
        $programme = trim($_POST['programme']);
        $capital = trim($_POST['capital']);
        $duree = trim($_POST['duree']);
        $heure = trim($_POST['heure']);
        $date_debut = trim($_POST['date_debut']);
        $password =  trim($_POST['password']);
        $confirm_password = trim($_POST['confirm_password']);

        if(empty($password)){
            $password_err = 'Please enter password';
        }elseif(strlen($password) < 8){
            $password_err = 'Password must be at least 8 characters ';
        }

        if(empty($confirm_password)){
            $password_err = 'Please confirm password';
        }else {
            if($password !== $confirm_password){
              $password_err = 'Passwords do not match';
            }
        }

        if(empty($email) || empty($password)){
            die('X');
        }
        else{
            $password = password_hash($password, PASSWORD_DEFAULT);

            $sql = 'INSERT INTO users (nom,email,sexe,profession,numero,whatsapp,pays,programme,capital,duree,heure,date_debut,password) VALUES (:nom,:email,:sexe,:profession,:numero,:whatsapp,:pays,:programme,:capital,:duree,:heure,:date_debut,:password)';

            if($stmt = $pdo->prepare($sql)){
                $stmt->bindParam(':nom', $name, PDO::PARAM_STR);
                $stmt->bindParam(':email', $email, PDO::PARAM_STR);
                $stmt->bindParam(':sexe', $sexe, PDO::PARAM_STR);
                $stmt->bindParam(':profession', $profession, PDO::PARAM_STR);
                $stmt->bindParam(':numero', $phone, PDO::PARAM_STR);
                $stmt->bindParam(':whatsapp', $whatsapp, PDO::PARAM_STR);
                $stmt->bindParam('pays', $pays, PDO::PARAM_STR);
                $stmt->bindParam(':programme', $programme, PDO::PARAM_STR);
                $stmt->bindParam(':capital', $capital, PDO::PARAM_STR);
                $stmt->bindParam(':duree', $duree, PDO::PARAM_STR);
                $stmt->bindParam(':heure', $heure, PDO::PARAM_STR);
                $stmt->bindParam(':date_debut', $date_debut, PDO::PARAM_STR);
                $stmt->bindParam(':password', $password, PDO::PARAM_STR);

                if($stmt->execute()){
                    header('location: ../login/index.php');
                }else{
                    die('Wrong');
                }

            }
            unset($stmt);
        }

        unset($pdo);

    }

    ?>

</body>

</html>