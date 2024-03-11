@extends('layout.layout')
@section('content')
<div class="content-body">
    <div class="row page-titles mx-0">
        <div class="col p-md-0">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">{{ $title }}</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">{{ $title }}</a></li>
            </ol>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    @foreach ($data_profile as $d)
                    <form method="post" action="/profile/updateprofile/{{ $d->id }}">
                        @csrf
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <h4 class="card-title">{{ $title }}</h4>
                               
                            </div>
                            <hr/>
                            <input type="hidden" name='role' value='{{ $d->role }}' required>

                            <div class="form-group">
                                <label>Nam Lengkap</label>
                                <input type="text" name='name' value='{{ $d->name }}' class="form-control" placeholder="Nama Lengkap .." required>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="name">Email</label>
                                    <input type="text" name='email' value='{{ $d->email }}' class="form-control" placeholder="Email .." required>
                                </div>

                                <div class="col-md-6">
                                    <label for="name">Password</label>
                                    <input type="password" name='password' class="form-control" placeholder="" required>
                                </div>
                            </div>
                                
                            
                            

                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Save Changes</button>
                        </div>
                    </form>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection