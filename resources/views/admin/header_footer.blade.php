<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
    <meta name="author" content="AdminKit">
    <meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="shortcut icon" href="{{ asset('../images/6542310a58d708c996186d62_32.png') }}"/>

    <link rel="canonical" href="https://demo-basic.adminkit.io/" />

    <title>DvM.uz</title>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">

    <script src="https://cdn.tiny.cloud/1/xwry0cc5zqn2jx9bqoyhdjfajbam8x56l67zhi4hs184oumc/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            selector: 'textarea',
            plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount linkchecker',
            toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
        });
    </script>

</head>

<body>
<div class="wrapper">
    <nav id="sidebar" class="sidebar js-sidebar">
        <div class="sidebar-content js-simplebar">
            <a class="sidebar-brand" href="#">
                <span class="align-middle">Dehqonchilik va Melioratsiya fani elektron darsligi</span>
            </a>

            <ul class="sidebar-nav">
                <li class="sidebar-header">
                    Bo'limlar
                </li>

                <li class="sidebar-item @yield('profile')">
                    <a class="sidebar-link" href="{{ route('admin.profile') }}">
                        <i class="align-middle" data-feather="user"></i> <span class="align-middle">Profil</span>
                    </a>
                </li>

                <li class="sidebar-item @yield('articles')">
                    <a class="sidebar-link" href="{{ route('admin.view.articles') }}">
                        <i class="align-middle" data-feather="printer"></i> <span class="align-middle">Labaratoriya mashg'ulotlari</span>
                    </a>
                </li>

                <li class="sidebar-item @yield('practical')">
                    <a class="sidebar-link" href="{{ route('admin.view.pr_trainings') }}">
                        <i class="align-middle" data-feather="printer"></i> <span class="align-middle">Amaliy mashg'ulotlar</span>
                    </a>
                </li>

                <li class="sidebar-item @yield('lectures')">
                    <a class="sidebar-link" href="{{ route('admin.view.lectures') }}">
                        <i class="align-middle" data-feather="printer"></i> <span class="align-middle">Ma'ruzalar</span>
                    </a>
                </li>

                <li class="sidebar-item @yield('images')">
                    <a class="sidebar-link" href="">
                        <i class="align-middle" data-feather="printer"></i> <span class="align-middle">Images</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="{{ route('admin.logout') }}">
                        <i class="align-middle" data-feather="log-out"></i> <span class="align-middle">Chiqish</span>
                    </a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="main">
        <nav class="navbar navbar-expand navbar-light navbar-bg">
            <a class="sidebar-toggle js-sidebar-toggle">
                <i class="hamburger align-self-center"></i>
            </a>

            <div class="navbar-collapse collapse">
                <ul class="navbar-nav navbar-align">
                    <li class="nav-item dropdown">
                        <a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#" data-bs-toggle="dropdown">
                            <i class="align-middle" data-feather="settings"></i>
                        </a>

                        <a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#" data-bs-toggle="dropdown">
                            <img src="{{ asset('images/'. session('photo')) }}" class="avatar img-fluid rounded me-1" alt="user-photo" />
                            <span class="text-dark">{{ session('fullname') }}</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a class="dropdown-item" href="{{ route('admin.profile') }}"><i class="align-middle me-1" data-feather="user"></i> Profil</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{ route('admin.logout') }}">Chiqish</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>

        @yield('section')

        <footer class="footer">
            <div class="container-fluid">
                <div class="row text-muted">
                    <div class="col-6 text-start">
                        <p class="mb-0">
                            <a class="text-muted" href="https://goldapps.uz" target="_blank"><strong>Gold Apps</strong></a> - <a  target="_blank"><strong>IT company </strong></a>								&copy;
                        </p>
                    </div>
                    <div class="col-6 text-end">
                         <a  target="_blank"><strong>Dasturchi</strong> - <a style="font-weight: normal; color: midnightblue"  href="https://t.me/isacoff_11" target="_blank"><strong>Ravshanbek Isakov</strong></a></a>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</div>

<script src="{{ asset('js/app.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"
        integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/notyf@3/notyf.min.js"></script>
@yield('js')
<div class="notyf" style="justify-content: flex-start; align-items: center;"></div>
<div class="notyf-announcer" aria-atomic="true" aria-live="polite"
     style="border: 0px; clip: rect(0px, 0px, 0px, 0px); height: 1px; margin: -1px; overflow: hidden; padding: 0px; position: absolute; width: 1px; outline: 0px;">
    Inconceivable!
</div>

{{--<script>--}}
{{--    tinymce.init({--}}
{{--        selector: '#textarea'--}}
{{--    });--}}
{{--</script>--}}
{{--<script src="https://cdn.ckeditor.com/ckeditor5/41.2.0/classic/ckeditor.js"></script>--}}
{{--<script>--}}
{{--    ClassicEditor--}}
{{--        .create( document.querySelector( '#text-area' ) )--}}
{{--        .catch( error => {--}}
{{--            console.error( error );--}}
{{--        } );--}}
{{--</script>--}}
</body>

</html>
