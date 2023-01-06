<?php
session_start();
require_once 'classes.php';
$con = new Conection('user');

?>

<!DOCTYPE html>
<html lang="PT-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- LINK CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- LINK JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- FONT GOOGLE -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik+Vinyl&display=swap" rel="stylesheet">
    <title>Login</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Lobster', cursive;
            font-family: 'Roboto', sans-serif;
        }

        body {
            background-color: #171923;
        }

        .container {
            background-color: #212529;
            margin-top: 10em;
            border-radius: 0.5em;
        }

        a {
            font-size: 20px;
        }

        #slide {
            overflow: hidden;
            margin-top: 5em;
            /* background-color: red; */
        }

        #logo {
            /* background-color: green; */
            position: relative;
            color: white;
            width: 30%;
            text-align: center;
            font-size: 3em;
            font-family: 'Rubik Vinyl', cursive;
            animation: mymove 50s infinite linear;

        }

        #logo h6 {
            margin-top: -4em;
        }


        @keyframes mymove {
            from {
                left: 100%;
            }

            to {
                left: -32%;
            }
        }
    </style>
</head>

<body>

    <?php
    if (isset($_POST['entrar'])) {
        
        $l = $_POST['login'];
        $lo = strtolower($l);
        $log = trim($lo);
        $login = addslashes($log);


        $p = $_POST['pass'];
        $pa = strtolower($p);
        $pas = trim($pa);
        $pass = addslashes($pas);

        $_SESSION['user'] = $login;

        $res =  $con->access_verify($login, $pass);
    }


    ?>

    <div class="container text-white col-2 p-5 ">
        <form method="post" class="form-group">

            <label for="login">Login</label>
            <input type="text" name='login' class="form-control">
            <br>
            <label for="senha">Senha</label>
            <input type="text" name='pass' class="form-control">
            <br><br>
            <input type="submit" name='entrar' value='entrar' class="btn btn-primary form-control mb-5">
            <br><br>
            <a href="create_account.php">criar uma conta</a>
        </form>
    </div>


    <div id="slide">
        <div id="logo">
            Tag_Nativa &nbsp;&nbsp; Sistemas &nbsp;&nbsp; <h6><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                    <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z" />
                </svg>&nbsp;&nbsp; (14) 99654 - 6814</h6>

        </div>
    </div>

</body>

</html>