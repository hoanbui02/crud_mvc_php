<div class="timkiem">
    <form action="" method="GET">
        <table>
            <tr>
                <input type="hidden" name="controller" value="student">
                <td><input type="text" name="tukhoa" placeholder="Nhập từ khoá"></td>
                <td><input type="submit" value="Tìm kiếm"></td>
            </tr>
        </table>
        <input type="hidden" name="action" value="search" >
    </form>
</div>
<div class="danhsach">
    <h3>Danh sách lớp học - Quản lý lớp học</h3>
    <table border="1px">
        <thead>
            <tr>
                <th>ID lớp học</th>
                <th>Tên lớp học</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>

            <?php
            $stt = 1;
                foreach ($data_Search as $value) {
            ?>
            <tr>
                <td><?php echo $stt; ?></td>
                <td><?php echo $value['ClassTitle']; ?></td>
                <td>
                    <a onclick="return confirm('Bạn có chắc chắn muốn sửa không?')" href="index.php?controller=class&action=edit&id=<?php echo $value['ClassID']; ?>">Edit</a>
                    <a onclick="return confirm('Bạn có chắc chắn muốn xoá không?')" href="index.php?controller=class&action=delete&id=<?php echo $value['ClassID']; ?>" title="Xoá">Delete</a>
                </td>
            </tr>
            <?php
                $stt++;
                }
            ?>

            <tr>
                <td></td>
            </tr>
        </tbody>
    </table>
</div>