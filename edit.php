<!doctype html>
<html lang="en">

<?php include("./components/head.php"); ?>

<body>

    <?php include("./components/nav.php"); ?>

    <?php include("connection/connect.php"); ?>
    <?php $id = $_GET["id"]; ?>
    <?php $sql = "select * from student where id = '$id'"; ?>
    <?php $result = $connect->query($sql); ?>

    <?php if ($result->num_rows > 0) { ?>
        <?php while ($row = $result->fetch_assoc()) { ?>
            <div class="container-fluid mt-3">
                <h1>แก้ไขข้อมูล</h1>
                <form method="post" action="controls/edit-student.php">
                    <input type="hidden" name="id" value="<?= $row["id"] ?>">
                    <div class="row">
                        <div class="col-md-4">

                            <label class="form-label">รหัสนักศึกษา <span style="color: red;">*</span></label>
                            <input type="text" class="form-control" placeholder="กรุณากรอกรหัสนักศึกษา" name="s_id"
                                value="<?= $row["s_id"] ?>" required>

                        </div>
                        <div class="col-md-4">

                            <label class="form-label">ชื่อ <span style="color: red;">*</span></label>
                            <input type="text" class="form-control" placeholder="กรุณากรอกชื่อ" name="s_name"
                                value="<?= $row["s_name"] ?>" required>

                        </div>
                        <div class="col-md-4">

                            <label class="form-label">นามสกุล <span style="color: red;">*</span></label>
                            <input type="text" class="form-control" placeholder="กรุณากรอกนามสกุล" name="s_lastname"
                                value="<?= $row["s_lastname"] ?>" required>

                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-md-4">

                            <label class="form-label">อีเมล <span style="color: red;">*</span></label>
                            <input type="text" class="form-control" placeholder="กรุณากรอกอีเมล" name="s_email"
                                value="<?= $row["s_email"] ?>" required>

                        </div>
                        <div class="col-md-4">

                            <label class="form-label">เบอร์โทร <span style="color: red;">*</span></label>
                            <input type="text" class="form-control" placeholder="กรุณากรอกเบอร์โทร" name="s_tel"
                                value="<?= $row["s_tel"] ?>" required>

                        </div>
                        <div class="col-md-4">

                            <label class="form-label">Line ID <span style="color: red;">*</span></label>
                            <input type="text" class="form-control" placeholder="กรุณากรอกLine ID" name="s_line"
                                value="<?= $row["s_line"] ?>" required>

                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-3">

                            <label class="form-label">บ้านเลขที่ <span style="color: red;">*</span></label>
                            <input type="text" class="form-control" placeholder="กรุณากรอกบ้านเลขที่" name="s_addess"
                                value="<?= $row["s_addess"] ?>" required>

                        </div>
                        <div class="col-md-3">

                            <label class="form-label">หมู่ที่ <span style="color: red;">*</span></label>
                            <input type="text" class="form-control" placeholder="กรุณากรอกหมู่ที่" name="s_moo"
                                value="<?= $row["s_moo"] ?>" required>

                        </div>
                        <div class="col-md-3">

                            <label class="form-label">ถนน <span style="color: red;">*</span></label>
                            <input type="text" class="form-control" placeholder="กรุณากรอกถนน" name="s_road"
                                value="<?= $row["s_road"] ?>" required>

                        </div>
                        <div class="col-md-3">

                            <label class="form-label">จังหวัด <span style="color: red;">*</span></label>
                            <input type="text" class="form-control" placeholder="กรุณากรอกจังหวัด" name="s_province"
                                value="<?= $row["s_province"] ?>" required>

                        </div>

                    </div>
                    <div class="row mt-3">
                        <div class="col-md-4">

                            <label class="form-label">อำเภอ <span style="color: red;">*</span></label>
                            <input type="text" class="form-control" placeholder="กรุณากรอกอำเภอ" name="s_amper"
                                value="<?= $row["s_amper"] ?>" required>

                        </div>
                        <div class="col-md-4">

                            <label class="form-label">ตำบล <span style="color: red;">*</span></label>
                            <input type="text" class="form-control" placeholder="กรุณากรอกตำบล" name="s_tumbon"
                                value="<?= $row["s_tumbon"] ?>" required>

                        </div>
                        <div class="col-md-4">

                            <label class="form-label">รหัสไปรสณีย์ <span style="color: red;">*</span></label>
                            <input type="text" class="form-control" placeholder="กรุณากรอกรหัสไปรสณีย์" name="s_post"
                                value="<?= $row["s_post"] ?>" required>

                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-3">

                            <label class="form-label">วันเกิด <span style="color: red;">*</span></label>
                            <select class="form-select" name="s_day" required>
                                <option value="<?= $row["s_day"] ?>"><?= $row["s_day"] ?></option>
                                <?php for ($i = 1; $i <= 31; $i++) { ?>
                                    <option value="<?= $i ?>"><?= $i ?></option>
                                <?php } ?>

                            </select>
                        </div>
                        <div class="col-md-4">

                            <label class="form-label">เดือนเกิด <span style="color: red;">*</span></label>
                            <select class="form-select" name="s_month" required>
                                <option value="<?= $row["s_month"] ?>"><?= $row["s_month"] ?></option>
                                <option value="มกราคม">มกราคม</option>
                                <option value="กุมภาพันธ์">กุมภาพันธ์</option>
                                <option value="มีนาคม">มีนาคม</option>
                                <option value="เมษายน">เมษายน</option>
                                <option value="พฤษภาคม">พฤษภาคม</option>
                                <option value="มิถุนายน">มิถุนายน</option>
                                <option value="กรกฎาคม">กรกฎาคม</option>
                                <option value="สิงหาคม">สิงหาคม</option>
                                <option value="กันยายน">กันยายน</option>
                                <option value="ตุลาคม">ตุลาคม</option>
                                <option value="พฤศจิกายน">พฤศจิกายน</option>
                                <option value="พฤศจิกายน">พฤศจิกายน</option>
                                <option value="ธันวาคม">ธันวาคม</option>
                            </select>


                        </div>
                        <div class="col-md-3">

                            <label class="form-label">ปีเกิด <span style="color: red;">*</span></label>
                            <select class="form-select" name="s_year" required>
                                <option value="<?= $row["s_year"] ?>"><?= $row["s_year"] ?></option>
                                <?php for ($i = 2500; $i < 2566; $i++) { ?>
                                    <option value="<?= $i ?>"><?= $i ?></option>
                                <?php } ?>
                            </select>

                        </div>

                        <div class="row mt-3">
                            <div class="col-md-12">

                                <button type="submit" class="btn btn-warning">แก้ไขข้อมูล</button>




                            </div>
                        </div>
                </form>
            <?php } ?>
        <?php } ?>
        <?php include("./components/script.php"); ?>

</body>

</html>