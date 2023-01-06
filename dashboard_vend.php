<?php
session_start();
require_once 'classes.php';
$enviar = new Conection('user');

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
    <!-- CSS MANUAL -->

    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            font-family: 'Lobster', cursive;
            font-family: 'Roboto', sans-serif;
        }

        body {
            background-color: #171923;
        }


        .item-nav {
            margin: 0 5em;
            text-decoration: none;
        }

        .bloco-user {
            /* background-color: blue; */
            width: 10%;
            margin-left: 2em;
            text-align: center;

        }

        .usuario {
            /* background-color: red; */
            width: 75%;
            height: 30%;
            margin-top: 4%;
            text-align: center;


        }

        .box-nav {
            display: flex;
        }

        #container {
            /* background-color: red; */

            color: white;

        }

        #box {
            /* background-color: chocolate; */
            display: flex;
            width: 100%;
            margin: 0 auto;
        }

        #bloco1 {
            /* background-color: blue; */
            width: 20%;
            /* height: 33.3%;
            margin-top: 6.7%; */
            padding: 1em;
        }

        #bloco2 {
            /* background-color: green; */
            width: 20%;
            padding: 1em;
        }

        #bloco3 {
            /* background-color: silver; */
            width: 20%;
            padding: 1em;
        }

        #bloco4 {
            /* background-color: yellow; */
            width: 20%;
            padding: 1em;
        }

        #bloco5 {
            /* background-color: blueviolet; */
            width: 20%;
            /* height: 33.3%;
            margin-top: 6.7%; */
            padding: 1em;
        }

        #bloco6 {
            /* background-color: aqua; */
            width: 20%;
            padding: 1em;
        }

        #grade {
            /* background-color: silver; */
            display: flex;
            width: 100%;
            text-align: center;
        }

        #grade input {
            width: 3.1em;

        }

        #grade div {
            margin-left: 2em;

        }

        #botao_finalizar {
            width: 10em;
            margin-left: 73%;
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
    <title>Area do Vendedor</title>
</head>

<body>



    <!-- INICIO DO NAV -->
    <div class="collapse" id="navbarToggleExternalContent">
        <div class="bg-dark p-4 text-white h4">

            <div class='box-nav'>

                <div class="bloco-user">
                    <?php
                    echo "Bem-Vindo(a) !";
                    echo "<br>";
                    echo "<br>";
                    ?>


                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                        <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z" />
                    </svg>

                    <?php
                    echo  $_SESSION['user'];
                    ?>

                    <br><br>
                    <a href="index.php" id='sair' class='btn btn-danger form-control'>
                        Sair
                    </a>

                </div>
                <div class="usuario text-white h4">
                    <a href="ver_pedidos_vend.php" class='item-nav'>
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-card-list" viewBox="0 0 16 16">
                            <path d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z" />
                            <path d="M5 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 5 8zm0-2.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm0 5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm-1-5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zM4 8a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm0 2.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0z" />
                        </svg>

                        Ver Pedidos
                    </a>
                    <a href="#" class='item-nav'>
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-people" viewBox="0 0 16 16">
                            <path d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8Zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022ZM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816ZM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275ZM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0Zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4Z" />
                        </svg>

                        Meus Clientes
                    </a>
                    <a href="#" class='item-nav'>
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-person-add" viewBox="0 0 16 16">
                            <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm.5-5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 1 0Zm-2-6a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4Z" />
                            <path d="M8.256 14a4.474 4.474 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10c.26 0 .507.009.74.025.226-.341.496-.65.804-.918C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4s1 1 1 1h5.256Z" />
                        </svg>

                        Cadastrar
                        Clientes
                    </a>
                </div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>
    <!-- FINAL DO NAV -->

    <!-- INICIO DO FORMULARIO -->
    <?php
    if (isset($_POST['enviar'])) {

        $tab_vend = $_SESSION['user'];
        $entrega = $_POST['entrega'];
        $cliente = $_POST['cliente'];
        $cidade = $_POST['cidade'];
        $silk = $_POST['silk'];
        $modelo = $_POST['modelo'];
        $cor1 = $_POST['cor1'];
        $cor2 = $_POST['cor2'];
        $cor3 = $_POST['cor3'];
        $cor4 = $_POST['cor4'];
        $cor5 = $_POST['cor5'];
        $palmilha = $_POST['palmilha'];
        $salto = $_POST['salto'];
        $forro = $_POST['forro'];
        $taloneira = $_POST['taloneira'];
        $enfeite = $_POST['enfeite'];
        $n33 = $_POST['n33'];
        $n34 = $_POST['n34'];
        $n35 = $_POST['n35'];
        $n36 = $_POST['n36'];
        $n37 = $_POST['n37'];
        $n38 = $_POST['n38'];
        $n39 = $_POST['n39'];
        $n40 = $_POST['n40'];
        $n41 = $_POST['n41'];
        $n42 = $_POST['n42'];
        $n43 = $_POST['n43'];
        $obs = $_POST['obs'];
        $emissao = date('d/m/Y');

        $enviar->cad_ficha(
            $tab_vend,
            $entrega,
            $cliente,
            $cidade,
            $silk,
            $modelo,
            $cor1,
            $cor2,
            $cor3,
            $cor4,
            $cor5,
            $palmilha,
            $salto,
            $forro,
            $taloneira,
            $enfeite,
            $n33,
            $n34,
            $n35,
            $n36,
            $n37,
            $n38,
            $n39,
            $n40,
            $n41,
            $n42,
            $n43,
            $obs,
            $emissao
        );
    }
    ?>

    <!-- $enviar->cad_ficha($tab_vend,$entrega,$cliente,$cidade,$silk,$modelo,
    $cor1,$cor2,$cor3,$cor4,$cor5,$palmilha,$salto,$forro,$taloneira,
    $enfeite,$n33,$n34,$n35,$n36,$n37,$n38,$n39,$n40,$n41,$n42,$n43,
    $obs,$emissao); -->
    <div class="container col-12 mt-4" id="container">

        <form action="#" method='POST' class='form-group col-12 mt-5'>

            <div id='box'>

                <div id='bloco1'>
                    <label for="entrega">Data da Entrega</label>
                    <input type="date" name='entrega' class="form-control">
                    <br>

                    <label for="cor1">Cor 1</label>
                    <input type="text" name='cor1' class="form-control">
                    <br>
                    <label for="palmilha">Palmilha</label>
                    <input type="text" name='palmilha' class="form-control">
                    <br>
                </div>

                <div id='bloco2'>

                    <label for="cliente">Cliente</label><br>
                    <input type="text" name='cliente' class="form-control">
                    <br>
                    <label for="cor2">Cor 2</label>
                    <input type="text" name='cor2' class="form-control">
                    <br>
                    <label for="salto">Salto</label>
                    <input type="text" name='salto' class="form-control">
                    <br>
                </div>

                <div id='bloco3'>

                    <label for="cidade">Cidade</label>
                    <input type="text" name='cidade' class="form-control">
                    <br>
                    <label for="cor3">Cor 3</label>
                    <input type="text" name='cor3' class="form-control">
                    <br>
                    <label for="forro">Forro</label>
                    <input type="text" name='forro' class="form-control">

                </div>

                <div id='bloco4'>

                    <label for="silk">Silk</label>
                    <input type="text" name='silk' class="form-control">
                    <br>
                    <label for="cor4">Cor 4</label>
                    <input type="text" name='cor4' class="form-control">
                    <br>
                    <label for="taloneira">Taloneira</label>
                    <input type="text" name='taloneira' class="form-control">
                    <br>
                </div>

                <div id='bloco5'>

                    <label for="modelo">Modelo</label>
                    <input type="text" name='modelo' class='form-control'>
                    <br>
                    <label for="cor5">Cor 5</label>
                    <input type="text" name='cor5' class="form-control">
                    <br>
                    <label for="enfeite">Enfeite</label>
                    <input type="text" name='enfeite' class="form-control">
                    <br>
                </div>

            </div>
            <!--fim do box-->

            <div id='grade'>
                <div>
                    <label for="n33">33</label>
                    <input type="text" name='n33' class='form-control'>
                </div>
                <div>
                    <label for="n34">34</label>
                    <input type="text" name='n34' class='form-control'>
                </div>
                <div>
                    <label for="n35">35</label>
                    <input type="text" name='n35' class='form-control'>
                </div>
                <div>
                    <label for="n36">36</label>
                    <input type="text" name='n36' class='form-control'>
                </div>
                <div>
                    <label for="n37">37</label>
                    <input type="text" name='n37' class='form-control'>
                </div>
                <div>
                    <label for="n38">38</label>
                    <input type="text" name='n38' class='form-control'>
                </div>
                <div>
                    <label for="n39">39</label>
                    <input type="text" name='n39' class='form-control'>
                </div>
                <div>
                    <label for="n40">40</label>
                    <input type="text" name='n40' class='form-control'>
                </div>
                <div>
                    <label for="n41">41</label>
                    <input type="text" name='n41' class='form-control'>
                </div>
                <div>
                    <label for="n42">42</label>
                    <input type="text" name='n42' class='form-control'>
                </div>
                <div>
                    <label for="n43">43</label>
                    <input type="text" name='n43' class='form-control'>
                </div>


            </div>
            <!--fim da grade-->
            <br>

            <h5>Observações</h5>
            <textarea name="obs" id="" cols="100" rows="5"></textarea>

            <br><br>

            <input type="submit" name='enviar' value='Enviar' class='btn btn-primary' style='width:10em;'>


            <input type="submit" name='finalizar_lote' value='Finalizar' class='btn btn-danger' id='botao_finalizar'>


        </form>

    </div>

    <?php
    if (isset($_POST['finalizar_lote'])) {
        $tab_vend = $_SESSION['user'];
        $dados = $enviar->finalizar_pedido($tab_vend);

        $contador = 1;
        for ($i = 0; $i < count($dados); $i++) {
            $id = $dados[$i]['id'];
            $vendedor = $tab_vend;
            $entrega = date('d/m/y', strtotime($dados[$i]['entrega']));
            $cliente = $dados[$i]['cliente'];
            $cidade = $dados[$i]['cidade'];
            $silk = $dados[$i]['silk'];
            $modelo = $dados[$i]['modelo'];
            $cor1 = $dados[$i]['cor1'];
            $cor2 = $dados[$i]['cor2'];
            $cor3 = $dados[$i]['cor3'];
            $cor4 = $dados[$i]['cor4'];
            $cor5 = $dados[$i]['cor5'];
            $palmilha = $dados[$i]['palmilha'];
            $salto = $dados[$i]['salto'];
            $forro = $dados[$i]['forro'];
            $taloneira = $dados[$i]['taloneira'];
            $enfeite = $dados[$i]['enfeite'];
            $n33 = $dados[$i]['n33'];
            $n34 = $dados[$i]['n34'];
            $n35 = $dados[$i]['n35'];
            $n36 = $dados[$i]['n36'];
            $n37 = $dados[$i]['n37'];
            $n38 = $dados[$i]['n38'];
            $n39 = $dados[$i]['n39'];
            $n40 = $dados[$i]['n40'];
            $n41 = $dados[$i]['n41'];
            $n42 = $dados[$i]['n42'];
            $n43 = $dados[$i]['n43'];
            $obs = $dados[$i]['obs'];
            $emissao = $dados[$i]['emissao'];

    $enviar->historico($id,$vendedor,$entrega,$cliente,$cidade,$silk,
    $modelo,$cor1,$cor2,$cor3,$cor4,$cor5,$palmilha,$salto,
    $forro,$taloneira,$enfeite,$n33,$n34,$n35,$n36,$n37,
    $n38,$n39,$n40,$n41,$n42,$n43,$obs,$emissao);

    $enviar->apagar_tabela_vendedor($tab_vend);

        }
    }

    ?>

    <!-- $enviar->historico($id,$entrega,$cliente,$cidade,$silk,
    $modelo,$cor1,$cor2,$cor3,$cor4,$cor5,$palmilha,$salto,
    $forro,$taloneira,$enfeite,$n33,$n34,$n35,$n36,$n37,
    $n38,$n39,$n40,$n41,$n42,$n43,$obs,$emissao); -->


    <div id="slide">
        <div id="logo">
            Tag_Nativa &nbsp;&nbsp; Sistemas &nbsp;&nbsp; <h6><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                    <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z" />
                </svg>&nbsp;&nbsp; (14) 99654 - 6814</h6>

        </div>
    </div>

    </div>
    <!-- FINAL DO FORMULARIO -->
</body>

</html>