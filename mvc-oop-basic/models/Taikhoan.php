 <?php 
 require_once '../Connect/connect.php';
  class Taikhoan extends connect {
    public function listTaiKhoanAdmin() {
      $sql = 'SELECT * FROM tai_khoans';
      $stmt = $this->connect()->prepare($sql);
      $stmt -> execute();
      return $stmt->fetchAll();
    }
    public function addAddmin($ho_ten, $anh_dai_dien, $ngay_sinh , $email , $so_dien_thoai, $gioi_tinh , $dia_chi, $mat_khau, $chuc_vu_id, $trang_thai){
      $sql = "INSERT INTO tai_khoans(ho_ten, anh_dai_dien, ngay_sinh , email , so_dien_thoai, gioi_tinh , dia_chi, mat_khau, chuc_vu_id, trang_thai) values(? ,?,?, ?, ?, ?, ? ,? ,?,?)";
    $stmt = $this->connect()->prepare($sql);
    return $stmt -> execute([$ho_ten, $anh_dai_dien, $ngay_sinh , $email , $so_dien_thoai, $gioi_tinh , $dia_chi, $mat_khau, $chuc_vu_id, $trang_thai]);
    
 }
  }
 ?>