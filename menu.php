<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Brand -->
   <a href="index.php" 
   class="sidebar-brand" 
   style="padding:0 !important; height:auto !important; min-height:unset !important;">

    <img src="img/bisikomashLogo1.PNG" 
         alt="Bisikomash Logo"
         style="width:100%; height:90px; object-fit:contain; display:block;">

</a>

    <hr class="sidebar-divider my-0">

    <!-- Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="index.php">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </a>
    </li>

    <hr class="sidebar-divider">

    <!-- ================= VENTES ================= -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseVentes">
            <i class="fas fa-shopping-cart"></i>
            <span>Ventes</span>
        </a>
        <div id="collapseVentes" class="collapse" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="commandes/nouvelle_commande.php">Nouvelle commande</a>
                <a class="collapse-item" href="commandes/index.php">Liste des commandes</a>
                <a class="collapse-item" href="paiements/index.php">Paiements</a>
                <a class="collapse-item" href="tables.php">Clients</a>
            </div>
        </div>
    </li>

    <!-- ================= ACHATS ================= -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseAchats">
            <i class="fas fa-truck-loading"></i>
            <span>Achats</span>
        </a>
        <div id="collapseAchats" class="collapse" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="approvisionnements/nouveau.php">Nouvel approvisionnement</a>
                <a class="collapse-item" href="approvisionnements/index.php">Liste approvisionnements</a>
                <a class="collapse-item" href="fixationprix/index.php">Fixation des prix</a>
                <a class="collapse-item" href="fournisseurs/index.php">Fournisseurs</a>
            </div>
        </div>
    </li>

    <!-- ================= STOCK ================= -->
    <!-- STOCK -->
    <div class="sidebar-heading">Stock</div>

    <li class="nav-item">
        <a class="nav-link" href="produits/index.php">
            <i class="fas fa-boxes"></i>
            <span>Produits</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="stock/etat_stock.php">
            <i class="fas fa-warehouse"></i>
            <span>État du stock</span>
        </a>
    </li>

    <hr class="sidebar-divider">
    <!-- ================= RAPPORTS ================= -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseRapports">
            <i class="fas fa-chart-line"></i>
            <span>Rapports</span>
        </a>
        <div id="collapseRapports" class="collapse" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="rapports/ventes.php">Rapport ventes</a>
                <a class="collapse-item" href="rapports/achats.php">Rapport achats</a>
                <a class="collapse-item" href="rapports/benefices.php">Rapport bénéfices</a>
            </div>
        </div>
    </li>

    <!-- ================= ADMINISTRATION ================= -->
    <!-- ADMINISTRATION -->
    <div class="sidebar-heading">Administration</div>

    <li class="nav-item">
        <a class="nav-link" href="utilisateurs/index.php">
            <i class="fas fa-user-shield"></i>
            <span>Utilisateurs</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="succursales/index.php">
            <i class="fas fa-building"></i>
            <span>Succursales</span>
        </a>
    </li>

    <hr class="sidebar-divider d-none d-md-block">

    <!-- Toggle -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>


   
</ul>
<!-- End of Sidebar -->