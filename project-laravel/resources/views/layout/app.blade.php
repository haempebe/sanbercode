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
                    <div class="content-header">
                        <div class="container-fluid">
                            <div class="row mb-2">
                                <div class="col-sm-6">
                                    <h1 class="m-0">@yield('pageTitle')</h1>
                                </div><!-- /.col -->
                            </div><!-- /.row -->
                        </div><!-- /.container-fluid -->
                    </div>
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
