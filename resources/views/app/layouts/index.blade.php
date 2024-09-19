<!DOCTYPE html>
<html lang="en">
<!--begin::Head-->

<head>
    <base href="" />
    <title>BPFK SPT </title>
    <meta charset="utf-8" />
    <meta name="description" content="The m es for free." />
    <meta name="keywords" content="metronic, laticon" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    @include('app.layouts._css')

</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_body" data-bs-spy="scroll" data-bs-target="#kt_landing_menu" class="bg-body position-relative app-blank">
    <!--begin::Theme mode setup on page load-->
    <script>
        var defaultThemeMode = "light";
        var themeMode;
        if (document.documentElement) {
            if (document.documentElement.hasAttribute("data-bs-theme-mode")) {
                themeMode = document.documentElement.getAttribute("data-bs-theme-mode");
            } else {
                if (localStorage.getItem("data-bs-theme") !== null) {
                    themeMode = localStorage.getItem("data-bs-theme");
                } else {
                    themeMode = defaultThemeMode;
                }
            }
            if (themeMode === "system") {
                themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light";
            }
            document.documentElement.setAttribute("data-bs-theme", themeMode);
        }
    </script>

    <!--end::Theme mode setup on page load-->
    <!--begin::Root-->
    <div class="d-flex flex-column flex-root" id="kt_app_root">
       
        @include('app.layouts.header')


        <!--begin::Content-->
        @yield('content')
        <!--end::Content-->

        @include('app.layouts.footer')


        <!--begin::Scrolltop-->
        <div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
            <i class="ki-duotone ki-arrow-up">
                <span class="path1"></span>
                <span class="path2"></span>
            </i>
        </div>
        <!--end::Scrolltop-->
    </div>
    <!--end::Root-->
    <!--begin::Scrolltop-->
    <div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
        <i class="ki-duotone ki-arrow-up">
            <span class="path1"></span>
            <span class="path2"></span>
        </i>
    </div>
    <!--end::Scrolltop-->
    <!--begin::Javascript-->
    @include('app.layouts._js')


</body>
<!--end::Body-->

</html>
