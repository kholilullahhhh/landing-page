<!DOCTYPE html>
<html lang="en">

<head>
    <base href="../../../" />
    <meta charset="utf-8" />
    <title>Pendaftaran Privat Class - Dipanegara Computer Club</title>
    <meta name="description" content="Private Class 2023" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!--begin::Fonts-->
    <link rel="icon" href="https://dcc-dp.org/public/favicon.ico">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Page Custom Styles(used by this page)-->
    <link href="{{ url('platda/css/login-1.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ url('platda/css/wizard-6.css') }}" rel="stylesheet" type="text/css" />

    <!--end::Page Custom Styles-->
    <!--begin::Global Theme Styles(used by all pages)-->
    <link href="{{ url('platda/css/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ url('platda/css/prismjs.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ url('platda/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
    <!--end::Global Theme Styles-->
    <!--begin::Layout Themes(used by all pages)-->
    <link href="{{ url('platda/css/light.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ url('platda/css/light (1).css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ url('platda/css/dark.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ url('platda/css/dark (1).css') }}" rel="stylesheet" type="text/css" />
    <!--end::Layout Themes-->
</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_body"
    class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading">
    <!--begin::Main-->
    <div class="d-flex flex-column flex-root">
        <!--begin::Login-->
        <div class="login login-1 login-signin-on d-flex flex-column flex-lg-row flex-column-fluid bg-white"
            id="kt_login">
            <!--begin::Aside-->
            <div class="login-aside d-flex flex-column flex-row-auto">
                <div class="d-flex flex-column-auto flex-column">
                    <!--begin::Aside header-->
                    <img src="{{ url('uploads/'. $data->gambar ) }}" alt=""
                        class="img-thumbnail" />
                    <!--end::Aside header-->
                </div>
                {{-- <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100"
                                src="{{ url('public/public/uploads/gallery/private-class-v2.jpg') }}" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="{{ url('public/public/uploads/gallery/Pamflet (1).png') }}"
                                alt="Second slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div> --}}
                <!--begin::Aside Top-->
                {{-- <div class="d-flex flex-column-auto flex-column">
                                        <!--begin::Aside header-->
                                        <img src="{{ url('public/public/uploads/gallery/pamfetprivate.jpeg') }}" alt="" class="img-thumbnail" />
                                        <!--end::Aside header-->
                                </div> --}}
                <!--end::Aside Top-->
            </div>
            <!-- login-content -->
            <div
                class="flex-row-fluid d-flex flex-column justify-content-center position-relative overflow-hidden p-7 mx-auto">
                <!--begin::Content body-->
                <div class="d-flex flex-column-fluid flex-center">
                    <!--begin::Signin-->
                    <div class="login-form login-signin">
                        @if (session('groupLink'))
                            <div>
                                <h2>Link Grup WhatsApp:</h2>
                                <a href="{{ session('groupLink') }}">{{ session('groupLink') }}</a>
                            </div>
                        @endif
                        @if (session()->has('message'))
                            <div class="alert alert-success">
                                {{ session()->get('message') }}
                            </div>
                        @endif


                        <!--begin::Form-->
                        <form class="form" novalidate="novalidate" id="kt_login_signin_form">
                            <!--begin::Title-->
                            <div class="pb-13 pt-lg-0 pt-5">
                                <h3
                                    class="font-weight-bolder text-dark mb-lg-25 font-size-h4 font-size-h1-lg text-center">
                                    PENDAFTARAN PRIVATE CLASS MATERI {{ $data->name }}<br />
                                </h3>
                                <div class="pb-lg-0 pb-5 mb-5">
                                    <a href="javascript:;"
                                        class="btn  btn-lg btn-block text-light font-weight-bolder font-size-h6"
                                        style="background: linear-gradient(to right, #3ab7ff, #8224e3)"
                                        id="kt_login_forgot">Registrasi</a>
                                </div>
                            </div>
                            <!--begin::Title-->
                        </form>
                        <!--end::Form-->


                    </div>
                    <!--end::Signin-->
                    <!--begin::Forgot-->
                    <div class="login-form login-forgot">

                        <!--begin::Wizard 6-->
                        <div class="wizard wizard-6 d-flex flex-column flex-lg-row flex-column-fluid" id="kt_wizard">
                            <!--begin::Container-->
                            <div class="wizard-content d-flex flex-column">
                                <!--begin::Nav-->
                                <div class="d-flex flex-column-auto flex-column px-10">
                                    <!--begin: Wizard Nav-->
                                    <div
                                        class="wizard-nav pb-lg-10 pb-3 d-flex flex-column align-items-center align-items-md-start">
                                        <!--begin::Wizard Steps-->
                                        <div class="wizard-steps d-flex flex-column flex-md-row">
                                            <!--begin::Wizard Step 1 Nav-->
                                            <div class="wizard-step flex-grow-1 flex-basis-0" data-wizard-type="step"
                                                data-wizard-state="current">
                                                <div class="wizard-wrapper pr-lg-5 pr-3">
                                                    <div class="wizard-icon">
                                                        <i class="wizard-check ki ki-check"></i>
                                                        <span class="wizard-number">1</span>
                                                    </div>
                                                    <div class="wizard-label mr-3">
                                                        <h3 class="wizard-title">Data Calon Pendaftar</h3>
                                                        <div class="wizard-desc">Data details</div>
                                                    </div>
                                                    <span class="svg-icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                            height="24px" viewBox="0 0 24 24" version="1.1">
                                                            <g stroke="none" stroke-width="1" fill="none"
                                                                fill-rule="evenodd">
                                                                <polygon points="0 0 24 0 24 24 0 24" />
                                                                <rect fill="#000000" opacity="0.3"
                                                                    transform="translate(8.500000, 12.000000) rotate(-90.000000) translate(-8.500000, -12.000000)"
                                                                    x="7.5" y="7.5" width="2" height="9"
                                                                    rx="1" />
                                                                <path
                                                                    d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z"
                                                                    fill="#000000" fill-rule="nonzero"
                                                                    transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
                                                            </g>
                                                        </svg>
                                                    </span>
                                                </div>
                                            </div>
                                            <!--end::Wizard Step 1 Nav-->
                                            <!--begin::Wizard Step 2 Nav-->
                                            <!-- <div class="wizard-step flex-grow-1 flex-basis-0" data-wizard-type="step">
                                                <div class="wizard-wrapper pr-lg-5 pr-3">
                                                    <div class="wizard-icon">
                                                        <i class="wizard-check ki ki-check"></i>
                                                        <span class="wizard-number">2</span>
                                                    </div>
                                                    <div class="wizard-label mr-3">
                                                        <h3 class="wizard-title">Materi</h3>
                                                        <div class="wizard-desc">Choose Class
                                                        </div>
                                                    </div>
                                                    <span class="svg-icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                            height="24px" viewBox="0 0 24 24" version="1.1">
                                                            <g stroke="none" stroke-width="1" fill="none"
                                                                fill-rule="evenodd">
                                                                <polygon points="0 0 24 0 24 24 0 24" />
                                                                <rect fill="#000000" opacity="0.3"
                                                                    transform="translate(8.500000, 12.000000) rotate(-90.000000) translate(-8.500000, -12.000000)"
                                                                    x="7.5" y="7.5" width="2" height="9"
                                                                    rx="1" />
                                                                <path
                                                                    d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z"
                                                                    fill="#000000" fill-rule="nonzero"
                                                                    transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
                                                            </g>
                                                        </svg>
                                                    </span>
                                                </div>
                                            </div> -->
                                            <!--end::Wizard Step 2 Nav-->
                                            <!--begin::Wizard Step 3 Nav-->
                                            <div class="wizard-step flex-grow-1 flex-basis-0" data-wizard-type="step">
                                                <div class="wizard-wrapper">
                                                    <div class="wizard-icon">
                                                        <i class="wizard-check ki ki-check"></i>
                                                        <span class="wizard-number">2</span>
                                                    </div>
                                                    <div class="wizard-label">
                                                        <h3 class="wizard-title">Selesai</h3>
                                                        <div class="wizard-desc">Complete
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end::Wizard Step 3 Nav-->
                                        </div>
                                        <!--end::Wizard Steps-->
                                    </div>
                                    <!--end: Wizard Nav-->
                                </div>
                                <!--end::Nav-->
                                <!--begin::Form-->
                                <form class="px-10" novalidate="novalidate" id="kt_form"
                                    action='{{ route('store.pendaftar') }}' method="POST" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <!--begin: Wizard Step 1-->
                                    <div class="pb-5" data-wizard-type="step-content" data-wizard-state="current">

                                        <!--begin::Title-->
                                        {{-- <div class="pb-10 pb-lg-12 text-center text-md-left">
                                            <div class="text-muted font-weight-bold font-size-h4">Sudah Terdaftar?
                                                <a href="{{url('/')}}" class="text-primary font-weight-bolder">Back Home</a>
                                                                        </div>
                                                        </div> --}}
                                        <!--begin::Title-->
                                        <!--begin::Form Group-->
                                        <!--begin::Form Group-->
                                        <div class="form-group row">
                                            <input type="hidden" name="materi_id" value={{$data->id}}>
                                            <div class="col-lg-6">
                                                <label class="font-size-h6 font-weight-bolder text-dark">Nama
                                                    Lengkap</label>
                                                <input type="text"
                                                    class="form-control form-control-solid h-auto p-5 border-0 rounded-lg font-size-h6"
                                                    name="nama" placeholder="Nama Lengkap" value="" />
                                            </div>
                                            <div class="col-lg-6">
                                                <label class="font-size-h6 font-weight-bolder text-dark">Nomor
                                                    Handphone (WA)</label>
                                                <input type="text"
                                                    class="form-control form-control-solid h-auto p-5 border-0 rounded-lg font-size-h6"
                                                    name="no_hp" placeholder="Nomor Handphone" value="" />
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-6">
                                                <label class="font-size-h6 font-weight-bolder text-dark">Jenis
                                                    Kelamin</label>
                                                <select name="jkl"
                                                    class="form-control form-control-solid h-auto p-5 border-0 rounded-lg font-size-h6">
                                                    <option value="">Select</option>
                                                    <option value="L">Laki-Laki</option>
                                                    <option value="P">Perempuan</option>
                                                </select>
                                            </div>
                                            <div class="col-lg-6">
                                                <label class="font-size-h6 font-weight-bolder text-dark">Alamat</label>
                                                <input type="text"
                                                    class="form-control form-control-solid h-auto p-5 border-0 rounded-lg font-size-h6"
                                                    name="alamat" placeholder="Alamat" value="" />
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-6">
                                                <label class="font-size-h6 font-weight-bolder text-dark">Status</label>
                                                <select name="status"
                                                    class="form-control form-control-solid h-auto p-5 border-0 rounded-lg font-size-h6">
                                                    <option value="">Select</option>
                                                    <option value="umum">Umum</option>
                                                    <option value="mahasiswa">Mahasiswa</option>
                                                    <option value="siswa">Siswa</option>
                                                </select>
                                            </div>
                                            <div class="col-lg-6">
                                                <label class="font-size-h6 font-weight-bolder text-dark">
                                                    Kampus/Sekolah/Instansi</label>
                                                <input type="text"
                                                    class="form-control form-control-solid h-auto p-5 border-0 rounded-lg font-size-h6"
                                                    name="jurusan" placeholder="Asal Sekolah" value="" />
                                            </div>
                                        </div>
                                        <!--end::Form Group-->
                                    </div>
                                    <!--end: Wizard Step 1-->
                                    <!--begin: Wizard Step 2-->
                                
                                    <!--end: Wizard Step 2-->
                                    <!--begin: Wizard Step 3-->
                                    <div class="pb-5" data-wizard-type="step-content">
                                        <!--begin::Title-->
                                        <!-- <div class="pt-lg-0 pt-5 pb-15 text-center text-md-left">
                                <h3 class="font-weight-bolder text-dark font-size-h2">Complete
                                </h3>
                                <div class="text-muted font-weight-bold font-size-h4">Berhasil Mengisi Form Pendaftaran</div>
                            </div> -->
                                        <!--end::Title-->
                                        <!--begin::Section-->
                                        <h4 class="font-weight-bolder mb-3 text-center">Apakah Anda Yakin Untuk
                                            Melakukan Pendaftaran</h4>
                                        <div class="text-dark-50 font-weight-bold line-height-lg mb-8 text-center">
                                            <div>Jika Yakin Maka Tekan Submit</div>
                                        </div>
                                        <!--end::Section-->
                                    </div>
                                    <!--end: Wizard Step 3-->
                                    <!--begin: Wizard Actions-->
                                    <div class="d-flex justify-content-between">
                                        <div class="mr-2">
                                            <button type="button"
                                                class="btn btn-light-primary font-weight-bolder font-size-h6 pr-8 pl-6 py-4 my-3 mr-3"
                                                data-wizard-type="action-prev">
                                                <span class="svg-icon svg-icon-md mr-2">
                                                    <!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Left-2.svg-->
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                        height="24px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1" fill="none"
                                                            fill-rule="evenodd">
                                                            <polygon points="0 0 24 0 24 24 0 24" />
                                                            <rect fill="#000000" opacity="0.3"
                                                                transform="translate(15.000000, 12.000000) scale(-1, 1) rotate(-90.000000) translate(-15.000000, -12.000000)"
                                                                x="14" y="7" width="2" height="10"
                                                                rx="1" />
                                                            <path
                                                                d="M3.7071045,15.7071045 C3.3165802,16.0976288 2.68341522,16.0976288 2.29289093,15.7071045 C1.90236664,15.3165802 1.90236664,14.6834152 2.29289093,14.2928909 L8.29289093,8.29289093 C8.67146987,7.914312 9.28105631,7.90106637 9.67572234,8.26284357 L15.6757223,13.7628436 C16.0828413,14.136036 16.1103443,14.7686034 15.7371519,15.1757223 C15.3639594,15.5828413 14.7313921,15.6103443 14.3242731,15.2371519 L9.03007346,10.3841355 L3.7071045,15.7071045 Z"
                                                                fill="#000000" fill-rule="nonzero"
                                                                transform="translate(9.000001, 11.999997) scale(-1, -1) rotate(90.000000) translate(-9.000001, -11.999997)" />
                                                        </g>
                                                    </svg>
                                                    <!--end::Svg Icon-->
                                                </span>Previous</button>
                                        </div>
                                        <div>
                                            <button type="button"
                                                class="btn btn-primary font-weight-bolder font-size-h6 pl-8 pr-4 py-4 my-3" id="pay-button"
                                                data-wizard-type="action-submit">Submit
                                                <span class="svg-icon svg-icon-md ml-2">
                                                    <!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Right-2.svg-->
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                        height="24px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1" fill="none"
                                                            fill-rule="evenodd">
                                                            <polygon points="0 0 24 0 24 24 0 24" />
                                                            <rect fill="#000000" opacity="0.3"
                                                                transform="translate(8.500000, 12.000000) rotate(-90.000000) translate(-8.500000, -12.000000)"
                                                                x="7.5" y="7.5" width="2" height="9"
                                                                rx="1" />
                                                            <path
                                                                d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z"
                                                                fill="#000000" fill-rule="nonzero"
                                                                transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
                                                        </g>
                                                    </svg>
                                                    <!--end::Svg Icon-->
                                                </span></button>
                                            <button type="button"
                                                class="btn btn-primary font-weight-bolder font-size-h6 pl-8 pr-4 py-4 my-3"
                                                data-wizard-type="action-next">Next
                                                <span class="svg-icon svg-icon-md ml-2">
                                                    <!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Right-2.svg-->
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                        height="24px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1" fill="none"
                                                            fill-rule="evenodd">
                                                            <polygon points="0 0 24 0 24 24 0 24" />
                                                            <rect fill="#000000" opacity="0.3"
                                                                transform="translate(8.500000, 12.000000) rotate(-90.000000) translate(-8.500000, -12.000000)"
                                                                x="7.5" y="7.5" width="2" height="9"
                                                                rx="1" />
                                                            <path
                                                                d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z"
                                                                fill="#000000" fill-rule="nonzero"
                                                                transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
                                                        </g>
                                                    </svg>
                                                    <!--end::Svg Icon-->
                                                </span></button>
                                        </div>
                                    </div>
                                    <!--end: Wizard Actions-->
                                </form>
                                <!--end::Form-->
                            </div>
                            <!--end::Container-->
                        </div>
                        <!--end::Wizard 6-->
                        <!--end::Wizard-->

                        <!--end::Form-->
                    </div>

                </div>
                <!--end::Content body-->
                <!--begin::Content footer-->
                <div
                    class="
              d-flex
              justify-content-lg-start justify-content-center
              align-items-end
              py-7 py-lg-0
            ">
                    <div class="text-dark-50 font-size-lg font-weight-bolder mr-10">
                        <span class="mr-1">2023©</span>
                        <a href="http://dcc-dp.org/" target="_blank"
                            class="text-dark-75 text-hover-primary">DCC-DP</a>
                    </div>
                    <a href="#" class="text-primary font-weight-bolder font-size-lg">Terms</a>
                    <a href="#" class="text-primary ml-5 font-weight-bolder font-size-lg">Plans</a>
                    <a href="#" class="text-primary ml-5 font-weight-bolder font-size-lg">Contact Us</a>
                </div>
                <!--end::Content footer-->
            </div>
            <!--end::Content-->
        </div>
        <!--end::Login-->
    </div>
    <!--end::Main-->

    <script>
        var HOST_URL =
            "https://dev.dcc-dp.org/platda";
    </script>
    <!--begin::Global Config(global config for global JS scripts)-->
    <script>
        var KTAppSettings = {
            breakpoints: {
                sm: 576,
                md: 768,
                lg: 992,
                xl: 1200,
                xxl: 1400
            },
            colors: {
                theme: {
                    base: {
                        white: "#ffffff",
                        primary: "#3699FF",
                        secondary: "#E5EAEE",
                        success: "#1BC5BD",
                        info: "#8950FC",
                        warning: "#FFA800",
                        danger: "#F64E60",
                        light: "#E4E6EF",
                        dark: "#181C32",
                    },
                    light: {
                        white: "#ffffff",
                        primary: "#E1F0FF",
                        secondary: "#EBEDF3",
                        success: "#C9F7F5",
                        info: "#EEE5FF",
                        warning: "#FFF4DE",
                        danger: "#FFE2E5",
                        light: "#F3F6F9",
                        dark: "#D6D6E0",
                    },
                    inverse: {
                        white: "#ffffff",
                        primary: "#ffffff",
                        secondary: "#3F4254",
                        success: "#ffffff",
                        info: "#ffffff",
                        warning: "#ffffff",
                        danger: "#ffffff",
                        light: "#464E5F",
                        dark: "#ffffff",
                    },
                },
                gray: {
                    "gray-100": "#F3F6F9",
                    "gray-200": "#EBEDF3",
                    "gray-300": "#E4E6EF",
                    "gray-400": "#D1D3E0",
                    "gray-500": "#B5B5C3",
                    "gray-600": "#7E8299",
                    "gray-700": "#5E6278",
                    "gray-800": "#3F4254",
                    "gray-900": "#181C32",
                },
            },
            "font-family": "Poppins",
        };
    </script>
    <!--end::Global Config-->
    <!-- Main jQuery -->
    <script src="{{ url('platda/js/jquery.js') }}"></script>
    <!--begin::Global Theme Bundle(used by all pages)-->
    <script src="{{ url('platda/js/plugins.bundle.js') }}"></script>
    <script src="{{ url('platda/js/prismjs.bundle.js') }}"></script>
    <script src="{{ url('platda/js/scripts.bundle.js') }}"></script>
    <!--end::Global Theme Bundle-->
    <!--begin::Page Scripts(used by this page)-->
    <script src="{{ url('platda/js/login-general.js') }}"></script>
    <script src="{{ url('platda/js/wizard-7.js') }}"></script>
   
    <!--end::Page Scripts-->
</body>
<!--end::Body-->

</html>