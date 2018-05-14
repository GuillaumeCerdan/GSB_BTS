<?php
    header("HTTP/1.1 301 Moved Permanently");
    header("Location: /");
?>







/*      CSS MENU    */

.navbar-fixed-top {
    height: 70px;
}

.icon-width {
    width: 21px !important;
    height: 17px !important;
    font-size: 25px !important;
    z-index: 2;
    position: relative;
}


li:hover .icon-b::before {
    content: '';
    position: absolute;
    border-radius: 50% !important;
    background: #42afda !important;
    z-index: -1;
    left: 26%;
    top: 15%;
    width: 40px;
    height: 40px;
}
li:hover i {
    color: white;
}

.nav > li:hover  {
    border-bottom: 2px solid #42afda !important;
}

@media (min-width: 768px) {
    .navbar-nav>li>a {
        padding-top: 14px !important;
        padding-bottom: 11px !important;
    }
}

a.ofi {
    width: 103px !important;
    height: 41px !important;
}

.active {
    content: '';
    position: absolute;
    border-radius: 50% !important;
    background: #42afda !important;
    z-index: -1;
    left: 26%;
    top: 15%;
    width: 40px;
    height: 40px;
}










<body class="ofi-body">
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header ">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="ofi margin" href="Activite.html">OFI</a>
            </div>
        
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <!-- right -->
            <ul class="nav navbar-nav navbar-right resp-nav">
                <li>
                    <a id="navBarActivite" class="icon-b" href="../Conseiller/Activite.html" class="text-center">
                        <span class="hidden-xs"><i class="flat flaticon-home icon-width"></i></span>
                        <h4 class="hidden-sm hidden-md hidden-lg text-left">Suivi d'activité</h4>
                        <div class="ofi-lib-menu hidden-xs">Suivi d'activité</div>
                    </a>
                </li>
                <li>
                    <a id="navBarReglementaire" class="icon-b" href="../Conseiller/Reglementaire.html" class="text-center">
                        <span class="hidden-xs"><i class="flat flaticon-shield icon-width"></i></span>
                        <h4 class="hidden-sm hidden-md hidden-lg text-left">Suivi réglementaire</h4>
                        <div class="ofi-lib-menu hidden-xs">Suivi réglementaire</div>
                    </a>
                </li>
                <li>
                    <a id="navBarProspect" class="icon-b" href="../Prospect/List.html">
                        <span class="hidden-xs"><i class="flat flaticon-profile icon-width active"></i></span>
                        <h4 class="hidden-sm hidden-md hidden-lg"> Prospects </h4>
                        <div class="ofi-lib-menu hidden-xs">Prospects</div>
                    </a>
                </li>
                <li>
                    <a id="navBarClient" class="icon-b" href="../Client/List.html">
                        <span class="hidden-xs"><i class="flat flaticon-social icon-width"></i></span>
                        <h4 class="hidden-sm hidden-md hidden-lg"> Clients </h4>
                        <div class="ofi-lib-menu hidden-xs">Clients</div>
                    </a>
                </li>
                <li>
                    <a class="icon-b" href="../Messages/Index.html">
                        <span class="hidden-xs"><i class="flat flaticon-chat icon-width"></i></span>
                        <h4 class="hidden-sm hidden-md hidden-lg"> Messages</h4>
                        <div class="ofi-lib-menu hidden-xs">Messages</div>
                    </a>
                </li>
                <li>
                    <a class="icon-b" href="#">
                        <span class="hidden-xs"><i class="flat flaticon-settings icon-width"></i></span>
                        <h4 class="hidden-sm hidden-md hidden-lg"> Simulation</h4>
                        <div class="ofi-lib-menu hidden-xs">Simulation</div>
                    </a>
                </li>
                <li>
                    <a class="icon-b" href="../Bibliotheque/Index.html">
                       <span class="hidden-xs"><i class="flat flaticon-interface icon-width"></i></span>
                        <h4 class="hidden-sm hidden-md hidden-lg"> Bibliothèque </h4>
                        <div class="ofi-lib-menu hidden-xs">Bibliothèque</div>
                    </a>
                </li>
                <li>
                    <a class="icon-b" href="javascript:document.getElementById('NewlogoutForm').submit()">
                        <form action="http://preprod.ofi.upsideo.fr/Account/LogOff" id="NewlogoutForm" method="post"></form>
                        <span class="hidden-xs"><i class="flat flaticon-lock icon-width"></i></span>
                        <h4 class="hidden-sm hidden-md hidden-lg">Logout</h4>
                        <div class="ofi-lib-menu hidden-xs">Logout</div>
                    </a>
                </li>
            </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>


