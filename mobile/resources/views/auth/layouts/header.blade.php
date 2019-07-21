<header id="header" class="header-scrolled" style="background-image:linear-gradient(to bottom right, #004785, #0574BF);height: 68px;">

    <div class="container main-menu">
        <div class="">
            <div class="pull-left">
                <a href="/" class="fa fa-arrow-circle-left fa-2x" style="color:#fff;"></a>
            </div>
            <div id="logo" class="text-center" style="padding-top:5px">
              @if (Request::is('login*'))
                <p><b style="color:#fff">Login</b></p>
              @elseif (Request::is('register*'))
                <p><b style="color:#fff">Daftar</b></p>
              @elseif (Request::is('password/email*'))
                <p><b style="color:#fff">Reset Password</b></p>
              @elseif (Request::is('password/reset*'))
                <p><b style="color:#fff">Lupa Password</b></p>
              @elseif (Request::is('email/verify*'))
                <p><b style="color:#fff">Verifikasi Email</b></p>
              @endif
            </div>
        </div>
    </div>
</header>
