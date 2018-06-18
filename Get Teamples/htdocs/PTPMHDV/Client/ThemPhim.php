<h2>Thêm Phim Mới</h2>
<style>
    input{
        width: 600px;
        height: 50px;
    }
</style>
<form method="POST" action="http://x2bdev.com/api/article">

    Tên Phim:
    <p><input type="text" name="name" id="name" required ></p>
    Thể Loại:
    <p><input type="text" name="type" id="type" required></p>
    Thời Gian:
    <p><input type="text" name="running_time" id="running_time" required></p>
    Ngày Khởi Chiếu:
    <p><input type="date" name="release_date" data-date-format="YYYY MM DD" id="release_date" value="2018-10-10"
              required></p>
    Hình Ảnh:
    <p><input type="text" name="image" id="image" required></p>
    Youtube:
    <p><input type="text" name="youtube" id="youtube" required></p>
    Tác giả:
    <p><input type="text" name="director" id="director" required></p>
    Diễn viên:
    <p><input type="text" name="cast" id="cast" required></p>
    Nội Dung:
    <p><input type="text" name="content" id="content" required></p>
    <input type="submit" value="Tạo Phim">
    <input type="reset" value="Đặt Lại">

</form>
<form method="post" action="QuanLy.php">
   <input type="submit" value="Quay lại" name="quayLai">
</form>

