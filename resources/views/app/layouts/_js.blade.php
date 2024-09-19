<script>
    var hostUrl = "assets/";
</script>
<!--begin::Global Javascript Bundle(mandatory for all pages)-->
<script src="{{ asset('demo/dist/assets/plugins/global/plugins.bundle.js') }}"></script>
<script src="{{ asset('demo/dist/assets/js/scripts.bundle.js') }}"></script>
<!--end::Global Javascript Bundle-->
<!--begin::Vendors Javascript(used for this page only)-->
<script src="{{ asset('demo/dist/assets/plugins/custom/fslightbox/fslightbox.bundle.js') }}"></script>
<script src="{{ asset('demo/dist/assets/plugins/custom/typedjs/typedjs.bundle.js') }}"></script>
<!--end::Vendors Javascript-->
<!--begin::Custom Javascript(used for this page only)-->
<script src="{{ asset('demo/dist/assets/js/custom/landing.js') }}"></script>

<script src="{{ asset('demo/dist/assets/plugins/global/plugins.bundle.js') }}"></script>
<script src="{{ asset('demo/dist/assets/js/scripts.bundle.js') }}"></script>
<!--end::Global Javascript Bundle-->
<!--begin::Vendors Javascript(used for this page only)-->
<script src="{{ asset('demo/dist/assets/plugins/custom/datatables/datatables.bundle.js') }}"></script>
<!--end::Vendors Javascript-->
<!--begin::Custom Javascript(used for this page only)-->
<script src="{{ asset('demo/dist/assets/js/custom/apps/user-management/users/list/table.js') }}"></script>
<script src="{{ asset('/') }}twbs-pagination/jquery.twbsPagination.min.js"></script>

<!--end::Custom Javascript-->
<!--end::Javascript-->
@stack('jsScript')