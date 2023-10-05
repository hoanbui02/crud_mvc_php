<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm môn học</title>
</head>
<body>
    <div class="content">
        <div class="dangkysinhvien">
            <a href="index.php?controller=course&action=list" class="list">Danh sách</a>
            <h3>Thêm mới môn học</h3>
            <form action="" method="POST">
                <table>
                    <tr>
                        <td>Tên môn học: </td>
                        <td><input type="text" name="CourseTitle" placeholder="Tên môn học"></td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td><input type="submit" name="add_course" value="Thêm mới"></td>
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