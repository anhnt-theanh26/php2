<?php
namespace phpdemo\src\model\sdudentModel;
// dùng để viết câu lệnh truy vấn
class StudentModel // tên của class trùng với tên file
{
    // properties : thuộc tính, biến;
    public $name; //public có thể được gọi hoặc truy cập từ bên ngoài
    public $age;
    public $numberPhone;
    private $address; // private truy cập nội bộ
    protected $email; // cho phép truy cập ở lớp con, bên ngoài nhưng giới hạn trong thư mục
    // các từ khóa public , private thể hiện mức độ truy cập được phép từ các lớp con, 
    //các class khác


    // construct: hàm khởi tạo
    // cấp phát hoặc truyền dữ liệu cho class
    public function __construct($name, $age = 10, $numberPhone, $address)
    {
        $this->name = $name;
        $this->age = $age;
        $this->numberPhone = $numberPhone;
        $this->address = $address;
    }

    public function __destruct()
    {  // hủy bỏ 
        echo 'Detruct';
        // hàm được gọi khi không còn sử dụng đối tượng này nữa
        // gọi câu lệnh là : unset;
        // GC - auto 
    }

    public function __construct2($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    //method phương thức hàm
    // file model dùng để viết câu lệnh truy vấn vào sql
    function find_id($name)
    {
        // từ khóa this giúp gọi các thuộc tính - biến của class 
        $name = $this->name . '---';
        return $name;
    }

    function displayInfo()
    {
        echo $this->name;
        echo $this->age;
    }
}


?>