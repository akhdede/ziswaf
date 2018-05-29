<?php
class fungsi{
    private $db;

    function __construct($con){
        $this->db = $con;
        $this->base_url = 'https://localhost/ziswaf';
    }

    public function countPJ(){
    }

    // tambah data
    public function tambah($nama_lengkap, $banyak_amplop, $nomor_amplop)
    {
        try{
            $data = $this->db->prepare("INSERT INTO pj_ziswaf(nama_lengkap, banyak_amplop, nomor_amplop) VALUES(:nama_lengkap, :banyak_amplop, :nomor_amplop)");
            $data->bindparam(":nama_lengkap", $nama_lengkap);
            $data->bindparam(":banyak_amplop", $banyak_amplop);
            $data->bindparam(":nomor_amplop", $nomor_amplop);
            $data->execute();
            return true;
        }
        catch(PDOException $e){
            echo $e->getMessage();
            return false;
        }
    }


    // menampilkan breadcrum disetiap halaman
    public function breadcrumb(){
        if(isset($_GET['page'])){
            $page = $_GET['page'];

            switch($page){
                case 'dashboard':
                    echo'
                    <nav aria-label="breadcrumb">
                      <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="'.$this->base_url.'">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                      </ol>
                    </nav>';
                    break;
                case 'data':
                    echo'
                    <nav aria-label="breadcrumb">
                      <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="'.$this->base_url.'">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Data</li>
                      </ol>
                    </nav>';
                    break;
                case 'add_data':
                    echo'
                    <nav aria-label="breadcrumb">
                      <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="'.$this->base_url.'">Home</a></li>
                        <li class="breadcrumb-item"><a href="'.$this->base_url.'/index.php?page=data">Data</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Tambah Data</li>
                      </ol>
                    </nav>';
                    break;
            }
        }
        else{
            echo'
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">Home</li>
              </ol>
            </nav>';
        }
    }
    
}
?>
