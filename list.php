<!doctype html>
<html lang="en">

<?php include("./components/head.php"); ?>

<body>

    <?php include("./components/nav.php"); ?>

    <div class="container-fluid mt-3">
        <h1>รายชื่อนักศึกษา</h1>
        <table class="table table-striped">

            <thead>
                <tr>
                    <th>ลำดับ</th>
                    <th>รหัสนักศึกษา</th>
                    <th>ชื่อ-นามสกุล</th>
                    <th>ที่อยู่</th>
                    <th>อีเมล</th>
                    <th>เบอร์โทร</th>
                    <th>วันเกิด</th>
                </tr>
            </thead>
            <tbody>
                <?php include("connection/connect.php");
                $sql = "select * from students";
                $result = $connect->query($sql);
                ?>
                <?php if ($result->num_rows > 0) { ?>
                    <?php while ($row = $result->fetch_assoc()) { ?>
                        <tr>
                            <td>
                                <?= $row["id"] ?>
                            </td>
                            <td>
                                <?= $row["s_id"] ?>
                            </td>
                            <td>
                                <?= $row["s_name"] . " " . $row["s_lastname"] ?>
                            </td>
                            <td>
                                <?= $row["s_province"] ?>
                            </td>
                            <td>
                                <?= $row["s_email"] ?>
                            </td>
                            <td>
                                <?= $row["s_tel"] ?>
                            </td>
                            <td>
                                <?= $row["s_day"] ?>
                                <?= $row["s_month"] ?>
                                <?= $row["s_year"] ?>
                            </td>
                            <td><span class="p-3"><a href="edit.php?id=<?= $row["id"] ?>" class="btn btn-warning">แก้ไข</a>
                                </span> <a href="controls/delete-student.php?id=<?= $row["id"] ?>" class="btn btn-danger"
                                    onclick="return confirm('Are you sure?');">ลบ </td>
                        </tr>
                    <?php } ?>
                <?php } ?>

            </tbody>

        </table>
    </div>

    <?php include("./components/script.php"); ?>

</body>

</html>