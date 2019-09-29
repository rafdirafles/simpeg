<!DOCTYPE html>
<html lang="en" >
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
        <meta charset="utf-8"/>
        <title>Simpeg | Dashboard</title>
        <meta name="description" content="Latest updates and statistic charts">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!--begin::Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700">
        <!--end::Fonts -->
        <!--begin::Page Vendors Styles(used by this page) -->
        {{-- <link href="{{ ('template/assets/plugins/custom/fullcalendar/fullcalendar.bundle.css')}}" rel="stylesheet" type="text/css" /> --}}
        <!--end::Page Vendors Styles -->
        <!--begin::Global Theme Styles(used by all pages) -->
            <link href="{{ asset('template/assets/plugins/global/plugins.bundle.css')}}" rel="stylesheet" type="text/css" />
            <link href="{{ asset('template/assets/css/style.bundle.css')}}" rel="stylesheet" type="text/css" />
        <!--end::Global Theme Styles -->
        <link rel="shortcut icon" href="{{ asset('template/assets/media/logos/favicon.ico')}}" />
        <link href="{{ asset('template/assets/plugins/custom/datatables/datatables.bundle.css')}}" rel="stylesheet" type="text/css" />

        @yield('asset-top')

    </head>
    <!-- end::Head -->
    <!-- begin::Body -->
    <body  class="kt-offcanvas-panel--right kt-header--fixed kt-header--minimize-topbar kt-header-mobile--fixed kt-subheader--enabled kt-subheader--transparent kt-page--loading"  >
    <div id="kt_header_mobile" class="kt-header-mobile  kt-header-mobile--fixed " >
        <div class="kt-header-mobile__logo">
            <a href="index.html">
                <img alt="Logo" src="{{ asset('template/assets/media/logos/logoakpol2.png')}}"/>
            </a>
        </div>
        <div class="kt-header__brand   kt-grid__item" id="kt_header_brand">
            <div class="kt-header--fixed">
                <h3 style="color: black; margin-left:4%">SISTEM INFORMASI KEPEGAWAIAN</h3>
            </div>
        </div>
        <div class="kt-header-mobile__toolbar">
            <button class="kt-header-mobile__toolbar-toggler" id="kt_header_mobile_toggler"><span></span></button>
            <button class="kt-header-mobile__toolbar-topbar-toggler" id="kt_header_mobile_topbar_toggler"><i class="flaticon-more-1"></i></button>
        </div>
    </div>
<!-- end:: Header Mobile -->
	<div class="kt-grid kt-grid--hor kt-grid--root">
		<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">
			<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper" id="kt_wrapper">

<!-- begin:: Header -->
<div id="kt_header" class="kt-header  kt-header--fixed " data-ktheader-minimize="on" >
	<div class="kt-header__top">
		<div class="kt-container ">

            <div class="kt-header__brand kt-grid__item" id="kt_header_brand">
                <div class="kt-header__brand-logo">
                    <a href="index.html">
                        <img alt="Logo"  src="{{ asset('template/assets/media/logos/logoakpol1.png')}}" class="kt-header__brand-logo-default"/>
                        <img alt="Logo"  src="{{ asset('template/assets/media/logos/logoakpol2.png')}}" class="kt-header__brand-logo-sticky"/>
                    </a>
                </div>
                <span style="margin-left: 30px"></span>
                <div class="kt-header__topbar">
                    <h1 style="color: white;">SISTEM INFORMASI KEPEGAWAIAN  </h1>
                </div>
            </div>

            <!-- end:: Brand -->

            <div class="kt-header__topbar">
                <!--begin: Search
                <div class="kt-header__topbar-item kt-header__topbar-item--search dropdown kt-hidden-desktop" id="kt_quick_search_toggle">
                    <div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="10px,10px">
                        <span class="kt-header__topbar-icon">
                            <i class="flaticon2-search-1"></i>
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--info">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24"/>
                                    <path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
                                    <path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" fill="#000000" fill-rule="nonzero"/>
                                </g>
                            </svg>
                        </span>
                    </div>
                    <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-lg">
                        <div class="kt-quick-search kt-quick-search--dropdown kt-quick-search--result-compact" id="kt_quick_search_dropdown">
                            <form method="get" class="kt-quick-search__form">
                                <div class="input-group">
                                    <div class="input-group-prepend"><span class="input-group-text"><i class="flaticon2-search-1"></i></span></div>
                                        <input type="text" class="form-control kt-quick-search__input" style="color: yellow" placeholder="Search...">
                                        <div class="input-group-append"><span class="input-group-text"><i class="la la-close kt-quick-search__close"></i></span></div>
                                </div>
                            </form>
                            <div class="kt-quick-search__wrapper kt-scroll" data-scroll="true" data-height="325" data-mobile-height="200"></div>
                        </div>
                    </div>
                </div>
                <end: Search -->
                <div class="kt-header__topbar-item kt-header__topbar-item--quick-panel" data-toggle="kt-tooltip" title="Quick panel" data-placement="left">
                    <div class="kt-header__topbar-wrapper"></div>
                </div>

                <!--begin: User bar -->
                <div class="kt-header__topbar-item kt-header__topbar-item--user">
                    <div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="10px,10px" aria-expanded="false">
                        <span class="kt-header__topbar-welcome">Hi,</span>
                    <span class="kt-header__topbar-username">{{auth::user()->nama_pegawai}}</span>
                        <img class="kt-hidden" alt="Pic" src="{{ asset('template/assets/media/users/300_21.jpg')}}">

                        <!--use below badge element instead the user avatar to display username's first letter(remove kt-hidden class to display it) -->
                        <span class="kt-badge kt-badge--username kt-badge--unified-success kt-badge--lg kt-badge--rounded kt-badge--bold kt-hidden-">S</span>
                    </div>
                    <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-xl">
                        <!--begin: Head -->
                <div class="kt-user-card kt-user-card--skin-dark kt-notification-item-padding-x" style="background-color: white"><!--background-image: url(/assets/media/misc/bg-1.jpg)-->
                    <div class="kt-user-card__avatar">
                        <img class="kt-hidden" alt="Pic" src="{{ asset('template/assets/media/users/300_25.jpg')}}" />
                        <!--use below badge element instead the user avatar to display username's first letter(remove kt-hidden class to display it) -->
                        <span class="kt-badge kt-badge--lg kt-badge--rounded kt-badge--bold kt-font-success">S</span>
                    </div>
                    <div class="kt-user-card__name">
                        {{auth::user()->nama_pegawai}}
                    </div>
                </div>
            <!--end: Head -->
                        <div class="kt-notification">
                            <a href="{{route('profile.index')}}" class="kt-notification__item">
                                <div class="kt-notification__item-icon">
                                    <i class="flaticon2-calendar-3 kt-font-success"></i>
                                </div>
                                <div class="kt-notification__item-details">
                                    <div class="kt-notification__item-title kt-font-bold">My Profile</div>
                                </div>
                            </a>
                            <div class="kt-notification__custom kt-valign-middle">
                                <a href="custom/user/login-v2.html" target="_blank" class="btn btn-label btn-label-brand btn-sm btn-bold" >Sign Out</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
		</div>
	</div>

<!-- begin: Header Menu -->
    <div class="kt-header__bottom">
        <div class="kt-container ">
            <button class="kt-header-menu-wrapper-close" id="kt_header_menu_mobile_close_btn"><i class="la la-close"></i></button>
                <!--Bagian Navbar-->
                <div class="kt-header-menu-wrapper" id="kt_header_menu_wrapper">
                    <div id="kt_header_menu" class="kt-header-menu kt-header-menu-mobile "  >
                        <ul class="kt-menu__nav ">
                            <li class="kt-menu__item {{Request::path() =='home' ?  'kt-menu__item--here' : ''}} kt-menu__item--rel"  data-ktmenu-submenu-toggle="click" aria-haspopup="true"> <!--Class Asli Dashboard kt-menu__item  kt-menu__item--open kt-menu__item--here kt-menu__item--submenu kt-menu__item--rel kt-menu__item--open kt-menu__item--here-->
                            <a  href="{{route('home')}}" class="kt-menu__link kt-menu">
                                    <span class="kt-menu__link-text">Dashboard</span>
                                </a>
                            </li>
                            <li class="kt-menu__item  kt-menu__item--rel  {{Request::path() =='master' ?  'kt-menu__item--here' : ''}} " data-ktmenu-submenu-toggle="click" aria-haspopup="true">
                            <a href="{{route('master.index')}}" class="kt-menu__link  kt-menu__item--here">
                                    <span class="kt-menu__link-text">Master</span>
                                  <!--  <i class="kt-menu__ver-arrow la la-angle-right"></i> -->
                                </a>
                            </li>
                            <!--class admin adalah kt-menu__item  kt-menu__item--submenu kt-menu__item--rel// -->
                            <li class="kt-menu__item  kt-menu__item--submenu kt-menu__item--rel  {{Request::path() =='setting/divisi' || 'setting/unit_kerja' ?  'kt-menu__item--here' : ''}}"  data-ktmenu-submenu-toggle="click" aria-haspopup="true">
                                <a  href="javascript:;" class="kt-menu__link kt-menu__toggle">
                                    <span class="kt-menu__link-text">Setting</span>
                                    <i class="kt-menu__ver-arrow la la-angle-right"></i>
                                </a>
                                <div class="kt-menu__submenu kt-menu__submenu--classic kt-menu__submenu--left">
                                    <ul class="kt-menu__subnav">
                                        <li class="kt-menu__item  kt-menu__item--submenu"   data-ktmenu-submenu-toggle="hover" aria-haspopup="true">
                                        <a  href="{{route('divisi.index')}}" class="kt-menu__link kt-menu">
                                                <span class="kt-menu__link-icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24" height="24"/>
                                                            <path d="M5,3 L6,3 C6.55228475,3 7,3.44771525 7,4 L7,20 C7,20.5522847 6.55228475,21 6,21 L5,21 C4.44771525,21 4,20.5522847 4,20 L4,4 C4,3.44771525 4.44771525,3 5,3 Z M10,3 L11,3 C11.5522847,3 12,3.44771525 12,4 L12,20 C12,20.5522847 11.5522847,21 11,21 L10,21 C9.44771525,21 9,20.5522847 9,20 L9,4 C9,3.44771525 9.44771525,3 10,3 Z" fill="#000000"/>
                                                            <rect fill="#000000" opacity="0.3" transform="translate(17.825568, 11.945519) rotate(-19.000000) translate(-17.825568, -11.945519) " x="16.3255682" y="2.94551858" width="3" height="18" rx="1"/>
                                                        </g>
                                                    </svg>
                                                </span>
                                                <span class="kt-menu__link-text">Devisi</span>
                                            </a>
                                        </li>
                                        <li class="kt-menu__item  kt-menu__item--submenu"  data-ktmenu-submenu-toggle="hover" aria-haspopup="true">
                                                <a  href="javascript:;" class="kt-menu__link kt-menu__toggle">
                                                    <span class="kt-menu__link-icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
                                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                <rect x="0" y="0" width="24" height="24"/>
                                                                <path d="M3.5,21 L20.5,21 C21.3284271,21 22,20.3284271 22,19.5 L22,8.5 C22,7.67157288 21.3284271,7 20.5,7 L10,7 L7.43933983,4.43933983 C7.15803526,4.15803526 6.77650439,4 6.37867966,4 L3.5,4 C2.67157288,4 2,4.67157288 2,5.5 L2,19.5 C2,20.3284271 2.67157288,21 3.5,21 Z" fill="#000000" opacity="0.3"/>
                                                            </g>
                                                        </svg>
                                                    </span>
                                                    <span class="kt-menu__link-text">File Upload</span>
                                                        <i class="kt-menu__hor-arrow la la-angle-right"></i>
                                                        <i class="kt-menu__ver-arrow la la-angle-right"></i>
                                                </a>
                                            <div class="kt-menu__submenu kt-menu__submenu--classic kt-menu__submenu--right">
                                                <ul class="kt-menu__subnav">
                                                        <li class="kt-menu__item "  aria-haspopup="true">
                                                            <a  href="crud/file-upload/dropzonejs.html" class="kt-menu__link ">
                                                                <i class="kt-menu__link-bullet kt-menu__link-bullet--dot">
                                                                <span></span>
                                                                </i>
                                                                <span class="kt-menu__link-text">DropzoneJS</span>
                                                            </a>
                                                        </li>
                                                    <li class="kt-menu__item "  aria-haspopup="true">
                                                        <a  href="crud/file-upload/uppy.html" class="kt-menu__link ">
                                                            <i class="kt-menu__link-bullet kt-menu__link-bullet--dot">
                                                            <span></span>
                                                            </i>
                                                            <span class="kt-menu__link-text">Uppy</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="kt-menu__item  kt-menu__item--submenu kt-menu__item--rel"  data-ktmenu-submenu-toggle="click" aria-haspopup="true">
                                <a href="javascript:;" class="kt-menu__link kt-menu__toggle">
                                    <span class="kt-menu__link-text">Pegawai</span>
                                    <i class="kt-menu__ver-arrow la la-angle-right"></i>
                                </a>
                                <div class="kt-menu__submenu kt-menu__submenu--classic kt-menu__submenu--left">
                                    <ul class="kt-menu__subnav">
                                        <li class="kt-menu__item  kt-menu__item--submenu"  data-ktmenu-submenu-toggle="hover" aria-haspopup="true">
                                            <a  href="javascript:;" class="kt-menu__link kt-menu__toggle">
                                                <span class="kt-menu__link-icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                            <polygon points="0 0 24 0 24 24 0 24"/>
                                                            <path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
                                                            <path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z" fill="#000000" fill-rule="nonzero"/>
                                                        </g>
                                                    </svg>
                                                </span>
                                                <span class="kt-menu__link-text ">POLRI</span>
                                                   <!-- <i class="kt-menu__hor-arrow la la-angle-right"></i>
                                                    <i class="kt-menu__ver-arrow la la-angle-right"></i>  -->
                                            </a>
                                        </li>
                                        <li class="kt-menu__item  kt-menu__item--submenu"  data-ktmenu-submenu-toggle="hover" aria-haspopup="true">
                                            <a  href="javascript:;" class="kt-menu__link kt-menu__toggle">
                                                <span class="kt-menu__link-icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                            <polygon points="0 0 24 0 24 24 0 24"/>
                                                            <path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
                                                            <path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z" fill="#000000" fill-rule="nonzero"/>
                                                        </g>
                                                    </svg>
                                                </span>
                                                <span class="kt-menu__link-text">PNS</span>
                                                   <!-- <i class="kt-menu__hor-arrow la la-angle-right"></i>
                                                    <i class="kt-menu__ver-arrow la la-angle-right"></i>  -->
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="kt-menu__item  kt-menu__item--submenu kt-menu__item--rel"  data-ktmenu-submenu-toggle="click" aria-haspopup="true">
                                <a href="javascript:;" class="kt-menu__link kt-menu__toggle">
                                    <span class="kt-menu__link-text">Absen</span>
                                    <i class="kt-menu__ver-arrow la la-angle-right"></i>
                                </a>
                                <div class="kt-menu__submenu kt-menu__submenu--classic kt-menu__submenu--left">
                                    <ul class="kt-menu__subnav">
                                        <li class="kt-menu__item  kt-menu__item--submenu"  data-ktmenu-submenu-toggle="hover" aria-haspopup="true">
                                            <a  href="javascript:;" class="kt-menu__link kt-menu__toggle">
                                                <span class="kt-menu__link-icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24" height="24"/>
                                                            <circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10"/>
                                                            <rect fill="#000000" x="11" y="10" width="2" height="7" rx="1"/>
                                                            <rect fill="#000000" x="11" y="7" width="2" height="2" rx="1"/>
                                                        </g>
                                                    </svg>
                                                </span>
                                                <span class="kt-menu__link-text">Izin</span>
                                                 <!--   <i class="kt-menu__hor-arrow la la-angle-right"></i>
                                                    <i class="kt-menu__ver-arrow la la-angle-right"></i>   -->
                                            </a>
                                        </li>
                                        <li class="kt-menu__item  kt-menu__item--submenu"  data-ktmenu-submenu-toggle="hover" aria-haspopup="true">
                                            <a  href="javascript:;" class="kt-menu__link kt-menu__toggle">
                                                <span class="kt-menu__link-icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24" height="24"/>
                                                            <circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10"/>
                                                            <path d="M12.4208204,17.1583592 L15.4572949,11.0854102 C15.6425368,10.7149263 15.4923686,10.2644215 15.1218847,10.0791796 C15.0177431,10.0271088 14.9029083,10 14.7864745,10 L12,10 L12,7.17705098 C12,6.76283742 11.6642136,6.42705098 11.25,6.42705098 C10.965921,6.42705098 10.7062236,6.58755277 10.5791796,6.84164079 L7.5427051,12.9145898 C7.35746316,13.2850737 7.50763142,13.7355785 7.87811529,13.9208204 C7.98225687,13.9728912 8.09709167,14 8.21352549,14 L11,14 L11,16.822949 C11,17.2371626 11.3357864,17.572949 11.75,17.572949 C12.034079,17.572949 12.2937764,17.4124472 12.4208204,17.1583592 Z" fill="#000000"/>
                                                        </g>
                                                    </svg>
                                                </span>
                                                <span class="kt-menu__link-text">Cuti</span>
                                                  <!--  <i class="kt-menu__hor-arrow la la-angle-right"></i>
                                                    <i class="kt-menu__ver-arrow la la-angle-right"></i> -->
                                            </a>
                                        </li>
                                        <li class="kt-menu__item  kt-menu__item--submenu"  data-ktmenu-submenu-toggle="hover" aria-haspopup="true">
                                            <a  href="javascript:;" class="kt-menu__link kt-menu__toggle">
                                                <span class="kt-menu__link-icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24" height="24"/>
                                                            <circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10"/>
                                                            <rect fill="#000000" x="11" y="7" width="2" height="8" rx="1"/>
                                                            <rect fill="#000000" x="11" y="16" width="2" height="2" rx="1"/>
                                                        </g>
                                                    </svg>
                                                </span>
                                                <span class="kt-menu__link-text">Piket</span>
                                                <!--    <i class="kt-menu__hor-arrow la la-angle-right"></i>
                                                    <i class="kt-menu__ver-arrow la la-angle-right"></i>   -->
                                            </a>
                                        </li>
                                        <li class="kt-menu__item  kt-menu__item--submenu"  data-ktmenu-submenu-toggle="hover" aria-haspopup="true">
                                            <a  href="javascript:;" class="kt-menu__link kt-menu__toggle">
                                                <span class="kt-menu__link-icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24" height="24"/>
                                                            <circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10"/>
                                                            <path d="M12.0355339,10.6213203 L14.863961,7.79289322 C15.2544853,7.40236893 15.8876503,7.40236893 16.2781746,7.79289322 C16.6686989,8.18341751 16.6686989,8.81658249 16.2781746,9.20710678 L13.4497475,12.0355339 L16.2781746,14.863961 C16.6686989,15.2544853 16.6686989,15.8876503 16.2781746,16.2781746 C15.8876503,16.6686989 15.2544853,16.6686989 14.863961,16.2781746 L12.0355339,13.4497475 L9.20710678,16.2781746 C8.81658249,16.6686989 8.18341751,16.6686989 7.79289322,16.2781746 C7.40236893,15.8876503 7.40236893,15.2544853 7.79289322,14.863961 L10.6213203,12.0355339 L7.79289322,9.20710678 C7.40236893,8.81658249 7.40236893,8.18341751 7.79289322,7.79289322 C8.18341751,7.40236893 8.81658249,7.40236893 9.20710678,7.79289322 L12.0355339,10.6213203 Z" fill="#000000"/>
                                                        </g>
                                                    </svg>
                                                </span>
                                                <span class="kt-menu__link-text">Absen</span>
                                                  <!--  <i class="kt-menu__hor-arrow la la-angle-right"></i>
                                                    <i class="kt-menu__ver-arrow la la-angle-right"></i>   -->
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="kt-menu__item  kt-menu__item--submenu kt-menu__item--rel"  data-ktmenu-submenu-toggle="click" aria-haspopup="true">
                                <a href="javascript:;" class="kt-menu__link kt-menu__toggle">
                                    <span class="kt-menu__link-text">Laporan</span>
                                    <i class="kt-menu__ver-arrow la la-angle-right"></i>
                                </a>
                                <div class="kt-menu__submenu kt-menu__submenu--classic kt-menu__submenu--left">
                                    <ul class="kt-menu__subnav">
                                        <li class="kt-menu__item  kt-menu__item--submenu"  data-ktmenu-submenu-toggle="hover" aria-haspopup="true">
                                            <a  href="javascript:;" class="kt-menu__link kt-menu__toggle">
                                                <span class="kt-menu__link-icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                            <polygon points="0 0 24 0 24 24 0 24"/>
                                                            <path d="M4.85714286,1 L11.7364114,1 C12.0910962,1 12.4343066,1.12568431 12.7051108,1.35473959 L17.4686994,5.3839416 C17.8056532,5.66894833 18,6.08787823 18,6.52920201 L18,19.0833333 C18,20.8738751 17.9795521,21 16.1428571,21 L4.85714286,21 C3.02044787,21 3,20.8738751 3,19.0833333 L3,2.91666667 C3,1.12612489 3.02044787,1 4.85714286,1 Z M8,12 C7.44771525,12 7,12.4477153 7,13 C7,13.5522847 7.44771525,14 8,14 L15,14 C15.5522847,14 16,13.5522847 16,13 C16,12.4477153 15.5522847,12 15,12 L8,12 Z M8,16 C7.44771525,16 7,16.4477153 7,17 C7,17.5522847 7.44771525,18 8,18 L11,18 C11.5522847,18 12,17.5522847 12,17 C12,16.4477153 11.5522847,16 11,16 L8,16 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
                                                            <path d="M6.85714286,3 L14.7364114,3 C15.0910962,3 15.4343066,3.12568431 15.7051108,3.35473959 L20.4686994,7.3839416 C20.8056532,7.66894833 21,8.08787823 21,8.52920201 L21,21.0833333 C21,22.8738751 20.9795521,23 19.1428571,23 L6.85714286,23 C5.02044787,23 5,22.8738751 5,21.0833333 L5,4.91666667 C5,3.12612489 5.02044787,3 6.85714286,3 Z M8,12 C7.44771525,12 7,12.4477153 7,13 C7,13.5522847 7.44771525,14 8,14 L15,14 C15.5522847,14 16,13.5522847 16,13 C16,12.4477153 15.5522847,12 15,12 L8,12 Z M8,16 C7.44771525,16 7,16.4477153 7,17 C7,17.5522847 7.44771525,18 8,18 L11,18 C11.5522847,18 12,17.5522847 12,17 C12,16.4477153 11.5522847,16 11,16 L8,16 Z" fill="#000000" fill-rule="nonzero"/>
                                                        </g>
                                                    </svg>
                                                </span>
                                                <span class="kt-menu__link-text">Absen</span>
                                                 <!--   <i class="kt-menu__hor-arrow la la-angle-right"></i>
                                                    <i class="kt-menu__ver-arrow la la-angle-right"></i>   -->
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <!--Bagan Search Toolbar
                    <div class="kt-header-toolbar">
                        <div class="kt-quick-search kt-quick-search--inline kt-quick-search--result-compact" id="kt_quick_search_inline">
                            <form method="get" class="kt-quick-search__form">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="flaticon2-search-1"></i>
                                        </span>
                                    </div>
                                <input type="text" class="form-control kt-quick-search__input" placeholder="Search...">
                                <div class="input-group-append">
                                    <span class="input-group-text">
                                        <i class="la la-close kt-quick-search__close" style="display: none;"></i>
                                    </span>
                                </div>
                                </div>
                            </form>
                            <div id="kt_quick_search_toggle" data-toggle="dropdown" data-offset="0px,10px"></div>
                                <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-lg">
                                    <div class="kt-quick-search__wrapper kt-scroll" data-scroll="true" data-height="300" data-mobile-height="200"></div>
                                </div>
                        </div>
                    </div> End Search Toolbar-->
                </div>
        </div>
    </div>
</div>
<!-- end:: Header -->
<div class="kt-subheader   kt-grid__item" id="kt_subheader">
</div>
<br>
{{-- begin body --}}
	<div class="kt-body kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-grid--stretch" id="kt_body">
        @yield('body')

    </div>
{{-- end body --}}
<!-- begin:: Footer -->
<div class="kt-footer  kt-footer--extended  kt-grid__item" id="kt_footer">
	<div class="kt-footer__bottom">
	    <div class="kt-container ">
			<div class="kt-footer__wrapper">
				<div class="kt-footer__logo">
					<a href="index.html">
						<img alt="Logo" src="{{ asset('template/assets/media/logos/logoakpol2.png')}}">
					</a>
				    <div class="kt-footer__copyright" style="color: black">
					    2019&nbsp;&copy;&nbsp;
					    <a href="http://keenthemes.com/metronic" target="_blank">AKPOL BY SIAK</a>
				    </div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- end:: Footer -->
            </div>
		</div>
	</div>

<!-- begin::Scrolltop -->
<div id="kt_scrolltop" class="kt-scrolltop">
		<i class="fa fa-arrow-up"></i>
</div>
</body>
<!-- end::Scrolltop -->

        <!-- begin::Global Config(global config for global JS sciprts) -->
        <script>
            var KTAppOptions = {"colors":{"state":{"brand":"#374afb","light":"#ffffff","dark":"#282a3c","primary":"#5867dd","success":"#34bfa3","info":"#36a3f7","warning":"#ffb822","danger":"#fd3995"},"base":{"label":["#c5cbe3","#a1a8c3","#3d4465","#3e4466"],"shape":["#f0f3ff","#d9dffa","#afb4d4","#646c9a"]}}};
        </script>
        <!-- end::Global Config -->

    	<!--begin::Global Theme Bundle(used by all pages) -->
    	    	   <script src="{{ asset('template/assets/plugins/global/plugins.bundle.js')}}" type="text/javascript"></script>
		    	   <script src="{{ asset('template/assets/js/scripts.bundle.js')}}" type="text/javascript"></script>
				<!--end::Global Theme Bundle -->

                    <!--begin::Page Vendors(used by this page) -->
                            {{-- <script src="{{ asset('template/assets/plugins/custom/fullcalendar/fullcalendar.bundle.js')}}" type="text/javascript"></script> --}}
                            {{-- <script src="http://maps.google.com/maps/api/js?key=AIzaSyBTGnKT7dt597vo9QgeQ7BFhvSRP4eiMSM" type="text/javascript"></script> --}}
                            {{-- <script src="{{ asset('template/assets/plugins/custom/gmaps/gmaps.js')}}" type="text/javascript"></script> --}}
                        <!--end::Page Vendors -->

                    <!--begin::Page Scripts(used by this page) -->
                            <script src="{{ asset('template/assets/js/pages/dashboard.js')}}" type="text/javascript"></script>
                        <!--end::Page Scripts -->

            @yield('asset-buttom')

    <!-- end::Body -->
    <script>
        $(document).ready(function(){
            $("ul li").on("click",function(){
            $("li").removeClass("kt-menu__item--here");
            $(this).addClass("kt-menu__item--here");
        });

        });
    </script>
<!-- Mirrored from keenthemes.com/metronic/preview/demo2/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 19 Sep 2019 06:32:28 GMT -->
</html>
