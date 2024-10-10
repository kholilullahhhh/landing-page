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
                    <img src="{{ url('uploads/' ) }}" alt=""
                        class="img-thumbnail" />
                    <!--end::Aside header-->
                </div>
            </div>
            <!-- login-content -->
            <div
                class="flex-row-fluid d-flex flex-column justify-content-center position-relative overflow-hidden p-7 mx-auto">
                <!--begin::Content body-->
                <div class="d-flex flex-column-fluid flex-center">
                    <!--begin::Signin-->
                    <div class="login-form login-signin">
                        <!--begin::Form-->
                        <form class="form" novalidate="novalidate" id="kt_login_signin_form">
                            <!--begin::Title-->
                            <div class="pb-13 pt-lg-0 pt-5">
                                <h3
                                    class="font-weight-bolder text-dark mb-lg-25 font-size-h4 font-size-h1-lg text-center">
                                        Private Class Payment<br />
                                </h3>
                                <div class="pb-lg-0 pb-5 mb-5">
                                    <button 
                                        class="btn  btn-lg btn-block text-light font-weight-bolder font-size-h6"
                                        style="background: linear-gradient(to right, #3ab7ff, #8224e3)"
                                        id="pay-button">Bayar Sekarang</button>
                                </div>
                            </div>
                            <!--begin::Title-->
                        </form>
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

    <script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="{{ env('MIDTRANS_CLIENT_KEY') }}"></script>
    <script type="text/javascript">
        document.getElementById('pay-button').onclick = function () {
            snap.pay('{{ $data->snap_token }}', {
                onSuccess: function(result) {
                    console.log(result);
                },
                onPending: function(result) {
                    console.log(result);
                },
                onError: function(result) {
                    console.log(result);
                }
            });
        };
    </script>

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