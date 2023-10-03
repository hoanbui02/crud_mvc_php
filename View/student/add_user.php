<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm sinh viên</title>
</head>
<body>
    <div class="content">
        <div class="dangkysinhvien">
            <a href="index.php?controller=student&action=list" class="list">Danh sách</a>
            <h3>Thêm mới sinh viên</h3>
            <form action="" method="POST">
                <table>
                    <tr>
                        <td>Mã sinh viên: </td>
                        <td><input type="text" name="masv" placeholder="Mã sinh viên"></td>
                    </tr>
                    <tr>
                        <td>Họ tên: </td>
                        <td><input type="text" name="hoten" placeholder="Họ tên sinh viên"></td>
                    </tr>
                    <tr>
                        <td>Lớp: </td>
                        <td><input type="text" name="lop" placeholder="Lớp"></td>
                    </tr>
                    <tr>
                        <td>ID lớp học: </td>
                        <td><input type="text" name="ClassID" placeholder="ID lớp học"></td>
                    </tr>
                    <tr>
                        <td>ID môn học: </td>
                        <td><input type="text" name="CourseID" placeholder="ID môn học"></td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td><input type="submit" name="add_user" value="Thêm mới"></td>
                    </tr>
                </table>
            </form>

            <?php
                if (isset($thanhcong) && in_array('add_success', $thanhcong)) {
                    echo "<p style = 'color: green; text-align: center'>Thêm mới thành công</p>";
                }
            ?>

        </div>
    </div>
</body>
</html>