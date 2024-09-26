<?php

class Category{
    // Đi thi phải tạo model mới đủ hàm get với từng trường, chú ý sửa hàm tạo
    private $ma_tloai;
    private $ten_tloai;

    public function __construct($ma_tloai, $ten_tloai){
        $this->ma_tloai = $ma_tloai;
        $this->ten_tloai = $ten_tloai;
       
    }

    public function getMa_tloai(){
        return $this->ma_tloai;
    }

    public function getten_tloai(){
        return $this->ten_tloai;
    }
    public function setten_tloai($ten_tloai){
        $this->ten_tloai = $ten_tloai;
    }
}

?>