<?php

class Conection
{
    private $pdo;
    public function __construct($dbname, $host = 'localhost', $user = 'root', $pass = '')
    {
        try {
            $this->pdo = new PDO("mysql:dbname=$dbname;host=$host", $user, $pass);
        } catch (PDOException $e) {
            echo "ERRO COM PDO : " . $e->getMessage();
        }
    }



    public function create_account($login, $pass)
    {
        if ($_POST['cargo'] == 'vendedor') {
            $cmd = $this->pdo->prepare("SELECT * FROM vendedor WHERE log = :l");
            $cmd->bindValue(":l", $login);
            $cmd->execute();
            if ($cmd->rowCount() > 0) {
                echo 'USUARIO JÁ CADASTRADO';
            } else {
                $create = $this->pdo->prepare("INSERT INTO vendedor(log, pass)VALUES(:l, :p)");

                $create->bindValue(":l", $login);
                $create->bindValue("p", $pass);
                $create->execute();

                header("location: index.php");
            }
        } else if ($_POST['cargo'] == 'escritorio') {
            $cmd = $this->pdo->prepare("SELECT * FROM escritorio WHERE log = :l");
            $cmd->bindValue(":l", $login);
            $cmd->execute();
            if ($cmd->rowCount() > 0) {
                echo 'USUARIO JÁ CADASTRADO';
            } else {
                $create = $this->pdo->prepare("INSERT INTO escritorio(log, pass)VALUES(:l, :p)");

                $create->bindValue(":l", $login);
                $create->bindValue("p", $pass);
                $create->execute();

                header("location: index.php");
            }
        }
    }

    public function access_verify($login, $pass)
    {
        $access = $this->pdo->prepare("SELECT * FROM vendedor WHERE log = :l");
        $access->bindValue(":l", $login);
        $access->execute();
        $res = $access->fetch(PDO::FETCH_ASSOC);

        if ($access->rowCount() > 0 && $res['pass'] == $pass) {
            $control = $this->pdo->query("SHOW TABLES");
            $control->execute();
            $cont = $control->fetchAll(PDO::FETCH_ASSOC);
            for ($i = 0; $i < count($cont); $i++) {
                foreach ($cont[$i] as $key => $value) {
                    if ($value != $login) {
                        continue;
                    } else {
                        header("location: dashboard_vend.php");
                        break;
                    }
                }
            }

            $sql = "CREATE TABLE $login (
                    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                    entrega DATE NOT NULL,
                    cliente VARCHAR(30) NOT NULL,
                    cidade VARCHAR(30) NOT NULL,
                    silk VARCHAR(30) NOT NULL,
                    modelo VARCHAR(30) NOT NULL,
                    cor1 VARCHAR(30) NOT NULL,
                    cor2 VARCHAR(30),
                    cor3 VARCHAR(30),
                    cor4 VARCHAR(30),
                    cor5 VARCHAR(30),
                    palmilha VARCHAR(30) NOT NULL,
                    salto VARCHAR(30) NOT NULL,
                    forro VARCHAR(30) NOT NULL,
                    taloneira VARCHAR(30) NOT NULL,
                    enfeite VARCHAR(30),
                    n33 VARCHAR(30),
                    n34 VARCHAR(30),
                    n35 VARCHAR(30),
                    n36 VARCHAR(30),
                    n37 VARCHAR(30),
                    n38 VARCHAR(30),
                    n39 VARCHAR(30),
                    n40 VARCHAR(30),
                    n41 VARCHAR(30),
                    n42 VARCHAR(30),
                    n43 VARCHAR(30),
                    obs VARCHAR(30),
                    emissao VARCHAR(30)
                    )";

            $this->pdo->exec($sql);
            header("location: dashboard_vend.php");
        } else {
            $access = $this->pdo->prepare("SELECT * FROM escritorio WHERE log = :l");
            $access->bindValue(":l", $login);
            $access->execute();
            $res = $access->fetch(PDO::FETCH_ASSOC);

            if ($access->rowCount() > 0 && $res['pass'] == $pass) {
                header("location: dashboard_esc.php");
            }
        }
    } // FIM DA FUNÇÃO


    public function cad_ficha($tab_vend,$entrega,$cliente,
    $cidade,$silk,$modelo,$cor1,$cor2,$cor3,$cor4,$cor5,
    $palmilha,$salto,$forro,$taloneira,$enfeite,$n33,
    $n34,$n35,$n36,$n37,$n38,$n39,$n40,$n41,$n42,
    $n43,$obs,$emissao) {

        $cad = $this->pdo->prepare("INSERT INTO $tab_vend(entrega,cliente, cidade, silk,modelo,
         cor1, cor2, cor3, cor4, cor5, palmilha, salto, forro, taloneira, enfeite, n33, n34, n35,
          n36, n37, n38, n39, n40, n41, n42, n43, obs, emissao) 
          VALUES(:ent,:cli,:ci,:si,:mod,:c1,:c2,:c3,:c4,:c5,:pa,:sa,:fo,:ta,:en, :n33, :n34, :n35,
           :n36, :n37, :n38, :n39, :n40, :n41, :n42, :n43, :obs, :em)");

        $cad->bindValue(':ent', $entrega);
        $cad->bindValue(':cli', $cliente);
        $cad->bindValue(':ci', $cidade);
        $cad->bindValue(':si', $silk);
        $cad->bindValue(':mod', $modelo);
        $cad->bindValue(':c1', $cor1);
        $cad->bindValue(':c2', $cor2);
        $cad->bindValue(':c3', $cor3);
        $cad->bindValue(':c4', $cor4);
        $cad->bindValue(':c5', $cor5);
        $cad->bindValue(':pa', $palmilha);
        $cad->bindValue(':sa', $salto);
        $cad->bindValue(':fo', $forro);
        $cad->bindValue(':ta', $taloneira);
        $cad->bindValue(':en', $enfeite);
        $cad->bindValue(':n33', $n33);
        $cad->bindValue(':n34', $n34);
        $cad->bindValue(':n35', $n35);
        $cad->bindValue(':n36', $n36);
        $cad->bindValue(':n37', $n37);
        $cad->bindValue(':n38', $n38);
        $cad->bindValue(':n39', $n39);
        $cad->bindValue(':n40', $n40);
        $cad->bindValue(':n41', $n41);
        $cad->bindValue(':n42', $n42);
        $cad->bindValue(':n43', $n43);
        $cad->bindValue(':obs', $obs);
        $cad->bindValue(':em', $emissao);


        $cad->execute();
    }

    public function historico($id,$vendedor,$entrega,$cliente,
    $cidade,$silk,$modelo,$cor1,$cor2,$cor3,$cor4,$cor5,
    $palmilha,$salto,$forro,$taloneira,$enfeite,$n33,
    $n34,$n35,$n36,$n37,$n38,$n39,$n40,$n41,$n42,
    $n43,$obs,$emissao) {

        $cad = $this->pdo->prepare("INSERT INTO historico(id,vendedor,entrega,cliente, cidade, silk,modelo,
         cor1, cor2, cor3, cor4, cor5, palmilha, salto, forro, taloneira, enfeite, n33, n34, n35,
          n36, n37, n38, n39, n40, n41, n42, n43, obs, emissao) 
          VALUES(:id,:vend,:ent,:cli,:ci,:si,:mod,:c1,:c2,:c3,:c4,:c5,:pa,:sa,:fo,:ta,:en, :n33, :n34, :n35,
           :n36, :n37, :n38, :n39, :n40, :n41, :n42, :n43, :obs, :em)");

        $cad->bindValue(':id', $id);
        $cad->bindValue(':vend', $vendedor);
        $cad->bindValue(':ent', $entrega);
        $cad->bindValue(':cli', $cliente);
        $cad->bindValue(':ci', $cidade);
        $cad->bindValue(':si', $silk);
        $cad->bindValue(':mod', $modelo);
        $cad->bindValue(':c1', $cor1);
        $cad->bindValue(':c2', $cor2);
        $cad->bindValue(':c3', $cor3);
        $cad->bindValue(':c4', $cor4);
        $cad->bindValue(':c5', $cor5);
        $cad->bindValue(':pa', $palmilha);
        $cad->bindValue(':sa', $salto);
        $cad->bindValue(':fo', $forro);
        $cad->bindValue(':ta', $taloneira);
        $cad->bindValue(':en', $enfeite);
        $cad->bindValue(':n33', $n33);
        $cad->bindValue(':n34', $n34);
        $cad->bindValue(':n35', $n35);
        $cad->bindValue(':n36', $n36);
        $cad->bindValue(':n37', $n37);
        $cad->bindValue(':n38', $n38);
        $cad->bindValue(':n39', $n39);
        $cad->bindValue(':n40', $n40);
        $cad->bindValue(':n41', $n41);
        $cad->bindValue(':n42', $n42);
        $cad->bindValue(':n43', $n43);
        $cad->bindValue(':obs', $obs);
        $cad->bindValue(':em', $emissao);


        $cad->execute();
    }

    public function finalizar_pedido($tab_vend)
    {
        $cmd = $this->pdo->query("SELECT * FROM $tab_vend");
        $cmd->execute();
        $res = $cmd->fetchAll(PDO::FETCH_ASSOC);
        return $res;
    }

    public function apagar_tabela_vendedor($tab_vend){
        $cmd = $this->pdo->query("DELETE FROM $tab_vend");
        $cmd->execute();
    }




   
} //FINAL DA CLASSE CONECTION
