<style>
    .main-sidebar {
      background-color: #b31b1b;
    }
    .layout-navbar-fixed .wrapper .sidebar-dark-primary .brand-link:not([class*=navbar]) {
      background-color: #b31b1b;
    }
    .sidebar-dark-primary .nav-sidebar>.nav-item>.nav-link.active, .sidebar-light-primary .nav-sidebar>.nav-item>.nav-link.active {
      background-color: #000;
      color: #fff;
    }

    .sidebar {
      padding: 45px 8px;
    }
  </style>
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <div class="dropdown">
        <a href="./" class="brand-link">
            <h3 class="text-center p-0 m-0"><b style="color: yellow;">SCC-EVALUATION</b></h3>
            <h3 class="text-center p-0 m-0"><b style="color: yellow;">SYSTEM</b></h3>
        </a>
    </div>
    <div class="sidebar">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column nav-flat" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item dropdown">
                    <a href="./" class="nav-link nav-home">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a href="./index.php?page=evaluate" class="nav-link nav-evaluate">
                        <i class="nav-icon fas fa-check-circle"></i>
                        <p>Evaluate</p>
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a href="./index.php?page=result" class="nav-link nav-result">
                        <i class="nav-icon fas fa-th-list"></i>
                        <p>Evaluation Result</p>
                    </a>
                </li>
                <!-- New Evaluate link -->
           
            </ul>
        </nav>
    </div>
</aside>

<script>
    $(document).ready(function(){
        var page = '<?php echo isset($_GET['page']) ? $_GET['page'] : 'home' ?>';
        var s = '<?php echo isset($_GET['s']) ? $_GET['s'] : '' ?>';
        if(s != '')
            page = page + '_' + s;
        if($('.nav-link.nav-' + page).length > 0){
            $('.nav-link.nav-' + page).addClass('active');
            if($('.nav-link.nav-' + page).hasClass('tree-item') == true){
                $('.nav-link.nav-' + page).closest('.nav-treeview').siblings('a').addClass('active');
                $('.nav-link.nav-' + page).closest('.nav-treeview').parent().addClass('menu-open');
            }
            if($('.nav-link.nav-' + page).hasClass('nav-is-tree') == true){
                $('.nav-link.nav-' + page).parent().addClass('menu-open');
            }
        }
    });
</script>
