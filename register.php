<!doctype html>
<html lang="en">

  <?php include("./components/head.php"); ?>

  <body>

    <?php include("./components/nav.php"); ?>

    <div class="container-fluid mt-3">
      <h1>สมัครสมาชิก</h1>

      <form method="post" action="controls/insert-student.php">

        <div class="row">
          <div class="col-md-4">

            <label class="form-label">รหัสนักศึกษา <span style="color: red;">*</span></label>
            <input type="text" class="form-control" placeholder="กรุณากรอกรหัสนักศึกษา" name="s_id">

          </div>
          <div class="col-md-4">

            <label class="form-label">ชื่อ <span style="color: red;">*</span></label>
            <input type="text" class="form-control" placeholder="กรุณากรอกชื่อ" name="s_name">
          
          </div>
          <div class="col-md-4">

            <label class="form-label">นามสกุล <span style="color: red;">*</span></label>
            <input type="text" class="form-control" placeholder="กรุณากรอกนามสกุล" name="s_lastname">
          
          </div>
        </div>

        <div class="row mt-3">
          <div class="col-md-4">

            <label class="form-label">อีเมล <span style="color: red;">*</span></label>
            <input type="text" class="form-control" placeholder="กรุณากรอกอีเมล" name="s_email">

          </div>
          <div class="col-md-4">

            <label class="form-label">เบอร์โทร <span style="color: red;">*</span></label>
            <input type="text" class="form-control" placeholder="กรุณากรอกเบอร์โทร" name="s_tel">
          
          </div>
          <div class="col-md-4">

            <label class="form-label">Line ID <span style="color: red;">*</span></label>
            <input type="text" class="form-control" placeholder="กรุณากรอก Line ID" name="s_line">
          
          </div>
        </div>

        <div class="row mt-3">
          <div class="col-md-3">

            <label class="form-label">บ้านเลขที่ <span style="color: red;">*</span></label>
            <input type="text" class="form-control" placeholder="กรุณากรอกบ้านเลขที่" name="s_address">

          </div>
          <div class="col-md-3">

            <label class="form-label">หมู่ที่ <span style="color: red;">*</span></label>
            <input type="text" class="form-control" placeholder="กรุณากรอกหมู่ที่" name="s_moo">
          
          </div>
          <div class="col-md-3">

            <label class="form-label">ถนน <span style="color: red;">*</span></label>
            <input type="text" class="form-control" placeholder="กรุณากรอกถนน" name="s_road">
          
          </div>
          <div class="col-md-3">

            <label class="form-label">จังหวัด <span style="color: red;">*</span></label>
            <input type="text" class="form-control"  placeholder="กรุณากรอกจังหวัด" name="s_province">
          
          </div>
        </div>

        <div class="row mt-3">
          <div class="col-md-4">

            <label class="form-label">อำเภอ <span style="color: red;">*</span></label>
            <input type="text" class="form-control" placeholder="กรุณากรอกอำเภอ" name="s_amphoe">

          </div>
          <div class="col-md-4">

            <label class="form-label">ตำบล <span style="color: red;">*</span></label>
            <input type="text" class="form-control" placeholder="กรุณากรอกตำบล" name="s_tumbon">
          
          </div>
          <div class="col-md-4">

            <label class="form-label">รหัสไปรษณีย์ <span style="color: red;">*</span></label>
            <input type="text" class="form-control" placeholder="กรุณากรอกรหัสไปรษณีย์" name="s_post">
          
          </div>
        </div>

        <div class="row mt-3">
          <div class="col-md-4">

            <label class="form-label">วันเกิด <span style="color: red;">*</span></label>
            <select class="form-select" name="s_day">
              <option>กรุณาเลือกวันเกิด</option>
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
              <option>6</option>
              <option>7</option>
              <option>8</option>
              <option>9</option>
              <option>10</option>
              <option>11</option>
              <option>12</option>
              <option>13</option>
              <option>14</option>
              <option>15</option>
              <option>16</option>
              <option>17</option>
              <option>18</option>
              <option>19</option>
              <option>20</option>
              <option>21</option>
              <option>22</option>
              <option>23</option>
              <option>24</option>
              <option>25</option>
              <option>26</option>
              <option>27</option>
              <option>28</option>
              <option>29</option>
              <option>30</option>
              <option>31</option>
            </select>

          </div>
          <div class="col-md-4">

            <label class="form-label">เดือนเกิด <span style="color: red;">*</span></label>
            <select class="form-select" name="s_month">
              <option>กรุณาเลือกเดือนเกิด</option>
              <option>มกราคม</option>
              <option>กุมภาพันธ์</option>
              <option>มีนาคม</option>
              <option>เมษายน</option>
              <option>พฤษภาคม</option>
              <option>มิถุนายน</option>
              <option>กรกฎาคม</option>
              <option>สิงหาคม</option>
              <option>กันยายน</option>
              <option>ตุลาคม</option>
              <option>พฤศจิกายน</option>
              <option>ธันวาคม</option>
            </select>
          
          </div>
          <div class="col-md-4">

            <label class="form-label">ปีเกิด <span style="color: red;">*</span></label>
            <select class="form-select" name="s_year">
              <option>กรุณาเลือกปีเกิด</option>
              <?php for($i = 2500; $i < 2566; $i++) { ?>
                <option><?= $i ?></option>
              <?php } ?>
            </select>
          
          </div>
        </div>

        <div class="row mt-3">
          <div class="col-md-12">

              <button type="submit" class="btn btn-primary">สมัครสมาชิก</button>

          </div>
        </div>

      </form>

    </div>

    <?php include("./components/script.php"); ?>

  </body>
</html>