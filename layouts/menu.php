        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
        <?php
        if(isset($_GET['page'])){
            $page = $_GET['page'];

            switch($page){
                case 'dashboard':
                    require_once 'dashboard.php';
                    break;
                case 'data':
                    require_once 'data.php';
                    break;
                case 'add_data':
                    require_once 'add_data.php';
                    break;
                default:
                    echo 'Halaman tidak ditemukan';
                    break;
            }
        }
        else{
            require_once 'dashboard.php';
        }
        ?>
        </main>
    </div>
</div>
