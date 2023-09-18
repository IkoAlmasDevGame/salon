<?php 

class view {
    protected $db;

    public function __construct($db)
    {
        $this -> db = $db;
    }

    public function log(){
        $sql = "select * from m_user_data";
        $row = $this -> db -> prepare($sql);
        $row -> execute();
        $row = $row->fetchAll();
        return $row;
    }


    public function karyawan(){
        $sql = "select * from m_user_data where user_level='kasir'";
        $row = $this -> db -> prepare($sql);
        $row -> execute();
        $row = $row->fetchAll();
        return $row;
    }

    // Mulai Data Master
    public function kategori(){
        $sql = "select * from m_kategori";
        $row = $this->db->prepare($sql);
        $row->execute();
        $hasil = $row -> fetchAll();
        return $hasil;
    }

    public function treatment(){
        $sql = "SELECT m_treatment.*, m_kategori.id_kategori, m_kategori.nama_kategori from m_treatment join m_kategori on m_treatment.id_kategori=m_kategori.id_kategori order by id asc";
        $row = $this->db->prepare($sql);
        $row->execute();
        $hasil = $row -> fetchAll();
        return $hasil;
    }

    public function treatment_id(){
        $sql = 'SELECT * FROM m_treatment ORDER BY id DESC';
        $row = $this-> db -> prepare($sql);
        $row -> execute();
        $row = $row -> fetch();

        $urut = substr($row['id_treatment'], 2, 3);
        $tambah = (int) $urut + 1;
        if (strlen($tambah) == 1) {
            $format = 'TR00'.$tambah.'';
        } elseif (strlen($tambah) == 2) {
            $format = 'TR0'.$tambah.'';
        } else {
            $ex = explode('TR', $row['id_treatment']);
            $no = (int) $ex[1] + 1;
            $format = 'TR'.$no.'';
        }
        return $format;
    }

    public function hari_jual($hari){
        $ex = explode('-', $hari);
        $monthNum  = $ex[1];
        $monthName = date('F', mktime(0, 0, 0, $monthNum, 10));
        if ($ex[2] > 9) {
            $tgl = $ex[2];
        } else {
            $tgl1 = explode('0', $ex[2]);
            $tgl = $tgl1[1];
        }
        $cek = $tgl.' '.$monthName.' '.$ex[0];
        $param = "%{$cek}%";
        $sql = "SELECT m_nota.* , m_treatment.id_treatment, m_treatment.nama_treatment, m_treatment.harga_normal, m_treatment.harga_discont from m_nota left join m_treatment on m_treatment.id_treatment=m_nota.id_treatment WHERE m_nota.tanggal_input LIKE ? ORDER BY id_nota ASC";
        $row = $this-> db -> prepare($sql);
        $row -> execute(array($param));
        $row = $row->fetchAll();
        return $row;
    }

    public function periode_jual($periode){
        $sql = "SELECT m_nota.* , m_treatment.id_treatment, m_treatment.nama_treatment, m_treatment.harga_normal, m_treatment.harga_discont from m_nota left join m_treatment on m_treatment.id_treatment=m_nota.id_treatment WHERE m_nota.periode = ? ORDER BY id_nota ASC";
        $row = $this-> db -> prepare($sql);
        $row -> execute(array($periode));
        $row = $row -> fetchAll();
        return $row;
    }

    public function jual(){
        $sql = "SELECT m_nota.* , m_treatment.id_treatment, m_treatment.nama_treatment, m_treatment.harga_normal, m_treatment.harga_discont from m_nota 
                left join m_treatment on m_treatment.id_treatment=m_nota.id_treatment where m_nota.periode = ? ORDER BY id_nota DESC";
        $row = $this-> db -> prepare($sql);
        $row -> execute(array(date('m-Y')));
        $row = $row -> fetchAll();
        return $row;
    }

    public function penjualan(){
        $sql = "SELECT m_penjualan.* , m_treatment.id_treatment, m_treatment.nama_treatment from m_penjualan 
                left join m_treatment on m_treatment.id_treatment=m_penjualan.id_treatment ORDER BY id ASC";
        $row = $this-> db -> prepare($sql);
        $row -> execute();
        $hasil = $row->fetchAll();
        return $hasil;
    }

    // Akhir Data Master

    // Mulai Data Edit Master
    public function kategori_edit($id){
        $sql = "select * from m_kategori where id_kategori=?";
        $row = $this-> db -> prepare($sql);
        $row -> execute(array($id));
        $row = $row -> fetch();
        return $row;
    }

    public function treatment_edit($id){
        $sql = "select m_treatment.*, m_kategori.id_kategori, m_kategori.nama_kategori 
                from m_treatment inner join m_kategori on m_treatment.id_kategori = m_kategori.id_kategori 
                where id_treatment=?";
        $row = $this-> db -> prepare($sql);
        $row -> execute(array($id));
        $row = $row -> fetch();
        return $row;
    }
    // Akhir Data Edit Master

    // Mulai database jumlah master
    public function kategori_row(){
        $sql = "select * from m_kategori";
        $row = $this->db->prepare($sql);
        $row->execute();
        $hasil = $row -> rowCount();
        return $hasil;
    }

    public function treatment_row(){
        $sql = "select * from m_treatment";
        $row = $this->db->prepare($sql);
        $row->execute();
        $hasil = $row -> rowCount();
        return $hasil;
    }
    // Akhir database jumlah master

    public function jumlah(){
        $sql = "SELECT SUM(total) as bayar FROM m_penjualan";
        $row = $this -> db -> prepare($sql);
        $row -> execute();
        $hasil = $row -> fetch();
        return $hasil;
    }

    public function jumlah_nota(){
        $sql = "SELECT SUM(total) as tb FROM m_nota";
        $row = $this -> db -> prepare($sql);
        $row -> execute();
        $hasil = $row -> fetch();
        return $hasil;
    }
}

?>