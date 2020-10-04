@extends('admin.layouts.master')

@section('content')
<div class="container-fluid">
    <div class="block-header">
        <h2>{{ $title }}</h2>
    </div>
</div>
<ol class="breadcrumb">
    <li>
        <a href="{{ url('/admin') }}">
            <i class="material-icons">home</i> Home
        </a>
    </li>
    <li class="active">
        <i class="material-icons">person</i> {{  $title }}
    </li>
</ol>


<div class="container-fluid">
    <div class="row clearfix">
        <div class="col-xs-12 col-sm-3">
            <div class="card profile-card">
                <div class="profile-header">&nbsp;</div>
                <div class="profile-body">
                    <div class="image-area">
                        <img src="{{ asset('adminlte/images/avatar.png') }}" alt="AdminBSB - Profile Image" />
                    </div>
                    <div class="content-area">
                        <h3>{{$user->name}}</h3>
                        <p>{{$user->role}}</p>
                        <p class="label bg-green">Aktif</p>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-xs-12 col-sm-9">
            <div class="card">
                <div class="body">
                    <div>
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active"><a href="#profile_settings" aria-controls="settings" role="tab" data-toggle="tab">Profile Settings</a></li>
                            <li role="presentation"><a href="#change_password_settings" aria-controls="settings" role="tab" data-toggle="tab">Change Password</a></li>
                        </ul>

                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade in active" id="profile_settings">
                                {{-- menampilkan error validasi --}}
                                @if (count($errors) > 0)
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                                @endif
                                <form method="POST" action="{{ url('admin/user/profil/1') }}" class="form-horizontal">
                                {{ csrf_field() }}
                                {{ method_field('put') }}
                                    <div class="form-group">
                                        <label for="nama" class="col-sm-2 control-label">Username</label>
                                        <div class="col-sm-10">
                                            <div class="form-line">
                                                <input type="text" class="form-control" id="username" name="username" placeholder="Username" value="Marc" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="Email" class="col-sm-2 control-label">Email</label>
                                        <div class="col-sm-10">
                                            <div class="form-line">
                                                <input type="email" class="form-control" id="email" name="email" placeholder="Email" value="example@example.com" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="no_hp" class="col-sm-2 control-label">No HP</label>
                                        <div class="col-sm-10">
                                            <div class="form-line">
                                                <input type="text" class="form-control" id="no_hp" value="082356377372" name="no_hp" placeholder="No HP">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                      <label for="alamat" class="col-sm-2 control-label">Alamat</label>
                                      <div class="col-sm-10">
                                          <div class="form-line">
                                              <input type="text" class="form-control" id="alamat" value="Jl. Tengku bey 3 Simpang Baru, Panam" name="alamat" placeholder="Alamat">
                                          </div>
                                      </div>
                                  </div>


                                    <div class="form-group">
                                        <div class="col-sm-offset-2 col-sm-10">
                                            <button type="submit" class="btn btn-primary">Update</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div role="tabpanel" class="tab-pane fade in" id="change_password_settings">
                            {{-- menampilkan error validasi --}}
                                @if (count($errors) > 0)
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                                @endif
                                <form method="POST" action="{{ url('admin/user/profil/password/1') }}" class="form-horizontal">
                                    {{ csrf_field() }}
                                    {{ method_field('put') }}
                                    <div class="form-group">
                                        <label for="OldPassword" class="col-sm-3 control-label">Old Password</label>
                                        <div class="col-sm-9">
                                            <div class="form-line">
                                                <input type="password" class="form-control" id="OldPassword" name="OldPassword" placeholder="Old Password" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="NewPassword" class="col-sm-3 control-label">New Password</label>
                                        <div class="col-sm-9">
                                            <div class="form-line">
                                                <input type="password" class="form-control" id="NewPassword" name="NewPassword" placeholder="New Password" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="NewPasswordConfirm" class="col-sm-3 control-label">New Password (Confirm)</label>
                                        <div class="col-sm-9">
                                            <div class="form-line">
                                                <input type="password" class="form-control" id="NewPasswordConfirm" name="NewPasswordConfirm" placeholder="New Password (Confirm)" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-sm-offset-3 col-sm-9">
                                            <button type="submit" class="btn btn-primary">Update</button>
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
</div>
@endsection
