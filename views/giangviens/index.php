<?php
require_once 'views/commons/message.php';
require "header.php";
?>


<div class="container">
    <h1 style="display: flex;margin-bottom:30px;">Danh sách giảng viên trường ĐH Thủy Lợi</h1>
<table border="1" cellspacing="0" cellpadding="8">
    <tr>
        <th scope="col">Mã giảng viên</th>
        <th scope="col">Họ và tên</th>
        <th scope="col">Ngày sinh</th>
        <th scope="col">Giới tính</th>
        <th scope="col">Trình độ</th>
        <th scope="col">Chuyên môn</th>
        <th scope="col">Học hàm</th>
        <th scope="col">Học vị</th>
        <th scope="col">Cơ quan</th>
        <th scope="col">Manager</th>
        
        
    </tr>
    <?php if (!empty($giangviens)): ?>
        <?php foreach ($giangviens AS $giangvien) : ?>
            <tr>
                <td ><?php echo $giangvien['magv'] ?></td>
                <td><?php echo $giangvien['hovaten'] ?></td>
                <td><?php echo $giangvien['ngaysinh'] ?></td>
                <td><?php echo $giangvien['gioitinh'] ?></td>
                <td><?php echo $giangvien['trinhdo'] ?></td>
                <td><?php echo $giangvien['chuyenmon'] ?></td>
                <td><?php echo $giangvien['hocham'] ?></td>
                <td><?php echo $giangvien['hocvi'] ?></td>
                <td><?php echo $giangvien['coquan'] ?></td>
                <td>
                    <?php
                    $urlDetail =
                        "index.php?controller=giangvien&action=detail&magv=" . $giangvien['magv'];
                    $urlEdit =
                        "index.php?controller=giangvien&action=edit&magv=" . $giangvien['magv'];
                    $urlDelete =
                        "index.php?controller=giangvien&action=delete&magv=" . $giangvien['magv'];
                    ?>
                    <a href="<?php echo $urlDetail?>">Chi tiết</a> &nbsp;
                    <a href="<?php echo $urlEdit?>">Edit</a> &nbsp;
                    <a onclick="return confirm('Bạn chắc chắn muốn xóa?')"
                       href="<?php echo $urlDelete?>">
                        Xóa
                    </a>
                </td>
            </tr>
        <?php endforeach; ?>
    <?php else: ?>
        <tr>
            <td colspan="2">KHông có dữ liệu</td>
        </tr>
    <?php endif; ?>
</table>
</div>
<div style="margin-top:20px" class="container">
<a href="index.php?controller=giangvien&action=add">
    <button type="button" class="btn btn-primary">Thêm GV </button>
</a>
</div>


<?php 
    require "footer.php";
?>