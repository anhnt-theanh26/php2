<?php

class BaseBank
{
    public $hoTen;
    public $soTK;
    protected $soDu;
    public function __construct($hoTen, $soTK, $soDu)
    {
        $this->hoTen = $hoTen;
        $this->soDu = $soDu;
        $this->soTK = $soTK;
    }
    public function setSoDu($soTien)
    {
        $this->soDu = $soTien;
    }
    public function getSoDu()
    {
        return $this->soDu;
    }
    function thongTinTK()
    {
        echo "Họ tên: $this->hoTen <br>";
        echo "Số dư:" . number_format($this->soDu, '0', ',', '.') . '<br>';
        echo "Số tài khoản: $this->soTK <br>";
    }
}
