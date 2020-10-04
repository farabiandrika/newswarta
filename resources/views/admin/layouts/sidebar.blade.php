<!-- User Info -->
<div class="user-info">
    <div class="image">
        <img src="{{ asset('adminlte/images/user.png') }}" width="48" height="48" alt="User" />
    </div>
    <div class="info-container">
        <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }}</div>
        <div class="email">{{ Auth::user()->email }}</div>
    </div>
</div>
<!-- #User Info -->
<!-- Menu -->
<div class="menu">
    <ul class="list">
        <li class="header">MENU</li>
        <li class="active">
            <a href="{{ url('/admin') }}">
                <i class="material-icons">home</i>
                <span>Home</span>
            </a>
        </li>
        <li>
            <a href="{{ url('/admin/user/profil') }}">
                <i class="material-icons">person</i>
                <span>Profil</span>
            </a>
        </li>
        <li>
            <a href="{{ url('/admin/user') }}">
                <i class="material-icons">supervisor_account</i>
                <span>User</span>
            </a>
        </li>
        <li>
            <a href="{{ url('/admin/feature') }}">
                <i class="material-icons">equalizer</i>
                <span>Feature</span>
            </a>
        </li>
        <li>
            <a href="javascript:void(0);" class="menu-toggle">
                <i class="material-icons">push_pin</i>
                <span>Pos</span>
            </a>
            <ul class="ml-menu">
                <li>
                    <a href="{{ url('/admin/pos') }}">Semua Pos</a>
                </li>
                <li>
                    <a href="{{ url('/admin/pos/draft') }}">Draft</a>
                </li>
                <li>
                    <a href="{{ url('/admin/pos/add') }}">Tambah Baru</a>
                </li>
                <li>
                    <a href="{{ url('/admin/kategori') }}">Kategori</a>
                </li>
                <li>
                    <a href="{{ url('/admin/tag') }}">Tag</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="{{ url('/admin/iklan') }}">
                <i class="material-icons">web_asset</i>
                <span>Iklan</span>
            </a>
        </li>
        <li>
            <a href="{{ url('/admin/komentar') }}">
                <i class="material-icons">question_answer</i>
                <span>Komentar</span>
            </a>
        </li>
        <li>
            <a href="{{ url('/admin/pengaturan') }}">
                <i class="material-icons">settings</i>
                <span>Pengaturan</span>
            </a>
        </li>
        <li>
            <a href="{{ url('/logout') }}">
                <i class="material-icons">input</i>
                <span>Log Out</span>
            </a>
        </li>
    </ul>
</div>
<!-- #Menu -->
<!-- Footer -->
<div class="legal">
    <div class="copyright">
        &copy; 2020 <a href="javascript:void(0);">AdminBSB</a>&nbsp;<b>Version: </b> 1.0.5
    </div>
</div>
<!-- #Footer -->
@section('script')


@endsection
