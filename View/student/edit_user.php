<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sửa sinh viên - Quản lý sinh viên</title>
</head>
<body>
    <div class="content">
        <div class="dangkysinhvien">
            <a href="index.php?controller=student&action=list" class="list">Danh sách</a>
            <h3>Cập nhật sinh viên</h3>
            <form action="" method="POST">
                <table>
                    <tr>
                        <td>Mã sinh viên: </td>
                        <td><input type="text" name="masv" value="<?php echo $dataID['masv']; ?>" placeholder="Mã sinh viên"></td>
                    </tr>
                    <tr>
                        <td>Họ tên: </td>
                        <td><input type="text" name="hoten" value="<?php echo $dataID['hoten']; ?>" placeholder="Họ tên sinh viên"></td>
                    </tr>
                    <tr>
                        <td>Lớp: </td>
                        <td><input type="text" name="lop" value="<?php echo $dataID['lop']; ?>" placeholder="Lớp"></td>
                    </tr>
                    <tr>
                        <td>ID lớp học: </td>
                        <td><input type="text" name="ClassID" value="<?php echo $dataID['ClassID']; ?>" placeholder="ID lớp học"></td>
                    </tr>
                    <tr>
                        <td>ID môn học: </td>
                        <td><input type="text" name="CourseID" value="<?php echo $dataID['CourseID']; ?>" placeholder="ID môn học"></td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td><input type="submit" name="update_user" value="Cập nhật"></td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</body>
</html>