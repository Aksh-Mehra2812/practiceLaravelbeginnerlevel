@extends('user/layouts/app')
@section('content')
<style>
    .section-wrapper {
        border: 1px solid #ced4da;
        background-color: #fff;
        padding: 20px;
        padding: 40px;
    }

    .section-title {
        font-size: 14px;
        font-weight: 700;
        color: #343a40;
        text-transform: uppercase;
        margin-top: 20px;
        display: block;
        letter-spacing: 1px;
    }

    .mg-sm-b-40 {
        margin-bottom: 40px;
    }
</style>
<div class="container">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-9">
            <div class="col-xs-11 col-sm-11 col-md-11 col-lg-10 col-xl-10 col-xxl-10">
                <div class="row pt-2">
                    <div class="col ps-4">
                        <div class="mb-4">
                            <form class="row g-3" action="" method="POST">
                                @csrf
                                <div class="row g-3">
                                    <div class="col-md-3">
                                        <label for="inputFirstName" class="form-label">First Name<sup><i class="bi bi-asterisk text-primary"></i></sup></label>
                                        <input type="text" class="form-control" id="inputFirstName" name="first_name" placeholder="First Name" required value="{{old('first_name')}}">
                                    </div>
                                    <div class="col-md-3">
                                        <label for="inputLastName" class="form-label">Last Name<sup><i class="bi bi-asterisk text-primary"></i></sup></label>
                                        <input type="text" class="form-control" id="inputLastName" name="last_name" placeholder="Last Name" required value="{{old('last_name')}}">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="inputEmail4" class="form-label">Email<sup><i class="bi bi-asterisk text-primary"></i></sup></label>
                                        <input type="email" class="form-control" id="inputEmail4" name="email" required value="{{old('email')}}">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="inputPassword4" class="form-label">Password<sup><i class="bi bi-asterisk text-primary"></i></sup></label>
                                        <input type="password" class="form-control" id="inputPassword4" name="password" required>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="formFile" class="form-label">Photo</label>
                                        <input class="form-control" type="file" id="formFile" onchange="previewFile()">
                                        <div id="previewPhoto"></div>
                                        <input type="hidden" id="photoHiddenInput" name="photo" value="">
                                    </div>
                                    <div class="col-md-3">
                                        <label for="inputBirthday" class="form-label">Birthday<sup><i class="bi bi-asterisk text-primary"></i></sup></label>
                                        <input type="date" class="form-control" id="inputBirthday" name="birthday" placeholder="Birthday" required value="{{old('birthday')}}">
                                    </div>
                                    <div class="col-3-md">
                                        <label for="inputAddress" class="form-label">Address<sup><i class="bi bi-asterisk text-primary"></i></sup></label>
                                        <input type="text" class="form-control" id="inputAddress" name="address" placeholder="634 Main St" required value="{{old('address')}}">
                                    </div>
                                    <div class="col-3-md">
                                        <label for="inputAddress2" class="form-label">Address 2</label>
                                        <input type="text" class="form-control" id="inputAddress2" name="address2" placeholder="Apartment, studio, or floor" value="{{old('address2')}}">
                                    </div>
                                    <div class="col-md-3">
                                        <label for="inputCity" class="form-label">City<sup><i class="bi bi-asterisk text-primary"></i></sup></label>
                                        <input type="text" class="form-control" id="inputCity" name="city" placeholder="Dhaka..." required value="{{old('city')}}">
                                    </div>
                                    <div class="col-md-3">
                                        <label for="inputZip" class="form-label">Zip<sup><i class="bi bi-asterisk text-primary"></i></sup></label>
                                        <input type="text" class="form-control" id="inputZip" name="zip" required value="{{old('zip')}}">
                                    </div>
                                    <div class="col-md-3">
                                        <label for="inputState" class="form-label">Gender<sup><i class="bi bi-asterisk text-primary"></i></sup></label>
                                        <select id="inputState" class="form-select" name="gender" required>
                                            <option value="Male" {{old('gender') == 'male' ? 'selected' : ''}}>Male</option>
                                            <option value="Female" {{old('gender') == 'female' ? 'selected' : ''}}>Female</option>
                                        </select>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="inputNationality" class="form-label">Nationality<sup><i class="bi bi-asterisk text-primary"></i></sup></label>
                                        <input type="text" class="form-control" id="inputNationality" name="nationality" placeholder="e.g. Bangladeshi, German, ..." required value="{{old('nationality')}}">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="inputBloodType" class="form-label">BloodType<sup><i class="bi bi-asterisk text-primary"></i></sup></label>
                                        <select id="inputBloodType" class="form-select" name="blood_type" required>
                                            <option {{old('blood_type') == 'A+' ? 'selected' : ''}}>A+</option>
                                            <option {{old('blood_type') == 'A-' ? 'selected' : ''}}>A-</option>
                                            <option {{old('blood_type') == 'B+' ? 'selected' : ''}}>B+</option>
                                            <option {{old('blood_type') == 'B-' ? 'selected' : ''}}>B-</option>
                                            <option {{old('blood_type') == 'O+' ? 'selected' : ''}}>O+</option>
                                            <option {{old('blood_type') == 'O-' ? 'selected' : ''}}>O-</option>
                                            <option {{old('blood_type') == 'AB+' ? 'selected' : ''}}>AB+</option>
                                            <option {{old('blood_type') == 'AB-' ? 'selected' : ''}}>AB-</option>
                                            <option {{old('blood_type') == 'other' ? 'selected' : ''}}>Other</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="inputReligion" class="form-label">Religion<sup><i class="bi bi-asterisk text-primary"></i></sup></label>
                                        <select id="inputReligion" class="form-select" name="religion" required>
                                            <option {{old('religion') == 'Islam' ? 'selected' : ''}}>Islam</option>
                                            <option {{old('religion') == 'Hinduism' ? 'selected' : ''}}>Hinduism</option>
                                            <option {{old('religion') == 'Christianity' ? 'selected' : ''}}>Christianity</option>
                                            <option {{old('religion') == 'Buddhism' ? 'selected' : ''}}>Buddhism</option>
                                            <option {{old('religion') == 'Judaism' ? 'selected' : ''}}>Judaism</option>
                                            <option {{old('religion') == 'Others' ? 'selected' : ''}}>Other</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="inputPhone" class="form-label">Phone<sup><i class="bi bi-asterisk text-primary"></i></sup></label>
                                        <input type="text" class="form-control" id="inputPhone" name="phone" placeholder="+880 01......" required value="{{old('phone')}}">
                                    </div>
                                    <div class="col-5-md">
                                        <label for="inputIdCardNumber" class="form-label">Id Card Number<sup><i class="bi bi-asterisk text-primary"></i></sup></label>
                                        <input type="text" class="form-control" id="inputIdCardNumber" name="id_card_number" placeholder="e.g. 2021-03-01-02-01 (Year Semester Class Section Roll)" required value="{{old('id_card_number')}}">
                                    </div>
                                </div>
                                <div class="row mt-4 g-3">
                                    <h6>Parents' Information</h6>
                                    <div class="col-md-3">
                                        <label for="inputFatherName" class="form-label">Father Name<sup><i class="bi bi-asterisk text-primary"></i></sup></label>
                                        <input type="text" class="form-control" id="inputFatherName" name="father_name" placeholder="Father Name" required value="{{old('father_name')}}">
                                    </div>
                                    <div class="col-md-3">
                                        <label for="inputFatherPhone" class="form-label">Father's Phone<sup><i class="bi bi-asterisk text-primary"></i></sup></label>
                                        <input type="text" class="form-control" id="inputFatherPhone" name="father_phone" placeholder="+880 01......" required value="{{old('father_phone')}}">
                                    </div>
                                    <div class="col-md-3">
                                        <label for="inputMotherName" class="form-label">Mother Name<sup><i class="bi bi-asterisk text-primary"></i></sup></label>
                                        <input type="text" class="form-control" id="inputMotherName" name="mother_name" placeholder="Mother Name" required value="{{old('mother_name')}}">
                                    </div>
                                    <div class="col-md-3">
                                        <label for="inputMotherPhone" class="form-label">Mother's Phone<sup><i class="bi bi-asterisk text-primary"></i></sup></label>
                                        <input type="text" class="form-control" id="inputMotherPhone" name="mother_phone" placeholder="+880 01......" required value="{{old('mother_name')}}">
                                    </div>
                                    <div class="col-4-md">
                                        <label for="inputParentAddress" class="form-label">Address<sup><i class="bi bi-asterisk text-primary"></i></sup></label>
                                        <input type="text" class="form-control" id="inputParentAddress" name="parent_address" placeholder="634 Main St" required value="{{old('parent_address')}}">
                                    </div>
                                </div>
                                <div class="row mt-4 g-3">
                                    <h6>Academic Information</h6>
                                    <div class="col-md-6">
                                        <label for="inputAssignToClass" class="form-label">Assign to class:<sup><i class="bi bi-asterisk text-primary"></i></sup></label>
                                        <select onchange="getSections(this);" class="form-select" id="inputAssignToClass" name="class_id" required>

                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="inputAssignToSection" class="form-label">Assign to section:<sup><i class="bi bi-asterisk text-primary"></i></sup></label>
                                        <select class="form-select" id="inputAssignToSection" name="section_id" required>
                                        </select>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="inputBoardRegistrationNumber" class="form-label">Board registration No.</label>
                                        <input type="text" class="form-control" id="inputBoardRegistrationNumber" name="board_reg_no" placeholder="Registration No." value="{{old('board_reg_no')}}">
                                    </div>
                                    <input type="hidden" name="session_id" value="">
                                </div>
                                <div class="row mt-4">
                                    <div class="col-12-md">
                                        <button type="submit" class="btn btn-sm btn-outline-primary"><i class="bi bi-person-plus"></i> Add</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="section-wrapper">
        <label class="section-title">Top Label Layout</label>
        <p class="mg-b-20 mg-sm-b-40">A form with a label on top of each form control.</p>

        <div class="form-layout">

            <div class="col-xs-11 col-sm-11 col-md-11 col-lg-10 col-xl-10 col-xxl-10">
                <div class="row pt-2">
                    <div class="col ps-4">
                        <div class="mb-4">
                            <form class="row g-3" action="" method="POST">
                                @csrf
                                <div class="row g-3">
                                    <div class="col-md-3">
                                        <label for="inputFirstName" class="form-label">First Name<sup><i class="bi bi-asterisk text-primary"></i></sup></label>
                                        <input type="text" class="form-control" id="inputFirstName" name="first_name" placeholder="First Name" required value="{{old('first_name')}}">
                                    </div>
                                    <div class="col-md-3">
                                        <label for="inputLastName" class="form-label">Last Name<sup><i class="bi bi-asterisk text-primary"></i></sup></label>
                                        <input type="text" class="form-control" id="inputLastName" name="last_name" placeholder="Last Name" required value="{{old('last_name')}}">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="inputEmail4" class="form-label">Email<sup><i class="bi bi-asterisk text-primary"></i></sup></label>
                                        <input type="email" class="form-control" id="inputEmail4" name="email" required value="{{old('email')}}">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="inputPassword4" class="form-label">Password<sup><i class="bi bi-asterisk text-primary"></i></sup></label>
                                        <input type="password" class="form-control" id="inputPassword4" name="password" required>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="formFile" class="form-label">Photo</label>
                                        <input class="form-control" type="file" id="formFile" onchange="previewFile()">
                                        <div id="previewPhoto"></div>
                                        <input type="hidden" id="photoHiddenInput" name="photo" value="">
                                    </div>
                                    <div class="col-md-3">
                                        <label for="inputBirthday" class="form-label">Birthday<sup><i class="bi bi-asterisk text-primary"></i></sup></label>
                                        <input type="date" class="form-control" id="inputBirthday" name="birthday" placeholder="Birthday" required value="{{old('birthday')}}">
                                    </div>
                                    <div class="col-3-md">
                                        <label for="inputAddress" class="form-label">Address<sup><i class="bi bi-asterisk text-primary"></i></sup></label>
                                        <input type="text" class="form-control" id="inputAddress" name="address" placeholder="634 Main St" required value="{{old('address')}}">
                                    </div>
                                    <div class="col-3-md">
                                        <label for="inputAddress2" class="form-label">Address 2</label>
                                        <input type="text" class="form-control" id="inputAddress2" name="address2" placeholder="Apartment, studio, or floor" value="{{old('address2')}}">
                                    </div>
                                    <div class="col-md-3">
                                        <label for="inputCity" class="form-label">City<sup><i class="bi bi-asterisk text-primary"></i></sup></label>
                                        <input type="text" class="form-control" id="inputCity" name="city" placeholder="Dhaka..." required value="{{old('city')}}">
                                    </div>
                                    <div class="col-md-3">
                                        <label for="inputZip" class="form-label">Zip<sup><i class="bi bi-asterisk text-primary"></i></sup></label>
                                        <input type="text" class="form-control" id="inputZip" name="zip" required value="{{old('zip')}}">
                                    </div>
                                    <div class="col-md-3">
                                        <label for="inputState" class="form-label">Gender<sup><i class="bi bi-asterisk text-primary"></i></sup></label>
                                        <select id="inputState" class="form-select" name="gender" required>
                                            <option value="Male" {{old('gender') == 'male' ? 'selected' : ''}}>Male</option>
                                            <option value="Female" {{old('gender') == 'female' ? 'selected' : ''}}>Female</option>
                                        </select>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="inputNationality" class="form-label">Nationality<sup><i class="bi bi-asterisk text-primary"></i></sup></label>
                                        <input type="text" class="form-control" id="inputNationality" name="nationality" placeholder="e.g. Bangladeshi, German, ..." required value="{{old('nationality')}}">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="inputBloodType" class="form-label">BloodType<sup><i class="bi bi-asterisk text-primary"></i></sup></label>
                                        <select id="inputBloodType" class="form-select" name="blood_type" required>
                                            <option {{old('blood_type') == 'A+' ? 'selected' : ''}}>A+</option>
                                            <option {{old('blood_type') == 'A-' ? 'selected' : ''}}>A-</option>
                                            <option {{old('blood_type') == 'B+' ? 'selected' : ''}}>B+</option>
                                            <option {{old('blood_type') == 'B-' ? 'selected' : ''}}>B-</option>
                                            <option {{old('blood_type') == 'O+' ? 'selected' : ''}}>O+</option>
                                            <option {{old('blood_type') == 'O-' ? 'selected' : ''}}>O-</option>
                                            <option {{old('blood_type') == 'AB+' ? 'selected' : ''}}>AB+</option>
                                            <option {{old('blood_type') == 'AB-' ? 'selected' : ''}}>AB-</option>
                                            <option {{old('blood_type') == 'other' ? 'selected' : ''}}>Other</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="inputReligion" class="form-label">Religion<sup><i class="bi bi-asterisk text-primary"></i></sup></label>
                                        <select id="inputReligion" class="form-select" name="religion" required>
                                            <option {{old('religion') == 'Islam' ? 'selected' : ''}}>Islam</option>
                                            <option {{old('religion') == 'Hinduism' ? 'selected' : ''}}>Hinduism</option>
                                            <option {{old('religion') == 'Christianity' ? 'selected' : ''}}>Christianity</option>
                                            <option {{old('religion') == 'Buddhism' ? 'selected' : ''}}>Buddhism</option>
                                            <option {{old('religion') == 'Judaism' ? 'selected' : ''}}>Judaism</option>
                                            <option {{old('religion') == 'Others' ? 'selected' : ''}}>Other</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="inputPhone" class="form-label">Phone<sup><i class="bi bi-asterisk text-primary"></i></sup></label>
                                        <input type="text" class="form-control" id="inputPhone" name="phone" placeholder="+880 01......" required value="{{old('phone')}}">
                                    </div>
                                    <div class="col-5-md">
                                        <label for="inputIdCardNumber" class="form-label">Id Card Number<sup><i class="bi bi-asterisk text-primary"></i></sup></label>
                                        <input type="text" class="form-control" id="inputIdCardNumber" name="id_card_number" placeholder="e.g. 2021-03-01-02-01 (Year Semester Class Section Roll)" required value="{{old('id_card_number')}}">
                                    </div>
                                </div>
                                <div class="row mt-4 g-3">
                                    <h6>Parents' Information</h6>
                                    <div class="col-md-3">
                                        <label for="inputFatherName" class="form-label">Father Name<sup><i class="bi bi-asterisk text-primary"></i></sup></label>
                                        <input type="text" class="form-control" id="inputFatherName" name="father_name" placeholder="Father Name" required value="{{old('father_name')}}">
                                    </div>
                                    <div class="col-md-3">
                                        <label for="inputFatherPhone" class="form-label">Father's Phone<sup><i class="bi bi-asterisk text-primary"></i></sup></label>
                                        <input type="text" class="form-control" id="inputFatherPhone" name="father_phone" placeholder="+880 01......" required value="{{old('father_phone')}}">
                                    </div>
                                    <div class="col-md-3">
                                        <label for="inputMotherName" class="form-label">Mother Name<sup><i class="bi bi-asterisk text-primary"></i></sup></label>
                                        <input type="text" class="form-control" id="inputMotherName" name="mother_name" placeholder="Mother Name" required value="{{old('mother_name')}}">
                                    </div>
                                    <div class="col-md-3">
                                        <label for="inputMotherPhone" class="form-label">Mother's Phone<sup><i class="bi bi-asterisk text-primary"></i></sup></label>
                                        <input type="text" class="form-control" id="inputMotherPhone" name="mother_phone" placeholder="+880 01......" required value="{{old('mother_name')}}">
                                    </div>
                                    <div class="col-4-md">
                                        <label for="inputParentAddress" class="form-label">Address<sup><i class="bi bi-asterisk text-primary"></i></sup></label>
                                        <input type="text" class="form-control" id="inputParentAddress" name="parent_address" placeholder="634 Main St" required value="{{old('parent_address')}}">
                                    </div>
                                </div>
                                <div class="row mt-4 g-3">
                                    <h6>Academic Information</h6>
                                    <div class="col-md-6">
                                        <label for="inputAssignToClass" class="form-label">Assign to class:<sup><i class="bi bi-asterisk text-primary"></i></sup></label>
                                        <select onchange="getSections(this);" class="form-select" id="inputAssignToClass" name="class_id" required>

                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="inputAssignToSection" class="form-label">Assign to section:<sup><i class="bi bi-asterisk text-primary"></i></sup></label>
                                        <select class="form-select" id="inputAssignToSection" name="section_id" required>
                                        </select>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="inputBoardRegistrationNumber" class="form-label">Board registration No.</label>
                                        <input type="text" class="form-control" id="inputBoardRegistrationNumber" name="board_reg_no" placeholder="Registration No." value="{{old('board_reg_no')}}">
                                    </div>
                                    <input type="hidden" name="session_id" value="">
                                </div>
                                <div class="form-layout-footer">
                                    <button class="btn btn-primary bd-0" style="float:right;">Submit Form</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>


        </div>

    </div>
</div>

@endsection
