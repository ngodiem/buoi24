<?php 
// xử lý file đọc từng kí tự
$filename = "files/demo.txt"; // đặt một biến $filename chỉ đến đường dẫn files
$fp = fopen($filename, "r"); // mở file lên ở chế độ đọc read(chưa đọc dòng nào)
// feof: file end of file đọc hết file

// đọc file
while (!feof($fp)) { //
	$c = fgetc($fp); // file get character fgetc(đọc từng kí tự rồi gán vào biến c)
	if($c == "\n") // kí tự xuống dòng
	{
		$c = "<br>"; // nếu là kí tự xuống dòng thi đổi thành br để nó xuống dòng
	}
echo $c;
}
// echo $fp;
fclose($fp);
echo "<br>";
echo "<br>";


$filename = "files/demo.txt";
$fp = fopen($filename, "r");
// fgets(handle) đọc từng dòng đối với dữ liệu 5 -> 700M  sài cho file có dung lượng lớn

while (!feof($fp)) {
	$line = fgets($fp);
	$line = str_replace("\n", "<br>", $line);
	echo $line;
}
fclose($fp);
echo "<br>";
echo "<br>";

// file_get_contents mở file đọc hết sau đó đóng lại dùng khi dữ liệu 200M trở xuống sài cho file có dung lượng nhỏ
echo "đọc theo kiểu file_get_contents() <br> ";
$contents = file_get_contents($filename);
$contents = str_replace("\n", "<br>", $contents);
echo $contents;
echo "<br>";
echo "<br>";



// r: read
// a: append ghi thêm
// w : write ghi đè
$filename = "files/demo1.txt";
$fp       = fopen($filename, "a");


// fwrite($fp , "\n");
// fwrite($fp , "\nNguyen Thi D");
fwrite($fp, "\nNguyen Thi D");
fclose($fp);

$acontent = "\nxyz ..... abc";
file_put_contents($filename, $acontent, FILE_APPEND); // bao gồm các thao tác mở file đóng file thường dùng 

// xóa file
$removed_file = "files/demo2.txt";
if(file_exists($removed_file)) // file_exists(filename) kiểm tra file có tồn tại hay không 
{
	unlink($removed_file); // là hàm xóa

	
}


 ?>