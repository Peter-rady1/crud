<x-app-layout>





    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Edit Task</title>

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
            min-width: 100px;
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
    </style>
    <body>

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
            <div class="sidebar-brand-icon rotate-n-15">
                <i class="fas fa-laugh-wink"></i>
            </div>
            <div class="sidebar-brand-text mx-3">Edit Task</div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item">
            <a class="nav-link" href="#">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Edit Task</span></a>
        </li>

        <!-- Nav Item - Pages Collapse Menu -->


        <li>
            <div class="dropdown">
                <button class="dropbtn">Pages
                </button>
                <div class="dropdown-content">
                    <a class="collapse-item" href="{{ route('contant.home')}}">Home</a>
                    <a class="collapse-item" href="{{ route('tasks.store')}}">Tasks</a>
                    <a class="collapse-item" href="{{ route('tasks.create')}}">Add List</a>
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
        <div id="content">
            <!-- Begin Page Content -->
            <div class="container-fluid pt-3">

                <!-- Page Heading -->
                <!-- DataTales Example -->
                <div class="card shadow mb-4  " >
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary"> Edit Task</h6>
                    </div>
                    <div class="container h-100 mt-5">
                        <div class="row h-100 justify-content-center align-items-center">
                          <div class="col-10 col-md-8 col-lg-6">
                            <h3>Edit Task</h3>
                            <form action="{{route('tasks.update',$singletask->id)}}" method="POST">
                              @csrf
                              @method('PATCH')
                              <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" class="form-control" id="title" name="title"  value="{{$singletask->title}}"  >
                              </div>
                              <div class="form-group">
                                <label for="body">Body</label>
                                <input type="textarea" class="form-control" id="body" name="body" rows="3" value="{{$singletask->body}}" >
                                {{-- <textarea class="form-control" id="body" name="body" rows="3" value="{{$singletask->body}}" ></textarea> --}}
                              </div>
{{--                              <input  name="status" type="hidden"  >--}}
                                <div class="form-group">
                                    <label for="title">status</label>
                                    <input type="text" class="form-control" id="status" name="status"  value="{{$singletask->status}}"  >
                                </div>
                              <br>
                              <button type="submit" class="btn btn-primary">Update Task</button>
                            </form>
                          </div>
                        </div>
                      </div>
                </div>

            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- End of Main Content -->
        <!-- Footer -->
        <footer class="sticky-footer bg-white">
            {{-- <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <span>Copyright &copy; Your Website 2020</span>
                </div>
            </div> --}}
        </footer>
        <!-- End of Footer -->

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







