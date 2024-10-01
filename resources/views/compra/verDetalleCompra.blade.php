@extends('layouts.app')




<!-- AQUI INICIA LAS OPCIONES SUPERIORES   #####################################################################################-->


<!-- #AQUI INICIA EL DACHSBOARDDDDDD######################################################################################### -->

    <!DOCTYPE html>
    <html lang="en">
    
    <head>
    
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
    
        <title>SB Admin 22 - Dashboard</title>
    
        <!-- Custom fonts for this template-->
        <link href="{{asset('bsadmin/vendor/fontawesome-free/css/all.min.css  ')}}" rel="stylesheet" type="text/css">
        <link
            href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
            rel="stylesheet">
    
        <!-- Custom styles for this template-->
        <link href=" {{asset('bsadmin/css/sb-admin-2.min.css')}}" rel="stylesheet">

           <!-- Custom styles for this page -->
        <link href="{{asset('bsadmin/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">



    
    </head>
    
    <body id="page-top">
    
        <!-- Page Wrapper -->
        <div id="wrapper">
    
            <!-- Sidebar -->
            <ul class="navbar-nav bg-gradient-success sidebar sidebar-dark accordion rounded-lg shadow" id="accordionSidebar">
    
                <!-- Sidebar - Brand -->
                <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('admin.index')}}">
                    <div class="sidebar-brand-icon rotate-n-15">
                        <i class="fas fa-laugh-wink"></i>
                    </div>
                    <div class="sidebar-brand-text mx-3">  Confort Solares <sup>2</sup></div>
                </a>
    
                <!-- Divider -->
                <hr class="sidebar-divider my-0">
    
                <!-- Nav Item - Dashboard -->
                <li class="nav-item active">
                    <a class="nav-link" href="{{route('admin.index')}}">
                        <i class="fas fa-fw fa-tachometer-alt"></i>
                        <span>INICIO</span></a>
                </li>
    
                             <!-- Divider -->
                             <hr class="sidebar-divider">
    
                             <!-- Heading -->
                             <div class="sidebar-heading">
                                 Mod. USUARIO
                             </div>
                 
                             <!-- Nav Item - Pages Collapse Menu -->
                             <li class="nav-item">
                                 <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                                     aria-expanded="true" aria-controls="collapseTwo">
                                     <i class="fas fa-fw fa-cog"></i>
                                     <span>USUARIO</span>
                                 </a>
                                 <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                                     <div class="bg-white py-2 collapse-inner rounded">
                                         <h6 class="collapse-header">Custom Components:</h6>
                                         <a class="collapse-item" href="{{route('admin.registrarusuario')}}"> Usuarios</a> 
                                          <!-- encamina hacia las rutas -->
                                         
                                         <a class="collapse-item" href="{{route('admin.roles')}}">Roles</a>
                                         <a class="collapse-item" href="{{route('admin.listarpersonal')}}">Personal</a>
                           
                                     </div>
                                 </div>
                             </li>
                 
                             
             
                             <!-- Divider -->
                             <hr class="sidebar-divider">
                 
                             <!-- Heading -->
                             <div class="sidebar-heading">
                                 Mod. Venta / Cliente
                             </div>
                 
                             <!-- Nav Item - Pages Collapse Menu -->
                             <li class="nav-item">
                                 <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo2"
                                     aria-expanded="true" aria-controls="collapseTwo2">
                                     <i class="fas fa-fw fa-cog"></i>
                                     <span>VENTA</span>
                                 </a>
                                 <div id="collapseTwo2" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                                     <div class="bg-white py-2 collapse-inner rounded">
                                         <h6 class="collapse-header">Custom Components:</h6>
                                        
                                          <!-- encamina hacia las rutas -->
                                          <a class="collapse-item" href="{{route('admin.listarcliente')}}"> CLIENTES SOLARES</a> 
                                          <a class="collapse-item" href="{{route('admin.listarfactura')}}">FACTURAS</a>
                                          <a class="collapse-item" href="{{route('admin.listarcuota')}}">CUOTA</a>
                                          <a class="collapse-item" href="{{route('admin.listarventa')}}">LISTA DE VENTAS</a>
                                        
                                         </div>
                                 </div>
                             </li>
             
             
             
                             <!-- Divider -->
                             <hr class="sidebar-divider">
                 
                             <!-- Heading -->
                             <div class="sidebar-heading">
                                 MOD. COMPRAS
                             </div>
             
                             <!-- Nav Item - Utilities Collapse Menu -->
                             <li class="nav-item">
                                 <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                                     aria-expanded="true" aria-controls="collapseUtilities">
                                     <i class="fas fa-fw fa-wrench"></i>
                                     <span>COMPRA</span>
                                 </a>
                                 <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                                     data-parent="#accordionSidebar">
                                     <div class="bg-white py-2 collapse-inner rounded">
                                         <a class="collapse-item" href="{{route('admin.listarproveedores')}}">PROVEEDORES</a>
                                         <a class="collapse-item" href="{{route('admin.listarcompra')}}">COMPRA</a>
                         
                                         <a class="collapse-item" href="{{route('admin.listarreposicion')}}">REPOSICION</a>
                                       
                                     </div>
                                 </div>
                             </li>
                 
                             <!-- Divider -->
                             <hr class="sidebar-divider">
                 
                             <!-- Heading -->
                             <div class="sidebar-heading">
                                 MOD. INVENTARIO
                             </div>
                 
                             <!-- Nav Item - Pages Collapse Menu -->
                             <li class="nav-item">
                                 <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                                     aria-expanded="true" aria-controls="collapsePages">
                                     <i class="fas fa-fw fa-folder"></i>
                                     <span>INVENTARIO</span>
                                 </a>
                                 <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                                     <div class="bg-white py-2 collapse-inner rounded">
                                         <h6 class="collapse-header">Productos:</h6>
                                         <a class="collapse-item" href="{{route('admin.listarproducto')}}">PRODUCTOS</a>
                                         <a class="collapse-item" href="{{route('admin.listaralmacen')}}">ALMACENES</a>
                                         <a class="collapse-item" href="{{route('admin.listarnotasalida')}}">NOTA SALIDA</a>
                                       
                                     </div>
                                 </div>
                             </li>
                               
    
    
                <!-- Divider -->
                <hr class="sidebar-divider d-none d-md-block">
    
                <!-- Sidebar Toggler (Sidebar) -->
                <div class="text-center d-none d-md-inline">
                    <button class="rounded-circle border-0" id="sidebarToggle"></button>
                </div>
    
                <!-- Sidebar Message -->
                <div class="sidebar-card d-none d-lg-flex">
                  
                    <p class="text-center mb-2"><strong> Dashboard</strong> items, components, and more!</p>
                    
                </div>
    
            </ul>
            <!-- End of Sidebar -->
    
            <!-- Content Wrapper -->
            <div id="content-wrapper" class="d-flex flex-column">
    
                <!-- Main Content -->
                <div id="content">
    
                    <!-- Topbar -->
                    <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
    
                        <!-- Sidebar Toggle (Topbar) -->
                        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                            <i class="fa fa-bars"></i>
                        </button>
    
                        <!-- Topbar Search -->
                        <form
                            class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                            <div class="input-group">
                                <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                    aria-label="Search" aria-describedby="basic-addon2">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="button">
                                        <i class="fas fa-search fa-sm"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
    
                        <!-- Topbar Navbar -->
                        <ul class="navbar-nav ml-auto">
    
                            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                            <li class="nav-item dropdown no-arrow d-sm-none">
                                <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-search fa-fw"></i>
                                </a>
                                <!-- Dropdown - Messages -->
                                <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                    aria-labelledby="searchDropdown">
                                    <form class="form-inline mr-auto w-100 navbar-search">
                                        <div class="input-group">
                                            <input type="text" class="form-control bg-light border-0 small"
                                                placeholder="Search for..." aria-label="Search"
                                                aria-describedby="basic-addon2">
                                            <div class="input-group-append">
                                                <button class="btn btn-primary" type="button">
                                                    <i class="fas fa-search fa-sm"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </li>
    
                            <!-- Nav Item - Alerts -->
                            <li class="nav-item dropdown no-arrow mx-1">
                                <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-bell fa-fw"></i>
                                    <!-- Counter - Alerts -->
                                    <span class="badge badge-danger badge-counter">3+</span>
                                </a>
                                <!-- Dropdown - Alerts -->
                                <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                    aria-labelledby="alertsDropdown">
                                    <h6 class="dropdown-header">
                                       Notificaciones
                                    </h6>
                                
                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                        <div class="mr-3">
                                            <div class="icon-circle bg-success">
                                                <i class="fas fa-donate text-white"></i>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="small text-gray-500">December 7, 2019</div>
                                            $290.29 has been deposited into your account!
                                        </div>
                                    </a>
                              
                                    <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                                </div>
                            </li>
    
                            <!-- Nav Item - Messages -->
                            <li class="nav-item dropdown no-arrow mx-1">
                                <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-envelope fa-fw"></i>
                                    <!-- Counter - Messages -->
                                    <span class="badge badge-danger badge-counter">7</span>
                                </a>
                                <!-- Dropdown - Messages -->
                                <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                    aria-labelledby="messagesDropdown">
                                    <h6 class="dropdown-header">
                                        Message Center
                                    </h6>
                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                        <div class="dropdown-list-image mr-3">
                                            <img class="rounded-circle" src="img/undraw_profile_1.svg"
                                                alt="...">
                                            <div class="status-indicator bg-success"></div>
                                        </div>
                                        <div class="font-weight-bold">
                                            <div class="text-truncate">Hi there! I am wondering if you can help me with a
                                                problem I've been having.</div>
                                            <div class="small text-gray-500">Emily Fowler · 58m</div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                        <div class="dropdown-list-image mr-3">
                                            <img class="rounded-circle" src="img/undraw_profile_2.svg"
                                                alt="...">
                                            <div class="status-indicator"></div>
                                        </div>
                                        <div>
                                            <div class="text-truncate">I have the photos that you ordered last month, how
                                                would you like them sent to you?</div>
                                            <div class="small text-gray-500">Jae Chun · 1d</div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                        <div class="dropdown-list-image mr-3">
                                            <img class="rounded-circle" src="img/undraw_profile_3.svg"
                                                alt="...">
                                            <div class="status-indicator bg-warning"></div>
                                        </div>
                                        <div>
                                            <div class="text-truncate">Last month's report looks great, I am very happy with
                                                the progress so far, keep up the good work!</div>
                                            <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                        <div class="dropdown-list-image mr-3">
                                            <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60"
                                                alt="...">
                                            <div class="status-indicator bg-success"></div>
                                        </div>
                                        <div>
                                            <div class="text-truncate">Am I a good boy? The reason I ask is because someone
                                                told me that people say this to all dogs, even if they aren't good...</div>
                                            <div class="small text-gray-500">Chicken the Dog · 2w</div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
                                </div>
                            </li>
    
                            <div class="topbar-divider d-none d-sm-block"></div>
    
                            <!-- Nav Item - User Information -->
                            <li class="nav-item dropdown no-arrow">
                                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="mr-2 d-none d-lg-inline text-gray-600 small"><b>{{ auth()->user()->name}}</b></span>
                                    <img class="img-profile rounded-circle"
                                        src="{{asset('bsadmin/undraw_profile.svg')}}">
                                </a>
                                <!-- Dropdown - User Information -->
                                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                    aria-labelledby="userDropdown">
                                    <a class="dropdown-item" href="#">
                                        <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Profile
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Settings
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Activity Log
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Logout
                                    </a>
                                </div>
                            </li>
    
                        </ul>
    
                    </nav>
                    <!-- End of Topbar -->
    
                    <!-- Begin Page Content -->

<!-- ########################################################################################## -->



<div class="container-fluid">
    
  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
      <a href="{{route('admin.pdfdetallecompra', $id)}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
              class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
  </div>

  <!-- Content Row -->


<!-- ########################################################################################## -->

   
<!--  AQUI INICIA LAS OPCIONES ANTERIORESSS        ######################################################################################### -->
         

          <!-- #############################################################3######-->

        <!--   <a href="{{route('admin.crearventa')}}" class="mx-2 font-semibold border-2 border-white py-2 px-8 pt-1 h-10 rounded-md hover:bg-white hover:text-blue-700">Crear</a>-->

  <h1 class="text-3xl text-center font-bold">Detalle de Compra</h1>


  <!-- #############################################################3######--> 


  <div class="container-fluid">



    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Datos</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Compra ID</th>
                            <th>Producto ID</th>
                            <th>Cantidad</th>
                            <th>Precio</th>
                            <th>Almacen ID</th>
                            <th>Created_At</th>
                       
                        </tr>
                    </thead>



                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Compra ID</th>
                            <th>Producto ID</th>
                            <th>Cantidad</th>
                            <th>Precio</th>
                            <th>Almacen ID</th>
                            <th>Created_At</th>
                  
                        </tr>
                    </tfoot>
                    <tbody>

        <!--############################################33#######-->

        @foreach($user as $row)
  
        <tr>
                <td class="py-3 px-7">{{$row->id}}</td>
                <td class="p-3">{{$row->compra_id}}</td>
                <td class="p-3 text-center">{{$row->producto_id}}</td>
                <td class="p-3 text-center">{{$row->cantidad}}</td>
                <td class="p-3 text-center">{{$row->precio}}</td>
                <td class="p-3 text-center">{{$row->almacen_id}}</td>
                <td class="p-3 text-center">{{$row->created_at}}</td>
               
              </tr>
    
      @endforeach

          <!--################################3#######-->              
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->






<!-- AQUI TERMINA LAS OPCIONES ANTEIROESSSSSSSSSSSS########################################################################################## -->
    
                        <!-- Content Row -->
                        <div class="row">
    
                            <!-- Content Column -->
                            <div class="col-lg-6 mb-4">
 
                             
                             
    
                            </div>
    
                            <div class="col-lg-6 mb-4">
    
                             
                              
    
    
                            </div>
                        </div>
    
                    </div>
                    <!-- /.container-fluid -->
    
                </div>
                <!-- End of Main Content -->
    
              
    
            </div>
            <!-- End of Content Wrapper -->
    
        </div>
        <!-- End of Page Wrapper -->
    
        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>
    
        <!-- Logout Modal-->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <a class="btn btn-primary" href="{{route('login.destroy')}}" >Logout</a>
                    </div>
                </div>
            </div>
        </div>
    
        <!-- Bootstrap core JavaScript-->
        <script src="{{asset('bsadmin/vendor/jquery/jquery.min.js')}}"></script>
        <script src="{{asset('bsadmin/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    
        <script src="{{asset('bsadmin/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

        <script src="{{asset('bsadmin/vendor/datatables/jquery.dataTables.min.js')}}"></script>
        <script src="{{asset('bsadmin/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>
    
        <!-- Page level custom scripts -->
        <script src="{{asset('bsadmin/js/demo/datatables-demo.js')}}"></script>

        <!-- Custom scripts for all pages-->
        <script src="{{asset('bsadmin/js/sb-admin-2.min.js')}}"></script>
    
        
     





    </body>
    
    </html>


<!-- TERMINA EL DHASBOARDDDDDDDDDDDDD########################################################################################## -->

