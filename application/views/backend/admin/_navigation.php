  <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="javascript:void(0);">
                <img src="<?php echo($icone_info) ?>" class="img-responsive img-thumbnail" style="width: 70px; height: 60px;">
                <div class="sidebar-brand-text mx-3">Admin <sup>I°</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="<?php echo(base_url()) ?>admin/dashbord">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Tableau de bord</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interfaces
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="javascript:void(0);" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Composants</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Applications:</h6>
                        <a class="collapse-item" href="<?php echo(base_url()) ?>admin/category">Catégorie</a>
                        <a class="collapse-item" href="<?php echo(base_url()) ?>admin/article">Média Article</a>

                        <a class="collapse-item" href="<?php echo(base_url()) ?>admin/publicite">Publicité</a>
                        
                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="javascript:void(0);" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Opérations</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Nos opérations:</h6>

                        <a class="collapse-item" href="<?php echo(base_url()) ?>admin/publicity_personnele">Publicité entreprise</a>

                        <a class="collapse-item" href="<?php echo(base_url()) ?>admin/commentaire">Commentaire dea articles</a>

                       
                        

                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Les statistiques
            </div>

            

            <!-- Nav Item - Charts -->
             <li class="nav-item">
                <a class="nav-link collapsed" href="javascript:void(0);" data-toggle="collapse" data-target="#collapseUtilities2"
                    aria-expanded="true" aria-controls="collapseUtilities2">
                    <i class="fas fa-fw fa-pie-chart"></i>
                    <span>Chartes graphiques</span>
                </a>
                <div id="collapseUtilities2" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Statistique sur:</h6>
                        <a class="collapse-item" href="<?php echo(base_url()) ?>admin/stat_pub">publication d'article</a>
                        <a class="collapse-item" href="<?php echo(base_url()) ?>admin/stat_users">Utilisateurs actifs</a>
                       
                    </div>
                </div>
            </li>

            <!-- Heading -->
            <div class="sidebar-heading">
                paramètrage de système
            </div>

            <!-- Nav Item - Charts -->
             <li class="nav-item">
                <a class="nav-link collapsed" href="javascript:void(0);" data-toggle="collapse" data-target="#collapseUtilities3"
                    aria-expanded="true" aria-controls="collapseUtilities3">
                    <i class="fas fa-fw fa-cogs"></i>
                    <span>Paramètre</span>
                </a>
                <div id="collapseUtilities3" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Nos paramètres:</h6>
                        <a class="collapse-item" href="<?php echo(base_url()) ?>admin/site">Configuration Site</a>
                        <a class="collapse-item" href="<?php echo(base_url()) ?>admin/role">Fonction et privilège</a>

                        <a class="collapse-item" href="<?php echo(base_url()) ?>admin/users">Liste des Utilisateurs</a>
                       
                        
                        <div class="dropdown-divider"></div>
                        <a class="collapse-item" href="<?php echo(base_url()) ?>admin/contact_info">Contact pour info</a>

                        <div class="dropdown-divider"></div>

                        <a class="collapse-item" href="<?php echo(base_url()) ?>admin/database">Sauvegarde des données</a>
                       
                    </div>
                </div>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" onclick="return confirm('êtes-vous sûre de vouloire se deconnecter?');" href="<?php echo(base_url())?>login/logout">
                    <i class="fas fa-fw fa-sign-out-alt"></i>
                    <span>Se Deconnecter</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->