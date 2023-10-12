@include('layout.inc.header')

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <!-- Navbar -->
        <!-- /.navbar -->
        <!-- Main Sidebar Container -->
        @include('layout.inc.menu')
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <section class="content">
                <div class="container-fluid">
                    @yield('content')
                </div>
            </section>
        </div>
        <!-- /.content-wrapper -->
        @include('layout.inc.footer')
    </div>
    <!-- ./wrapper -->
    @include('layout.inc.script')
</body>

</html>
