@extends('template.default')
@section('title','Workshop FORM')
@section('content')
<h1>Workshop #HTML - FORM</h1>
<form>
        <div class="row mt-3">
            <div class="col-sm-12 col-md-2">
                <label for="fname">ชื่อ</lable>
            </div>
            <div class="col">
                <input id="fname" class="from-control">
                <div class="valid-feedback">
                    ถูกต้อง
                </div>
                <div class="invalid-feedback">
                    โปรดระบุชื่อ
                </div>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-sm-12 col-md-2">
                <label for="lname">สกุล</lable>
            </div>
            <div class="col">
                <input id="lname" class="from-control">
                <div class="valid-feedback">
                 ถูกต้อง
                      </div>
                <div class="invalid-feedback">
                 โปรดระบุนามสกุล
                </div>
            </div>

                    <div class="row mt-3">
            <div class="col-sm-12 col-md-2">
                <label for="birth">วัน/เดือน/ปีเกิด</label>
            </div>
            <div class="col">
                <input type="date" id="birth" class="from-control">
                <div class="valid-feedback">
                    ถูกต้อง
                </div>
                <div class="invalid-feedback">
                    โปรดระบุวันเดือนปีเกิด
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-sm-12 col-md-2">
                <label for="age">อายุ</label>
            </div>
            <div class="col">
                <input id="age" class="from-control">
                <div class="valid-feedback">
                    ถูกต้อง
                </div>
                <div class="invalid-feedback">
                    โปรดระบุอายุ
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
                <div class="invalid-feedback " id="genderError">
                    โปรดเลือกเพศ
                  </div>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-sm-12 col-md-2">
                <label for="photo">รูป</label>
            </div>
            <div class="col">
                <input type="file" id="photo" class="from-control">
                <div class="valid-feedback">
                    ถูกต้อง
                </div>
                <div class="invalid-feedback">
                    โปรดอัปโหลดรูป
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-sm-12 col-md-2">
                <label for="address">ที่อยู่</label>
            </div>
            <div class="col">
                <textarea id="address" class="from-control" rows="3"></textarea>
                <div class="valid-feedback">
                    ถูกต้อง
                </div>
                <div class="invalid-feedback">
                    โปรดระบุที่อยู่
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-sm-12 col-md-2">
                <label for="color">สีที่ชอบ</label>
            </div>
            <div class="col">
                <select id="color" class="from-control" style="width:130px;">
                     <option value="">-- เลือกสี --</option>
                    <option>สีแดง</option>
                    <option>สีน้ำเงิน</option>
                    <option>สีเขียว</option>
                    <option>สีเหลือง</option>
                </select>
                <div class="valid-feedback">
                    ถูกต้อง
                </div>
                <div class="invalid-feedback">
                    โปรดเลือกสีที่ชอบ
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
                <div class="invalid-feedback " id="musicError">
                    โปรดเลือกแนวเพลงที่ชอบ
                  </div>
            </div>
        </div>

        <div class="row mt-3">
    <div class="col-sm-12 col-md-2">
        <div class="form-check">
            <input type="checkbox" id="agree" class="form-check-input">
            <label class="form-check-label" for="agree">ยินยอมให้เก็บข้อมูล</label>
            <div class="invalid-feedback " id="agreeError">
             กรุณายินยอมให้เก็บข้อมูล
        </div>
    </div>
</div>

<div class="row mt-3">
    <div class="col-sm-12 col-md-2">
        <button type="button" class="btn btn-sm btn-secondary"  onclick="resetForm()">
            Reset
        </button>
    </div>
    <div class="col">
        <button type="button" class="btn btn-sm btn-success" onclick="cilckMe()"  >
            Submit
        </button>
    </div>
</div>
             </form>
             @endsection
             @push('scripts')
             <script>
                let cilckMe = function (){
                    let checkField = (id) =>{
                        let el = document.getElementById(id)
                        if(el.value.trim() == ""){
                            el.classList.remove('is-valid')
                            el.classList.add('is-invalid')
                            return false
                        }else{
                            el.classList.remove('is-invalid')
                            el.classList.add('is-valid')
                            return true
                        }
                    }
                      checkField('fname')
                      checkField('lname')
                      checkField('birth')
                      checkField('age')
                      checkField('address')
                      checkField('color')

               let photo = document.getElementById('photo')
                if(photo.files.length === 0){
                    photo.classList.add('is-invalid')
                }else{
                    photo.classList.remove('is-invalid')
                    photo.classList.add('is-valid')
                }

                let gender = document.querySelector('input[name="gender"]:checked')
                document.getElementById('genderError').style.display = gender ? 'none' : 'block'

                let music = document.querySelector('input[name="music"]:checked')
                document.getElementById('musicError').style.display = music ? 'none' : 'block'

                let agree = document.getElementById('agree')
                document.getElementById('agreeError').style.display = agree.checked ? 'none' : 'block'
            }

                let submitted = false
                function resetForm(){
                    document.querySelector('form').reset()
                    document.querySelector('form').reset()
                    document.querySelectorAll('.is-valid, .is-invalid').forEach(el => {
                         el.classList.remove('is-valid', 'is-invalid')})
                          document.getElementById('genderError').style.display = 'none'
                          document.getElementById('musicError').style.display = 'none'
                          document.getElementById('agreeError').style.display = 'none'
                          submitted = false
                }

                let myFunc = (callback)=>{
                    callback("in CallBack")
                }
                callMe =(param)=>{
                    console.log(param);
                }
                myFunc(callMe)
               let myval1 = 1
               let myval2 = "1"
               myval2 = parseInt(myval2)
               console.log(myval2 + myval1 + "\n\n\n\nทดสอบ");
             </script>
             @endpush
