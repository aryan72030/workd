@extends('masterpage.layout')

@section('title')
    create emplyess
@endsection

@section('mainConten')
    <section class="dash-container">
        <div class="dash-content">
            <!-- [ breadcrumb ] start -->
            <div class="page-header">
                <div class="page-block">
                    <div class="row align-items-center">
                        <div class="col-md-12">
                            <div class="page-header-title">
                                <h4 class="m-b-10">Form Employees</h4>
                            </div>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item">Form Components</li>
                                <li class="breadcrumb-item">Form Validation</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h5>Form Employees</h5>
                        </div>
                        <div class="card-body">
                            <form class="validate-me" action="{{ url('edit_success') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                 <input type="hidden" name="id" value="{{ $data->id }}" id="">
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label text-lg-end">name</label>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" value="{{ $data->name }}" name="name" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label text-lg-end">Email:</label>
                                    <div class="col-lg-6">
                                        <input type="email" name="email" id="email" value="{{ $data->email }}"
                                            class="form-control"
                                            data-bouncer-message="The domain portion of the email address is invalid (the portion after the @)."
                                            required>
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label text-lg-end">contect</label>
                                    <div class="col-lg-6">
                                        <input type="number" class="form-control" value="{{ $data->contect }}" name="contect"
                                            id="number" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label text-lg-end">Role</label>
                                    <div class="col-lg-6">
                                        @foreach ($roles as $dis)
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="role[]"
                                                    id="checkbox-1"  value="{{ $dis->name }}"{{ in_array($dis->name,$assignedRoles) ? 'checked' : '' }}>
                                                <label class="form-check-label" for="checkbox-1">
                                                    {{ $dis->name }}
                                                </label>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                                
                               

                                <div class="form-group row">
                                    <div class="col-lg-4 col-form-label"></div>
                                    <div class="col-lg-6">
                                        <input type="submit" name="save" class="btn btn-primary" value="update">
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
                <!-- [ Form Validation ] end -->
            </div>
            <!-- [ Main Content ] end -->
        </div>
    </section>
@endsection
