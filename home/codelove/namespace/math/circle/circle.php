<?php
// require_once __DIR__ .("/../constant.php");
// class circle
// {
//     public function getAreaCircle($radius)
//     {
//         return constant::pi * $radius * $radius;
//     }
// }
?>
<?php
namespace math\circle;
use math\constant;
require_once __DIR__ . ("/../constant.php");
class circle
{
    public function getCircle($radius)
    {
        return constant::pi * $radius * $radius;
    }
}

// cách 1 \math\
// cách 2 use math\constant as constan1
// return constant1::pi * $radius * $radius;

