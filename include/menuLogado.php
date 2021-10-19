<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <a href="index.php" class="navbar-brand">SEARCH PEOPLE</a>
        </div>
        <div class="navbar-collapse collapse navbar-right">
            <ul class="nav navbar-nav">
                <li>
                    <a href="index.php"><i class="fa fa-home"></i> Home</a>
                </li>
                <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-search"></i> Desaparecido <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="cadastroDes.php"><i class="fa fa-plus"></i> Cadastrar</a></li>
                        <li class="divider"></li>
                        <li><a href="ProcDesaparecido.php"><i class="fa fa-search"></i> Procurar</a></li>
                    </ul>
                </li>
                <li><a href="Parceiro.php"><i class="fa fa-check"></i> Parcerias</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-address-book-o"></i> <?php
                         if(isset($_SESSION['id'])){ echo "Olá {$_SESSION['nome']}";}else{echo "Conta";}  ?> <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="MinhaConta.php">Minha Conta</a></li>
                            <li class="divider"></li>
                        <li><a href="logout.php"><i class="fa fa-close"></i> Sair</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div><br><br>