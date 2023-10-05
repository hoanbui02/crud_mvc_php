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
            <a href="index.php?controller=class&action=list" class="list">Danh sách</a>
            <h3>Thêm mới lớp học</h3>
            <form action="" method="POST">
                <table>
                    <tr>
                        <td>Tên lớp học: </td>
                        <td><input type="text" name="ClassTitle" placeholder="Tên lớp học"></td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td><input type="submit" name="add_class" value="Thêm mới"></td>
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