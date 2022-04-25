<?php
    session_start();
    require "conexao.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="https://kit.fontawesome.com/00d49addf7.js" crossorigin="anonymous"></script>
    <title>Template</title>
</head>
<body>
    <header>
        <nav class="black" role="navigation">
            <div class="nav-wrapper">
                <a href="#" class="brand-logo">LOGO</a>
                <a href="" data-target="mobile-nav" class="sidenav-trigger text-white"><i class="material-icons">menu</i></a>
                <ul class="right hide-on-med-and-down">
                    <li><a href="index.php">Início</a></li>
                    <li><a href="?p=add_texto">Cadastrar Texto</a></li>
                    <li><a href="#modal_sobre" class="modal-trigger">Sobre</a></li>
                    <li>
                    <?php
                    if(isset($_SESSION['userId'])){
                        $id = $_SESSION['userId'];
                        $sql = "SELECT nome FROM usuario WHERE id='$id'";
                        $result = $conexao->query($sql);
                        $linha = $result->fetch(PDO::FETCH_ASSOC);
                        echo '<li><a href="#" class="white-text">'.$linha['nome'].'</a></li>';
                    }
                    ?>
                    </li>
                    <?php
                    if(isset($_SESSION['userId'])){
                        $id = $_SESSION['userId'];
                        $sql = "SELECT * FROM usuario WHERE id='$id'";
                        $result = $conexao->query($sql);
                        $cont = $result->rowCount();
                        if($cont > 0){
                            while ($linha = $result->fetch(PDO::FETCH_ASSOC)){
                                $sql_img = "SELECT * FROM imagem WHERE usuario_id='$id'";
                                $result_img = $conexao->query($sql_img);
                                $linha_img = $result_img->fetch(PDO::FETCH_ASSOC);
                                $sql_tipo = "SELECT tipo FROM imagem WHERE usuario_id='$id'";
                                $tipos = $conexao->query($sql_tipo);
                                foreach($tipos as $tipo){
                                    if($linha_img['status'] == 0){
                                        echo '<li width="64" height="64"><a href="?p=foto"><img src="images/perfil/perfil'.$id.'.'.$tipo['tipo'].'" width="64" height="64"></a></li>';
                                    }
                                    else if ($linha_img['status'] == 1){
                                        echo '<li width="64" height="64"><a href="?p=foto"><img src="images/perfil/perfilpadrao.png" width="64" height="64"></a></li>';
                                    }
                                }
                                
                            }
                        }
                    }
                    ?>
                    <li>
                        <?php
                        if(isset($_SESSION['userId'])){
                            echo '<a href="pages/logout.php">Logout</a>';
                        }
                        else {
                            echo '<a href="?p=login">Login</a>';
                        }
                        ?>
                    </li>
                </ul>
            </div>

            <ul class="sidenav black" id="mobile-nav">
            <div class="row">
                <div class="col3"></div>
                <div class="col6">
                    <?php
                    if(isset($_SESSION['userId'])){
                        $id = $_SESSION['userId'];
                        $sql = "SELECT * FROM usuario WHERE id='$id'";
                        $result = $conexao->query($sql);
                        $cont = $result->rowCount();
                        if($cont > 0){
                            while ($linha = $result->fetch(PDO::FETCH_ASSOC)){
                                $sql_img = "SELECT * FROM imagem WHERE usuario_id='$id'";
                                $result_img = $conexao->query($sql_img);
                                $linha_img = $result_img->fetch(PDO::FETCH_ASSOC);
                                $sql_tipo = "SELECT tipo FROM imagem WHERE usuario_id='$id'";
                                $tipos = $conexao->query($sql_tipo);
                                foreach($tipos as $tipo){
                                    if($linha_img['status'] == 0){
                                        echo '<li width="64" height="64"><a href="?p=foto"><img src="images/perfil/perfil'.$id.'.'.$tipo['tipo'].'" width="64" height="64" class="white-text"></a></li>';
                                    }
                                    else if ($linha_img['status'] == 1){
                                        echo '<li width="64" height="64"><a href="?p=foto"><img src="images/perfil/perfilpadrao.png" width="64" height="64" class="white-text"></a></li>';
                                    }
                                }
                                
                            }
                        }
                    }
                    ?>
                </div>
                <div class="col3"></div>
            </div>
            <li>
            <?php
            if(isset($_SESSION['userId'])){
                $id = $_SESSION['userId'];
                $sql = "SELECT * FROM usuario WHERE id='$id'";
                $result = $conexao->query($sql);
                $linha = $result->fetch(PDO::FETCH_ASSOC);
                echo '<li><a href="#" class="white-text">'.$linha['nome'].'</a></li>';
            }
            ?>
            </li>
            <li>
                <?php
                if(isset($_SESSION['userId'])){
                    echo '<a href="pages/logout.php" class="white-text">Logout</a>';
                }
                else {
                    echo '<a href="?p=login" class="white-text">Login</a>';
                }
                ?>
            </li>
            <li><a href="index.php" class="white-text">Início</a></li>
            <li><a href="?p=add_texto" class="modal-trigger white-text">Cadastrar Texto</a></li>
            <li><a href="#modal_sobre" class="modal-trigger white-text">Sobre</a></li>
            </ul>

            <div id="modal_sobre" class="modal grey">
                <div class="section">
                    <div class="modal-content">
                        <h5>Título</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur fuga deserunt tempora rerum cupiditate quia minus alias numquam quos molestias totam, eum laudantium id voluptas, nulla, suscipit et enim ullam!</p>
                    </div>
                    <div class="modal-footer grey">
                        <a href="#!" class="modal-close btn black">Ok!</a>
                    </div>
                </div>
            </div>

            <script src="js/modal.js"></script>
            <script src="js/dropdown.js"></script>
        </nav>

        <div class="section">
            <div class="container">
                <h1 class="center">NOME BLOG</h1>
            </div>
        </div>
    </header>

    <main>
        <div class="section">
            <div class="container grey lighten-2">
                <div class="row">
                    <div class="col s12">
                        <!-- Parte dinâmica do site -->
                        <?php
                        $page = filter_input(INPUT_GET, 'p');
                        if($page && file_exists("pages/$page.php")){
                            require("pages/$page.php");
                        }
                        else{
                            echo "<p>Página Inicial</p>";
                            require("pages/textos.php");
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer class="page-footer black z-depth-1">
        <div class="row container">
            <div class="col s12 l8">
                <h5>Placeholder</h5>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis nam quibusdam eligendi iste voluptate obcaecati nihil eos itaque, eum dolorem cumque? Hic accusamus tempore alias itaque magni doloribus saepe quod!</p>
            </div>
            <div class="col s12 l4">
                <h5>Contato</h5>
                <ul>
                    <li>Placeholder</li>
                    <li>Placeholder</li>
                    <li>Placeholder</li>
                    <li>Placeholder</li>
                </ul>
            </div>
        </div>
        <div class="row">
            <hr>
            <div class="col s12"><p class="center">Caio Ferreira Cardoso - 2022</p></div>
        </div>
    </footer>

    <script type="text/javascript" src="js/materialize.min.js"></script>
</body>
</html>