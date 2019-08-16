@if (session()->has('user'))

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta content="" name="description" />
    <meta content="webthemez" name="author" />
    <title>@yield('title')</title>
   
    <!-- Bootstrap Styles-->
    <link href="{{asset('/css/bootstrap.css')}}" rel="stylesheet" />
     <!-- FontAwesome Styles-->
    <link href="{{asset('/css/font-awesome.css')}}" rel="stylesheet"/>
    <!-- Morris Chart Styles-->
    <link href="{{asset('js/morris/morris-0.4.3.min.css')}}" rel="stylesheet">
    <!-- Custom Styles-->
    <link href="{{asset('css/custom-styles.css')}}" rel="stylesheet" />
    <link href="{{asset('css/custom.css')}}" rel="stylesheet" />
    <!-- Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <!-- TABLE STYLES-->
    <link href="{{asset('js/dataTables/dataTables.bootstrap.min.css')}}" rel="stylesheet" />

</head>

<body>
    <div id="wrapper">
        <nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{url('dashboard')}}"><strong></i> DTS</strong></a>
            </div>

            <!-- /.dropdown-user -->
            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="{{ route('logout') }}"><i class="fa fa-sign-out fa-fw"></i> Logout</a></li>
                    </ul>
                </li>
            </ul>
            <!-- /.dropdown-user -->

        </nav>
        
        <!--/. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <?php $id = @$_GET['m'];?>

                    <li>
                        <?php if(empty($id)){?>
                            <a  class="active-menu" href="{{url('/dashboard')}}"><i class="fa fa-dashboard"></i> Dashboard</a>
                        <?php }else{?>
                            <a  href="{{url('/dashboard')}}"><i class="fa fa-dashboard"></i> Dashboard</a>
                            <?php }?>
                    </li>

                    <li>
                        <?php if($id==2){?>
                            <a class="active-menu" href="{{url('/artikel?m=2')}}"><i class="fa fa-qrcode"></i> Articles</a>
                        <?php }else{ ?>
                            <a href="{{url('/artikel?m=2')}}"><i class="fa fa-qrcode"></i> Articles</a>
                        <?php }?>
                        
                    </li>
                    <li>
                        <?php if($id==4){?>
                            <a  class="active-menu"  href="{{url('/instruktur?m=4')}}"><i class="fa fa-user"></i> Instructor</a>
                        <?php }else{ ?>
                            <a href="{{url('/instruktur?m=4')}}"><i class="fa fa-user"></i> Instructor</a>
                        <?php }?>
                    </li>
                    <li>
                        <?php if($id==5){?>
                            <a class="active-menu" href="{{url('peserta?m=5')}}"><i class="fa fa-users"></i> Participants</a>
                        <?php }else{ ?>
                            <a href="{{url('peserta?m=5')}}"><i class="fa fa-users"></i> Participants</a>
                        <?php }?>
                    </li>
                    <li>
                        <?php if($id==6){?>
                            <a class="active-menu" href="{{url('drag-drop-images?m=6')}}"><i class="fa fa-picture-o"></i> Galery</a>
                        <?php }else{ ?>
                            <a href="{{url('drag-drop-images?m=6')}}"><i class="fa fa-users"></i> Galery</a>
                        <?php }?>
                    </li>

                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
      
		<div id="page-wrapper"> 

            <div class="header"> 
                @yield('header')
            </div>

            <div id="page-inner">
                @yield('body')
            <!-- /. PAGE INNER  -->
            </div>

        <!-- /. PAGE WRAPPER  -->
        </div>

    <!-- /. WRAPPER  -->
    </div>
    <!-- JS Scripts-->
    
    <!-- jQuery Js -->
    <script src="{{asset('/js/jquery-1.10.2.js')}}"></script>
    <!-- Bootstrap Js -->
    <script src="{{asset('/js/bootstrap.min.js')}}"></script>
    <!-- Metis Menu Js -->
    <script src="{{asset('/js/jquery.metisMenu.js')}}"></script>
    <!-- DATA TABLE SCRIPTS -->
    <script src="{{asset('/js/dataTables/jquery.dataTables.js')}}"></script>
    <script src="{{asset('/js/dataTables/dataTables.bootstrap.js')}}"></script>
        <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
            $(document).ready(function () {
                $('#instruktur').dataTable();
            });
    </script>
    <!-- Morris Chart Js -->
    <script src="{{asset('/js/morris/raphael-2.1.0.min.js')}}"></script>
    <script src="{{asset('/js/morris/morris.js')}}"></script>
    
    <script src="{{asset('/js/easypiechart.js')}}"></script>
    <script src="{{asset('/js/easypiechart-data.js')}}"></script>
    
    <script src="{{asset('/js/Lightweight-Chart/jquery.chart.js')}}"></script>
  
    <!-- Custom Js -->
    <script src="{{asset('/js/custom-scripts.js')}}"></script>
      
    <!-- Chart Js -->
    <script type="text/javascript" src="{{asset('/js/Chart.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('/js/chartjs.js')}}"></script>

    <!-- Ckeditor -->
    <script type="text/javascript" src="{{asset('/ckeditor/ckeditor/ckeditor.js')}}"></script>
    
</body>
</html>    
@else
    <script>window.location = "/admin";</script>
@endif