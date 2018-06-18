<?php
$db_user = 'root';
$db_pass = 'phanthong112' ;
$db_host = 'localhost';
$db_name = 'test';

$conn  =  mysqli_connect($db_host , $db_user , $db_pass ,$db_name ) or die("Can't Connect Database " . $db_name );

//Lấy kiễu dữ liệu muốn trả về
//Lấy kiểu định dạng muốn lấy của request
$formatList = array('json', 'xml');
if (isset($_GET['format'])) {
    $format = $_GET['format'];
} else {
    $format = 'json';
}
if (!in_array($format, $formatList)) {
    $format = 'json';
}

//Truy vấn đưa all sinh viên lên
$query = mysqli_query($conn, 'SELECT * FROM student');
//Tạo bảng lưu thông tin
$students = array();
while ($rs = mysqli_fetch_assoc($query)) {
    $students[] = $rs;
}

//Truy vấn tìm 1 sinh viên
$query_ID =  mysqli_query($conn , 'SELECT *  FROM  test.student  WHERE student.id ="1" ');

$students_ID =array();
while ($rs = mysqli_fetch_assoc($query_ID)) {
    $students_ID[] = $rs;
}


//Trả về kiểu json
if ($format == 'json') {
    header('Content-type: application/json; charset=utf-8');
    echo json_encode($students);
   // echo json_encode($students_ID);
}
mysqli_close($conn);

?>