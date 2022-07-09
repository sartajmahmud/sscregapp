@extends('layouts.layout')

@section('bodyContent')
<form action="/admin" method="POST">
    @csrf
    <div class="form-group">

        <label class="label_txt">Username<span  style="color:red"> *</span></label>
        <input type="text" class="form-control" name="name" value="<?php if(isset($error)){ echo $_POST['name'];}?>" required="">
    </div>
    <div class="form-group">
        <label class="label_txt">Password<span  style="color:red"> *</span></label>
        <input type="password" class="form-control" name="password" value="<?php if(isset($error)){ echo $_POST['password'];}?>" required="">
    </div>


    <button class="btn btn-primary btn-group-lg form_btn">login</button>
</form>

@endsection
