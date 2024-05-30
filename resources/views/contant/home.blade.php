<x-app-layout>
    <html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Home </title>

        <!-- Custom fonts for this template -->
        <link href="{{asset('assits/vendor/fontawesome-free/css/all.min.css" rel="stylesheet')}}" type="text/css">
        <link
            href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
            rel="stylesheet">

            <!-- Custom styles for this template -->
            <link href="{{asset('assits/css/sb-admin-2.min.css')}}" rel="stylesheet">

            <!-- Custom styles for this page -->
            <link href="{{asset('assits/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">

        </head>

    <style>
        /* Style The Dropdown Button */
        .dropbtn {
            /*background-color: #4CAF50;*/
            color: white;
            padding: 16px;
            font-size: 16px;
            border: none;
            cursor: pointer;
        }

        /* The container <div> - needed to position the dropdown content */
        .dropdown {
            position: relative;
            display: inline-block;
        }

        /* Dropdown Content (Hidden by Default) */
        .dropdown-content {
            display: none;
            position: absolute;
            /*background-color: #f9f9f9;*/
            min-width:100px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
        }


        /* Links inside the dropdown */
        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        /* Change color of dropdown links on hover */
        .dropdown-content a:hover {background-color: #f1f1f1}

        /* Show the dropdown menu on hover */
        .dropdown:hover .dropdown-content {
            display: block;
        }

        /* Change the background color of the dropdown button when the dropdown content is shown */
        .dropdown:hover .dropbtn {
            /*background-color: #3e8e41;*/
        }




        /* Dropdown Content (Hidden by Default) notifications */
        .dropdown-content {
            display: none;
            position: absolute;
            /*background-color: #f9f9f9;*/
            min-width:100px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
        }
        /* Links inside the dropdown */
        .dropdown-content li {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

    </style>
    <body id="page-top" >



        <!-- Page Wrapper -->
        <div id="wrapper">

            <!-- Sidebar -->
            <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

                <!-- Sidebar - Brand -->
                <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('contant.home')}}">
                    <div class="sidebar-brand-icon rotate-n-15">
                        <i class="fas fa-laugh-wink"></i>
                    </div>
                    <div class="sidebar-brand-text mx-3">Home</div>
                </a>
                <li >
                  <div class="sidebar-brand d-flex align-items-center justify-content-start">

                    @if (Auth::user())
                        {{ Auth::user()->name}}

                    @else
                        'Please Regist'

                    @endif
                </div>
                </li>
                <!-- Divider -->
                <hr class="sidebar-divider my-0">

                <li>
                    <div class="dropdown">
                        <button class="dropbtn"><span>Notification</span></button>
                        <div class="dropdown-content">
                            <ul>
                            @if (Auth::user())
                                <li class="collapse-item" href="#"> @foreach(auth()->user()->notifications()  as $notif)
                                        <a class="collapse-item" href="{{route('mark',$notif->id)}}"> {{$notif->data['title']}}</a>
                                    @endforeach</li>
                            @else
                                   Empty

                            @endif

                            </ul>

                        </div>
                    </div>
                </li>

                <!-- Nav Item - Pages Collapse Menu -->
                <li>
                    <div class="dropdown">
                        <button class="dropbtn"><span>Pages</span></button>
                        <div class="dropdown-content">
                            <a class="collapse-item" href="{{ route('tasks.create')}}">Add Task</a>
                            <a class="collapse-item" href="{{ route('tasks.store')}}">Tasks</a>
                        </div>
                    </div>
                </li>


                <!-- Sidebar Toggler (Sidebar) -->
                <div class="text-center d-none d-md-inline">
                    <button class="rounded-circle border-0" id="sidebarToggle"></button>
                </div>

            </ul>
            <!-- End of Sidebar -->

            <!-- Content Wrapper -->
            <div id="content-wrapper" class="d-flex flex-column">

                <!-- Main Content -->

                <header class="bg-dark py-5">
                    <div class="container px-5">
                        <div class="row gx-5 justify-content-center">
                            <div class="col-lg-6">
                                <div class="text-center my-5">
                                    <h1 class="display-5 fw-bolder text-white mb-2">Present your business in a whole new way</h1>
                                    <p class="lead text-white-50 mb-4">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit!</p>
                                    <div class="d-grid gap-3 d-sm-flex justify-content-sm-center">
                                        <a class="btn btn-primary btn-lg px-4 me-sm-3" href="{{ route('tasks.create')}}">Get Started</a>
                                        <a class="btn btn-outline-light btn-lg px-4" href="#">Learn More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </header>

            </div>
            <!-- End of Content Wrapper -->

        </div>
        <!-- End of Page Wrapper -->

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>



        <!-- Bootstrap core JavaScript-->
        <script src="{{asset('assits/vendor/jquery/jquery.min.js')}}"></script>
        <script src="{{asset('assits/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

        <!-- Core plugin JavaScript-->
        <script src="{{asset('assits/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

        <!-- Custom scripts for all pages-->
        <script src="{{asset('assits/js/sb-admin-2.min.js')}}"></script>

        <!-- Page level plugins -->
        <script src="{{asset('assits/vendor/datatables/jquery.dataTables.min.js')}}"></script>
        <script src="{{asset('assits/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

        <!-- Page level custom scripts -->
        <script src="{{asset('assits/js/demo/datatables-demo.js')}}"></script>

    </body>


    </html>


</x-app-layout>






