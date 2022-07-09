@extends('layouts.layout')

@section('bodyContent')
<div class="sidenav">
    <a href="/">home</a>
    <a href="/register">Register Now</a>
    <a href="/registrars">View Registrars</a>
</div>
<form action="/register" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">

        <label class="label_txt">Full Name<span  style="color:red"> *</span></label>
        <input type="text" class="form-control" name="name" value="<?php if(isset($error)){ echo $_POST['name'];}?>" required="">
    </div>
    <div class="form-group">
        <label class="label_txt">Phone Number<span  style="color:red"> *</span></label>
        <input type="text" class="form-control" name="phone" value="<?php if(isset($error)){ echo $_POST['phone'];}?>" required="">
    </div>

    <div class="form-group">
        <label class="label_txt">Email<span  style="color:red"> *</span></label>
        <input type="email" class="form-control" name="email" value="<?php if(isset($error)){ echo $_POST['email'];}?>" required="">
    </div>

    <div class="form-group">
        <label class="label_txt">School Name<span  style="color:red"> *</span></label>
        <input type="text" class="form-control" name="school_name" value="<?php if(isset($error)){ echo $_POST['school_name'];}?>" required="">
    </div>
    <div class="form-group">
        <label class="label_txt">Home District<span  style="color:red"> *</span></label>
        <input type="text" class="form-control" name="home_district" value="<?php if(isset($error)){ echo $_POST['home_district'];}?>" required="">
    </div>
    <label for="spouse">Spouse<span  style="color:red"> *</span></label>

    <select name="spouse" id="spouse" >
        <option value="1">Yes</option>
        <option value="0">No</option>
    </select>
    <div class="form-group">
        <label class="label_txt">Spouse Phone Number</label>
        <input type="text" class="form-control" name="spouse_phone" value="<?php if(isset($error)){ echo $_POST['spouse_phone'];}?>">
    </div>

    <!--                       <div class="form-group">-->
    <!--                                                  <label class="label_txt">Driver</label>-->
    <!--                                                  <input type="text" class="form-control" name="driver" value="--><?php //if(isset($error)){ echo $_POST['driver'];}?><!--" required="">-->
    <!--                                              </div>-->
    <label for="driver">Driver<span  style="color:red"> *</span></label>

    <select name="driver" id="driver" >
        <option value="1">Yes</option>
        <option value="0">No</option>
    </select>

    <div class="form-group">
        <label class="label_txt">Present Address<span  style="color:red"> *</span></label>
        <input type="text" class="form-control" name="present_address" value="<?php if(isset($error)){ echo $_POST['present_address'];}?>" required="">
    </div>

    <div class="form-group">
        <label class="label_txt">Permanent Address<span  style="color:red"> *</span></label>
        <input type="text" class="form-control" name="permanent_address" value="<?php if(isset($error)){ echo $_POST['permanent_address'];}?>" required="">
    </div>
    <div class="form-group">
        <label class="label_txt">Blood Group<span  style="color:red"> *</span></label>
        <input type="text" class="form-control" name="blood_group" value="<?php if(isset($error)){ echo $_POST['blood_group'];}?>" required="">
    </div>
    <div class="form-group">
        <label class="label_txt">Profession<span  style="color:red"> *</span></label>
        <input type="text" class="form-control" name="profession" value="<?php if(isset($error)){ echo $_POST['profession'];}?>" required="">
    </div>
    <div class="form-group">
        <label class="label_txt">Profession's Description<span  style="color:red"> *</span></label>
        <input type="text" class="form-control" name="prof_description" value="<?php if(isset($error)){ echo $_POST['prof_description'];}?>" required="">
    </div>
    <div class="form-group">
        <label class="label_txt">Access Code<span  style="color:red"> *</span></label>
        <input type="text" class="form-control" name="code" value="<?php if(isset($error)){ echo $_POST['code'];}?>" required="">
    </div>


    <label for="payment_received_by">Payment Made to<span  style="color:red"> *</span></label>

    <select name="payment_received_by" id="payment_received_by" >
        <option value="Name1">Name1</option>
        <option value="Name2">Name2</option>
    </select>

    <div class="form-group">
        <label class="label_txt">Your Image<span  style="color:red"> *</span></label>
        <input type="text" name="image_id" class="form-control" required="">
    </div>


    <div class="form-group">
        <input class="form-control" type="file" name="uploadfile" value="" />
    </div>



    <button class="btn btn-primary btn-group-lg form_btn">Complete Registration</button>
</form>

@endsection
