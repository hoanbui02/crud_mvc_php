<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sửa lớp học - Quản lý lớp học</title>
</head>
<body>
    <div class="content">
        <div class="dangkysinhvien">
            <a href="index.php?controller=class&action=list" class="list">Danh sách</a>
            <h3>Cập nhật lớp học</h3>
            <form action="" method="POST">
                <table>
                    <tr>
                        <td>Tên lớp học: </td>
                        <td><input type="text" name="ClassTitle" value="<?php echo $dataID['ClassTitle']; ?>" placeholder="Tên lớp học"></td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td><input type="submit" name="update_class" value="Cập nhật"></td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</body>
</html>