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
    <h3>Danh sách sinh viên - Quản lý sinh viên</h3>
    <table border="1px">
        <thead>
            <tr>
                <th>STT</th>
                <th>Mã sinh viên</th>
                <th>Tên sinh viên</th>
                <th>Lớp</th>
                <th>ClassID</th>
                <th>CourseID</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>

            <?php
            $stt = 1;
                foreach ($data as $value) {
            ?>
            <tr>
                <td><?php echo $stt; ?></td>
                <td><?php echo $value['masv']; ?></td>
                <td><?php echo $value['hoten']; ?></td>
                <td><?php echo $value['lop']; ?></td>
                <td><?php echo $value['ClassID']; ?></td>
                <td><?php echo $value['CourseID']; ?></td>
                <td>
                    <a onclick="return confirm('Bạn có chắc chắn muốn sửa không?')" href="index.php?controller=student&action=edit&id=<?php
                     echo $value['id']; ?>">Edit</a>
                    <a onclick="return confirm('Bạn có chắc chắn muốn xoá không?')" href="index.php?controller=student&action=delete&id=<?php
                     echo $value['id']; ?>" title="Xoá">Delete</a>
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