<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>กรมควบคุมมลพิษ | Top Navigation</title>

    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,1,0" />
    <link rel="stylesheet" href="{{ asset('assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/site.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Noto+Sans+Thai">
    <style>
        html, body {
            height: 100%;
            font-family: "Noto Sans Thai","Nunito", sans-serif !important;
        }
    </style>

<body class="d-flex flex-column" style="height: 100vh;">
        <nav class="main-header navbar navbar-expand-md bg-white" style="padding: 12px 0;">
            <div class="container-fluid px-3">
                <a href="{{route('home')}}" class="navbar-brand"><img src="{{ asset('science_service_logo.png') }}" height="32" alt="website logo"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#navbarOffcanvas" aria-controls="navbarOffcanvasLg" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                {{-- <span class="brand-text font-weight-light">ผู้ใช้: {{Auth::user()->name}}
                    {{Auth::user()->lastname}} ({{Auth::user()->user_position->name}})</span> --}}
                {{-- <button class="navbar-toggler order-1" type="button" data-toggle="collapse"
                    data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button> --}}

                <div class="offcanvas offcanvas-end" tabindex="-1" id="navbarOffcanvas" aria-labelledby="offcanvas-brand">
                    <div class="offcanvas-header">
                      <h5 class="offcanvas-title" id="offcanvas-brand"><img src="{{ asset('science_service_logo.png') }}" height="32" alt="website logo"></h5>
                      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body justify-content-end">
                    <ul class="navbar-nav gap-3">
                        <li>
                            <p class="text-md-end m-0">{{Auth::user()->name}} {{Auth::user()->lastname}}</p>
                            {{-- <p class="text-md-end m-0 text-muted" style="font-size: 12px">{{Auth::user()->user_position->name}}</p> --}}
                        </li>
                        <li class="d-flex gap-3">
                            <img src="{{ Auth::user()->avatar != "" ? route('storage.avatar', ['image'=> Auth::user()->avatar]) : asset('user_test.png') }}" class="rounded-circle" width="40px" height="40px" alt="avatar">
                            <a href="{{ route('logout') }}"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                class="btn btn-outline-secondary p-0 d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                    <mask id="mask0_114_445" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="20" height="20">
                                    <rect width="20" height="20" fill="#D9D9D9"/>
                                    </mask>
                                    <g mask="url(#mask0_114_445)">
                                    <path d="M9.02085 9.89583V2.875C9.02085 2.59722 9.1146 2.36111 9.3021 2.16667C9.4896 1.97222 9.72224 1.875 10 1.875C10.2778 1.875 10.5104 1.97222 10.6979 2.16667C10.8854 2.36111 10.9792 2.59722 10.9792 2.875V9.89583C10.9792 10.1736 10.8854 10.4062 10.6979 10.5938C10.5104 10.7812 10.2778 10.875 10 10.875C9.72224 10.875 9.4896 10.7812 9.3021 10.5938C9.1146 10.4062 9.02085 10.1736 9.02085 9.89583ZM10 18.0625C8.88891 18.0625 7.84724 17.8542 6.87502 17.4375C5.9028 17.0208 5.0521 16.4479 4.32294 15.7188C3.59377 14.9896 3.02085 14.1389 2.60419 13.1667C2.18752 12.1944 1.97919 11.1528 1.97919 10.0417C1.97919 9.05556 2.14585 8.12153 2.47919 7.23958C2.81252 6.35764 3.31252 5.55556 3.97919 4.83333C4.17363 4.59722 4.42016 4.46875 4.71877 4.44792C5.01738 4.42708 5.2778 4.52083 5.50002 4.72917C5.69446 4.92361 5.78474 5.15625 5.77085 5.42708C5.75697 5.69792 5.66669 5.9375 5.50002 6.14583C4.97224 6.6875 4.57988 7.2882 4.32294 7.94792C4.06599 8.60764 3.93752 9.30556 3.93752 10.0417C3.93752 11.7222 4.5278 13.1528 5.70835 14.3333C6.88891 15.5139 8.31947 16.1042 10 16.1042C11.6806 16.1042 13.1111 15.5139 14.2917 14.3333C15.4722 13.1528 16.0625 11.7222 16.0625 10.0417C16.0625 9.29167 15.9306 8.59028 15.6667 7.9375C15.4028 7.28472 15.0278 6.6875 14.5417 6.14583C14.3611 5.92361 14.2604 5.66667 14.2396 5.375C14.2188 5.08333 14.3056 4.84722 14.5 4.66667C14.7222 4.44444 14.9861 4.34722 15.2917 4.375C15.5972 4.40278 15.8542 4.53472 16.0625 4.77083C16.7014 5.50694 17.191 6.32292 17.5313 7.21875C17.8715 8.11458 18.0417 9.05556 18.0417 10.0417C18.0417 11.1528 17.8299 12.1944 17.4063 13.1667C16.9827 14.1389 16.4063 14.9896 15.6771 15.7188C14.9479 16.4479 14.0972 17.0208 13.125 17.4375C12.1528 17.8542 11.1111 18.0625 10 18.0625Z" fill="#101828"/>
                                    </g>
                                </svg>
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
            </div>
        </nav>

        <div class="content-wrapper flex-grow-1">
            <div class="content-header">
                <div class="container">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            {{-- Authorized Group --}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="content">

                @yield('content')
            </div>
        </div>
        @include('layouts.footer')
</body>

<script src="{{ asset('assets/plugins/jquery/jquery.min.js') }}"></script>

<script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>


</html>
