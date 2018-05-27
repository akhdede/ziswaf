    <div class="container-fluid">
        <div class="row">
            <nav class="col-md-2 d-none d-md-block bg-light sidebar">
                <div class="sidebar-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                        <a class="nav-link <?php if($_GET['page'] == 'dashboard') echo 'active'; ?>" href="index.php?page=dashboard">
                                <span data-feather="home"></span>
                                Dashboard
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php if($_GET['page'] == 'data' or $_GET['page'] == 'add_data') echo 'active';?>" href="index.php?page=data">
                                <span data-feather="layers"></span>
                                Data
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
