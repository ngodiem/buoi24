<?php 
// hàm implode thêm 
$a0 = ["nguyen", "van", "A"];
$str = implode(".", $a0);
echo $str;
echo "<br>";

// explode cắt
$a1 = "nguyễn văn A";
$a2 = explode(" " , $a1);
var_dump($a2);

// hàm strlen đếm kí tự trong chuỗi
$a3 = "Nguyễn Van Nam"; // tính luôn khoản trắng tính luôn dấu
$a4 = strlen($a3);
echo $a4;
echo "<br>";

//str_word_count() đếm từ trong word
$a5 = "Nguyen Van Nam";
$a6 = str_word_count($a5); // đếm 
echo $a6;
echo "<br>";

// hàm str_replace() thay  thế
$a7 = "Nguyen Van Nam";
$a8 = str_replace("Nam", "nu", $a7);
echo $a8 ;
echo "<br>";

// hàm substr(string, start) lấy phần tử 
$a9 = "Nguyen Van Nam";
$a10 = substr($a9, 7, 3 );
echo $a10;
echo "<br>";

// hàm strstr(haystack, needle) tra về chuỗi cần tìm đến cuối chuỗi
$a11 = "Nguyen Van Nam";
$a12 = strstr($a11, "Van");
echo $a12;
echo "<br>";

// hàm strpos(haystack, needle) // tìm vị trí của chuỗi
$a13 = "Nguyen Van Nam";
$a14 = strpos($a13, "Van"); // vị tri số 7
echo $a14;
echo "<br>";

// hàm strtolower chuyển chữ hoa sang thường
$a15 = "Nguyen Van Nam";
$a16 = strtolower($a15); 
echo $a16;
echo "<br>";

// hàm strtoupper() thường thành hoa
$a17 = "nguyen van nam";
$a18 = strtoupper($a17);
echo $a18;
echo "<br>";

// hàm ucfirst upper character first
$a19 = "nguyen van nam"; 
$a20 = ucfirst($a19);
echo $a20;
echo "<br>";

// hà lcfirst(str) - lower character first viết thường kí tự đầu tiên
$a21= "NGUYEN VAN NAM"; 
$a22 = lcfirst($a21);
echo $a22;
echo "<br>";

// hàm ucword - upper character word : viết hoa kí tự đầu tiên từng từ
$a23 = "nguyen van nam";
$a24 =  ucwords($a23);
echo $a24;
echo "<br>";

// hàm trim xóa khoản trắng hai đầu chuỗi k xóa giữa chuỗi
$a25 = "      nguyễn văn nam         ";
$a26 = trim($a25);
echo $a26. ":".strlen($a25).":". strlen($a26);
echo "<br>";

// lhàm ltrim 
$a27 = "      nguyễn văn nam              ";
$a28 = ltrim($a27);
echo $a28.":". strlen($a28);
echo "<br>";

// lhàm rtrim 
$a29 = "      nguyễn văn nam              ";
$a30 = rtrim($a29);
echo $a30.":". strlen($a30);
echo "<br>";

// hàm isset(var) kiểm tra sự tồn tại
$a31 = "abv";
if(isset($a31)) {
	echo "biến a31 có tồn tại";
}
else {
	echo "biến a31 không tồn tại";
	}

echo "<br>";
$a32 = array(2, 4); // 0 1
if(isset($a32[2])) {
	echo "biến a32[2] có tồn tại";
}
else {
	echo "biến a32[2] không tồn tại";
}

// empty dịch là rổng // 0, "" $a32[2], null, false = >empty
echo "<br>";
$a32 = array(2, 4); // 0 1
if(empty($a32[2])) {
	echo "biến a32[2] empty";
}
else {
	echo "biến a32[2] không empty";
}

echo "<br>";
$a32 = 0;
if(empty($a32)) {
	echo "a32 có empty";
}
else {
	echo "a32 không empty";
}
echo "<br>";

// hàm is_array
$a34 = array();
if(is_array($a34)) {
	echo "a34 là array";
}
else {
	echo "a34 không là array";
}
echo "<br>";

if(is_numeric(5)) {
	echo "là số ";
	}
else {
	echo "không là số";
	}
echo "<br>";

// is_string(var)	
// is_array
// is_null(var) // biến đó k có vùng nhớ cho biến đó, chuỗi rỗng khác null
// is_numeric(var)
// is_bool(var)
// is_resource(var)
// is_object(var)

// 0 => false, khác 0 trả về true
if(7) {
	echo "haha";
}	
 ?>




