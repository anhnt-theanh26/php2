<?php

class TpBank extends BaseBank
{
    public function chuyenTien($soTien, $nguoiNhan)
    {
        if ($soTien < $this->soDu) {
            $this->soDu -= $soTien;
            $nguoiNhan->soDu += $soTien;
            echo "Bạn vừa chuyển tiền thành công: số tiền bạn chuyển là ". number_format($soTien, '0', ',', '.') . 'VNĐ <br>';
            echo "đến người nhận có số tài khoản là: $nguoiNhan->soTK<br>";
            echo "tài khoản bạn còn: ". number_format($this->soDu, '0', ',', '.') . '<br>';
        }else{
            echo "Số dư tài khoản không đủ!!<br>";
        }
    }
}
