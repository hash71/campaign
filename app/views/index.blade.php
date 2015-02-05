<!DOCTYPE html>

<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
<meta name="keywords" content="admin template, admin dashboard, inbox templte, calendar template, form validation">
<meta name="author" content="DazeinCreative">
<meta name="description" content="ORB - Powerfull and Massive Admin Dashboard Template with tonns of useful features">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>ORB</title>

<link rel="stylesheet" type="text/css" href="assets/css/daterangepicker-bs3.css" />
<link href="assets/css/styles.css" rel="stylesheet" type="text/css">

<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
<script type="text/javascript" src="assets/js/vendors/modernizr/modernizr.custom.js"></script>
</head>

<body>

<!--Smooth Scroll-->
<div class="smooth-overflow">
<!--Navigation-->
  <nav class="main-header clearfix" role="navigation"> <a class="navbar-brand" href="index.html"><span class="text-blue">ORB</span></a> 
    
    <!--Search-->
    <div class="site-search">
      <form action="#" id="inline-search">
        <i class="fa fa-search"></i>
        <input type="search" placeholder="Search">
      </form>
    </div>
    
    <!--Navigation Itself-->    
    <div class="navbar-content">

<!--Sidebar Toggler--> 
        <a href="#" class="btn btn-default left-toggler"><i class="fa fa-bars"></i></a>

      <!--Fullscreen Trigger-->
      <button type="button" class="btn btn-default hidden-xs pull-right" id="toggle-fullscreen"><i class=" entypo-popup"></i></button>
           
      <!--Lock Screen--> 
      <a href="#" data-toggle="modal" class="btn btn-default hidden-xs pull-right lockme"> <i class="entypo-lock"></i> </a>     

    </div>
  </nav>  
  <!--/Navigation--> 
  
  <!--MainWrapper-->
  <div class="main-wrap">  
   
    <!--Main Menu-->
    <div class="responsive-admin-menu">
      <div class="responsive-menu">ORB
        <div class="menuicon"><i class="fa fa-angle-down"></i></div>
      </div>
      <ul id="menu">
        <li><a class="active" href="index.html" title="Dashboard"><i class="entypo-briefcase"></i><span> Dashboard</span></a></li>
      </ul>
    </div>
    <!--/MainMenu-->
    
    <div class="content-wrapper">
        <!-- 
        Please Dont Delete This portion  <nav class="cbp-hsmenu-wrapper" id="cbp-hsmenu-wrapper"></nav>  
        -->
        <nav class="cbp-hsmenu-wrapper" id="cbp-hsmenu-wrapper"></nav>

        <!--Breadcrumb-->
        <div class="breadcrumb clearfix">
          <ul>
            <li><a href="index.html"><i class="fa fa-home"></i></a></li>
            <li><a href="index.html">Dashboard</a></li>
            <li class="active">Data</li>
          </ul>
        </div>
        <!--/Breadcrumb--> 
        
        <div class="row">
          <div class="col-sm-2"></div>
          <div class="col-sm-3">
            <div class="form-group">
              <select class="form-control" name="" id="">
                <option value="">Option One</option>
                <option value="">Option Two</option>
              </select>
            </div>
          </div>
          <div class="col-sm-7">
            <div class="date">
                <div class="form-group">
                  <div class="input-group date">
                    <input type='text' class="form-control" id="datetimepicker1" placeholder="Pick Date"/>
                    <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
                    </span>
                  </div>
                </div>
            </div>
          </div>
        </div>
          
        <!-- Widget Row Start grid -->
        <div class="row" id="powerwidgets">

          <div class="col-md-8 bootstrap-grid">
            <!-- New widget -->
            <div class="powerwidget cold-grey" id="morris-stacked-bar" data-widget-editbutton="false">
              <header>
                <h2>Morris Stacked Bar Chart</h2>
              </header>
              <div class="inner-spacer">
                <div class="morrischart" id="bar_chart"></div>
              </div>
            </div>
            <!-- /New widget --> 
            <!-- New widget -->
            <div class="powerwidget cold-grey" id="morrisasline" data-widget-editbutton="false">
              <header>
                <h2>Morris Area Line<small>Lines As Area</small></h2>
              </header>
              <div class="inner-spacer">
                <div class="morrischart" id="morris-area-lines"></div>
              </div>
            </div>
            <!-- /New widget -->
          </div>
          <!-- /Inner Row Col-md-8 -->
                          
          <div class="col-md-4 bootstrap-grid"> 
            <!-- New widget -->
            <div class="powerwidget cold-grey" id="flotchart-widget-1" data-widget-editbutton="false">
              <header>
                <h2>SMS</h2>
              </header>
              <div class="inner-spacer">
                <div class="flotchart-container">
                  <div id="placeholder6a" class="flotchart-placeholder"></div>
                </div>
              </div>
            </div>
            <!-- End Widget -->
          </div>
          <!-- /Inner Row Col-md-4 -->

          <div class="clearfix"></div>
                         
          <div class="col-md-4 bootstrap-grid">

            <!-- New widget -->
            <div class="powerwidget cold-grey" id="flotchart-widget-2" data-widget-editbutton="false">
              <header>
                <h2>Pie Chart<small>FlotChart</small></h2>
              </header>
              <div class="inner-spacer">
                <div class="flotchart-container">
                  <div id="placeholder6b" class="flotchart-placeholder"></div>
                </div>
              </div>
            </div>
            <!-- End Widget -->
          </div>
          <!-- /Inner Row Col-md-4 -->             
                         
          <div class="col-md-4 bootstrap-grid"> 
            <!-- New widget -->
            <div class="powerwidget cold-grey" id="flotchart-widget-3" data-widget-editbutton="false">
              <header>
                <h2>Pie Chart<small>FlotChart</small></h2>
              </header>
              <div class="inner-spacer">
                <div class="flotchart-container">
                  <div id="placeholder6c" class="flotchart-placeholder"></div>
                </div>
              </div>
            </div>
            <!-- End Widget -->
          </div>
          <!-- /Inner Row Col-md-4 -->             
                         
          <div class="col-md-4 bootstrap-grid"> 
            <!-- New widget -->
            <div class="powerwidget cold-grey" id="flotchart-widget-4" data-widget-editbutton="false">
              <header>
                <h2>Pie Chart<small>FlotChart</small></h2>
              </header>
              <div class="inner-spacer">
                <div class="flotchart-container">
                  <div id="placeholder6d" class="flotchart-placeholder"></div>
                </div>
              </div>
            </div>
            <!-- End Widget -->
          </div>
          <!-- /Inner Row Col-md-4 --> 
        </div>
        <!-- /Widgets Row End Grid--> 
    </div>
      <!-- / Content Wrapper --> 
  </div>
  <!--/MainWrapper-->
</div>
<!--/Smooth Scroll-->

<!--Modals--> 

<!--Power Widgets Modal-->
<div class="modal" id="delete-widget">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <i class="fa fa-lock"></i> </div>
      <div class="modal-body text-center">
        <p>Are you sure to delete this widget?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal" id="trigger-deletewidget-reset">Cancel</button>
        <button type="button" class="btn btn-primary" id="trigger-deletewidget">Delete</button>
      </div>
    </div>
    <!-- /.modal-content --> 
  </div>
  <!-- /.modal-dialog --> 
</div>
<!-- /.modal --> 

<!--Sign Out Dialog Modal-->
<div class="modal" id="signout">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <i class="fa fa-lock"></i> </div>
      <div class="modal-body text-center">Are You Sure Want To Sign Out?</div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" id="yesigo">Ok</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
    <!-- /.modal-content --> 
  </div>
  <!-- /.modal-dialog --> 
</div>
<!-- /.modal --> 

<!--Lock Screen Dialog Modal-->
<div class="modal" id="lockscreen">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <i class="fa fa-lock"></i> </div>
      <div class="modal-body text-center">Are You Sure Want To Lock Screen?</div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" id="yesilock">Ok</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
    <!-- /.modal-content --> 
  </div>
  <!-- /.modal-dialog --> 
</div>
<!-- /.modal --> 

<!--Scripts--> 
<!--JQuery--> 
<script type="text/javascript" src="assets/js/vendors/jquery/jquery.min.js"></script> 
<script type="text/javascript" src="assets/js/vendors/jquery/jquery-ui.min.js"></script> 

<script>
$('.powerwidget > header').on('touchstart', function(event){});
</script>

<!--EasyPieChart--> 
<script type="text/javascript" src="assets/js/vendors/easing/jquery.easing.1.3.min.js"></script> 
<script type="text/javascript" src="assets/js/vendors/easypie/jquery.easypiechart.min.js"></script> 

<!--Fullscreen--> 
<script type="text/javascript" src="assets/js/vendors/fullscreen/screenfull.min.js"></script> 

<!--NanoScroller 
<script type="text/javascript" src="assets/js/vendors/nanoscroller/jquery.nanoscroller.min.js"></script> -->

<!--Sparkline--> 
<script type="text/javascript" src="assets/js/vendors/sparkline/jquery.sparkline.min.js"></script> 

<!--Horizontal Dropdown--> 
<script type="text/javascript" src="assets/js/vendors/horisontal/cbpHorizontalSlideOutMenu.js"></script> 
<script type="text/javascript" src="assets/js/vendors/classie/classie.js"></script> 

<!--PowerWidgets--> 
<script type="text/javascript" src="assets/js/vendors/powerwidgets/powerwidgets.min.js"></script> 

<!--Morris Chart--> 
<script type="text/javascript" src="assets/js/vendors/raphael/raphael-min.js"></script> 
<script type="text/javascript" src="assets/js/vendors/morris/morris.min.js"></script> 

<!--FlotChart--> 
<script type="text/javascript" src="assets/js/vendors/flotchart/jquery.flot.min.js"></script> 
<script type="text/javascript" src="assets/js/vendors/flotchart/jquery.flot.resize.min.js"></script> 
<script type="text/javascript" src="assets/js/vendors/flotchart/jquery.flot.axislabels.js"></script>
<script type="text/javascript" src="assets/js/vendors/flotchart/jquery.flot.pie.min.js"></script> 

<!--Chart.js--> 
<script type="text/javascript" src="assets/js/vendors/chartassets/js/chart.min.js"></script> 

<!--Calendar--> 
<script type="text/javascript" src="assets/js/vendors/fullcalendar/fullcalendar.min.js"></script> 
<script type="text/javascript" src="assets/js/vendors/fullcalendar/gcal.js"></script> 

<!--Bootstrap--> 
<script type="text/javascript" src="assets/js/vendors/bootstrap/bootstrap.min.js"></script> 

<!--Vector Map--> 
<script type="text/javascript" src="assets/js/vendors/vector-map/jquery.vmap.min.js"></script> 
<script type="text/javascript" src="assets/js/vendors/vector-map/jquery.vmap.sampledata.js"></script> 
<script type="text/javascript" src="assets/js/vendors/vector-map/jquery.vmap.world.js"></script>

<!--Datepicker-->
<script type="text/javascript" src="assets/js/vendors/datepicker/bootstrap-datepicker.js"></script>
<script type="text/javascript" src="assets/js/vendors/datepicker/moment.js"></script>
<script type="text/javascript" src="assets/js/vendors/datepicker/daterangepicker.js"></script>
<!--ToDo--> 
<script type="text/javascript" src="assets/js/vendors/todos/todos.js"></script> 

<!--Main App--> 
<script type="text/javascript" src="assets/js/scripts.js"></script>

        <script type="text/javascript">
            // When the document is ready
var moris_bar=null;
            $(document).ready(function () {
                
                $('#datetimepicker1').daterangepicker(
          {
            format: 'YYYY-MM-DD'
          },
          function(){ alert('closed');
                });  
        

        var bar_data = [
    { y: 'SKU 1', qtt: 100 },
    { y: 'SKU 2', qtt: 20},
    { y: 'SKU 3', qtt: 33},
    { y: 'SKU 4', qtt: 56 },
    { y: 'SKU 5', qtt: 67 },
    { y: 'SKU 6', qtt: 100 },
  ];
  
    moris_bar = Morris.Bar({
                element: 'bar_chart',
                data: bar_data,
                gridTextFamily: 'Open Sans, sans-serif',
                gridTextColor: '#000',
                gridTextSize: 14,
        barColors: function (row, series, type) {
          if(row.label == "SKU 1") return "#AD1D28";
          else if(row.label == "SKU 2") return "#DEBB27";
          else if(row.label == "SKU 3") return "#fec04c";
          else if(row.label == "SKU 4") return "#1AB244";
          else if(row.label == "SKU 5") return "#BAB244";
          else if(row.label == "SKU 6") return "#CAB244";
        },
                stacked: true,
         xkey: 'y',
        ykeys: ['qtt'],
        labels: ['SKU 1', 'SKU 2','SKU 3','SKU 4','SKU 5','SKU 6',]


            });
        /**$.plot($("#bar_chart"), data, {
            series: {
                bars: {
                    show: true,
                    order: 1
                }
            },
      grid: {
        hoverable: true,
        clickable: true
      },
            valueLabels: {
                show: true
            },
      showTooltip: true,
      
      });*/
      
            
            });
        </script>


<!--/Scripts-->

</body>
</html>