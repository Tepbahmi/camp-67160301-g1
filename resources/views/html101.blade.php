<!-- file : resources/views/html101.blade.php -->
<!Doctype html>
<html>
<head>
    <title>HTML FORM</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sarabun&display=swap" rel="stylesheet">

    <style>
        body{
            font-family: "Sarabun", sans-serif;
        }
        .form-control,

    </style>
</head>

 <body>
         <div class= "container mt-4">
             <h1>Workshop #HTML - FORM</h1>
             <form>
        <div class="row mt-3">
            <div class="col-sm-12 col-md-2">
                <label for="fname">ชื่อ</lable>
            </div>
            <div class="col">
                <input id="fname" class="from-control">
                </div>
            </div>

        <div class="row mt-3">
            <div class="col-sm-12 col-md-2">
                <label for="lname">สกุล</lable>
            </div>
            <div class="col">
                <input id="lname" class="from-control">
                </div>
            </div>

        <div class="row mt-3">
            <div class="col-sm-12 col-md-2">
                <label for="birth">วัน/เดือน/ปีเกิด</label>
            </div>
            <div class="col">
                <input type="date" id="birth" class="from-control">
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-sm-12 col-md-2">
                <label for="age">อายุ</label>
            </div>
            <div class="col">
                <input id="age" class="from-control">
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-sm-12 col-md-2">
                <label>เพศ</label>
            </div>
            <div class="col">
                <div class="form-check form-check-inline">
                    <input type="radio" id="male" name="gender" class="form-check-input">
                    <label class="form-check-label" for="male">ชาย</label>
                </div>
                <div class="form-check form-check-inline">
                    <input type="radio" id="female" name="gender" class="form-check-input">
                    <label class="form-check-label" for="female">หญิง</label>
                </div>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-sm-12 col-md-2">
                <label for="photo">รูป</label>
            </div>
            <div class="col">
                <input type="file" id="photo">
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-sm-12 col-md-2">
                <label for="address">ที่อยู่</label>
            </div>
            <div class="col">
                <textarea id="address" class="from-control" rows="3"></textarea>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-sm-12 col-md-2">
                <label for="color">สีที่ชอบ</label>
            </div>
            <div class="col">
                <select id="color" class="from-control" style="width:130px;">
                    <option>สีแดง</option>
                    <option>สีน้ำเงิน</option>
                    <option>สีเขียว</option>
                    <option>สีเหลือง</option>
                </select>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-sm-12 col-md-2">
                <label>แนวเพลงที่ชอบ</label>
            </div>
            <div class="col">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" id="m1" name="music">
                    <label class="form-check-label" for="m1">เพื่อชีวิต</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" id="m2" name="music">
                    <label class="form-check-label" for="m2">ลูกทุ่ง</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" id="m3" name="music">
                    <label class="form-check-label" for="m3">อื่นๆ</label>
                </div>
            </div>
        </div>

        <div class="row mt-3">
    <div class="col-sm-12 col-md-2">
        <div class="form-check">
            <input type="checkbox" id="agree" class="form-check-input">
            <label class="form-check-label" for="agree">ยินยอมให้เก็บข้อมูล</label>
        </div>
    </div>
</div>


<div class="row mt-3">
    <div class="col-sm-12 col-md-2">
        <button type="reset" class="btn btn-sm btn-secondary">
            Reset
        </button>
    </div>
    <div class="col">
        <button type="submit" class="btn btn-sm btn-success">
            Submit
        </button>
    </div>
</div>

    </form>
</div>
</body>
</html>
