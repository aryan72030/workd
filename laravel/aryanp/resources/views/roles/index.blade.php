@extends('masterpage.layout')
@if(session('error'))
<script>
    alert("{{ session('error') }}");
</script>
@endif
@section('title')
    {{ __('Employess') }}
@endsection

@section('mainConten')
 <section class="dash-container">
        <div class="dash-content">
            <div class="page-header">
                <div class="page-block">
                    <div class="row align-items-center">
                        <div class="col-md-12">
                            <div class="page-header-title">
                                <h4 class="m-b-10">Basic Tables</h4>
                            </div>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item">Table</li>
                                <li class="breadcrumb-item">Basic Tables</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-header">
                            <h5>Basic Table</h5>
                            <span class="d-block m-t-5">use class <code>table</code> inside table
                                element</span>
                            <a href="{{ url('createrole') }}" class="btn  btn-primary">add</a>
                        </div>

                        <div class="card-body table-border-style">
                            <div class="table-responsive">
                                <table class="table" id="pc-dt-simple">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Action</th>
                                      
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($role as $data)
                                            <tr>
                                                <td>{{$data->name}}</td>
                                    
                                             
                                                <td>
                                                    <a href="{{ url('role/edit/'.$data->id) }}" class="btn btn-gradient-info">update</a>
                                                    <a href="{{ url('role/delete/'.$data->id) }}" class="btn btn-gradient-danger">delete</a>
                                                </td>
                                            </tr>
                                   @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection