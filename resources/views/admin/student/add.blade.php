@extends('layouts.app')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Add New Student</h1>
                </div>

            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="card card-primary">

                        <!-- /.card-header -->
                        <!-- form start -->
                        <form method="post" action="" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <div class="card-body">
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label>First Name<span style="color:chartreuse;">*</span></label>
                                        <input type="text" name="name" value="{{old('name')}}" required
                                            class="form-control" placeholder="First Name">
                                        <div style="color:red">{{$errors->first('name')}}</div>

                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>last_Name<span style="color:red;">*</span></label>
                                        <input type="text" name="last_name" value="{{old('last_name')}}" required
                                            class="form-control" placeholder="Last Name">
                                        <div style="color:red">{{$errors->first('last_name')}}</div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Admission Number<span style="color:red;">*</span></label>
                                        <input type="text" name="admission_number" value="{{old('admission_number')}}"
                                            required class="form-control" placeholder="Admission Number">
                                        <div style="color:red">{{$errors->first('admission_number')}}</div>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label>Roll Number<span style="color:red;">*</span></label>
                                        <input type="text" name="roll_number" value="{{old('roll_number')}}" required
                                            class="form-control" placeholder="Roll Number">
                                        <div style="color:red">{{$errors->first('roll_number')}}</div>
                                    </div>


                                    <div class="form-group col-md-6">
                                        <label>Class</label>
                                        <select class="form-control" required name="class_id">
                                            <option value="">Select Class</option>
                                            @foreach ($getClass as $value)
                                                <option {{(old('class_id') == 'value_id') ? 'selected' : ''}}
                                                    value="{{$value->id}}">{{$value->name}}</option>
                                            @endforeach

                                        </select>
                                        <div style="color:red">{{$errors->first('class_id')}}</div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Gender<span style="color:red;">*</span></label>
                                        <select class="form-control" required name="gender">
                                            <option value="">Select Gender</option>
                                            <option {{(old('gender') == 'Male') ? 'selected' : ''}} value="Male">Male
                                            </option>
                                            <option {{(old('gender') == 'Female') ? 'selected' : ''}} value="Female">
                                                Female
                                            </option>
                                            <option {{(old('gender') == 'Other') ? 'selected' : ''}} value="Other">Other
                                            </option>
                                        </select>
                                        <div style="color:red">{{$errors->first('gender')}}</div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Date of Birth<span style="color:red;">*</span></label>
                                        <input type="date" name="date_of_birth" value="{{old('date_of_birth')}}"
                                            required class="form-control" required placeholder="Date of Birth">
                                        <div style="color:red">{{$errors->first('date_of_birth')}}</div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Caste</label>
                                        <input type="text" name="caste" value="{{old('caste')}}" class="form-control"
                                            placeholder="Caste">
                                        <div style="color:red">{{$errors->first('caste')}}</div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Religion</label>
                                        <input type="text" name="religion" value="{{old('religion')}}"
                                            class="form-control" placeholder="Caste">
                                        <div style="color:red">{{$errors->first('religion')}}</div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Mobile Number<span style="color:red;">*</span></label>
                                        <input type="text" name="mobile_number" value="{{old('mobile_number')}}"
                                            class="form-control" placeholder="Mobile Number">
                                        <div style="color:red">{{$errors->first('mobile_number')}}</div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Admission Date<span style="color:red;">*</span></label>
                                        <input type="date" name="admission_date" required
                                            value="{{old('admission_date')}}" class="form-control"
                                            placeholder="Admission Date">
                                        <div style="color:red">{{$errors->first('admission_date')}}</div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Profile Pic</label>
                                        <input type="file" name="profile_pic" class="form-control">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Blood Group</label>
                                        <input type="text" name="blood_group" value="{{old('blood_group')}}"
                                            class="form-control" placeholder="Blood Group">
                                        <div style="color:red">{{$errors->first('blood_group')}}</div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Height</label>
                                        <input type="text" name="height" value="{{old('height')}}" class="form-control"
                                            placeholder="Height">
                                        <div style="color:red">{{$errors->first('height')}}</div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Weight</label>
                                        <input type="text" name="weight" value="{{old('weight')}}" class="form-control"
                                            placeholder="Weight">
                                        <div style="color:red">{{$errors->first('weight')}}</div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Status</label>
                                        <select class="form-control" required name="status">
                                            <option value="">Select Status</option>
                                            <option {{(old('status') == 0) ? 'selected' : ''}} value="0">Active</option>
                                            <option {{(old('status') == 1) ? 'selected' : ''}} value="1">Inactive</option>
                                        </select>
                                        <div style="color:red">{{$errors->first('status')}}</div>
                                    </div>

                                </div>
                                <hr>
                                <div class="form-group">
                                    <label>Email<span style="color:red;">*</span></label>
                                    <input type="Email" name="email" value="{{old('name')}}" required
                                        class="form-control" placeholder="Email">
                                    {{$errors->first('email')}}
                                </div>
                                <div class="form-group">
                                    <label>Password<span style="color:red;">*</span></label>
                                    <input type="password" name="password" required class="form-control"
                                        placeholder="Password" placeholder="Password">
                                </div>
                                <!-- /.card-body -->

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                        </form>
                    </div>
                    <!-- /.card -->

                    <!-- general form elements -->

                    <!--/.col (right) -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>


@endsection