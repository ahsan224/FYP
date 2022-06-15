<!DOCTYPE html>
<html lang="en">
<head>
    <link href="{{asset('admin/theme/css/app.css')}}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="canonical" href="https://demo-basic.adminkit.io/charts-chartjs.html" />
    <script src="{{asset('admin/tinymce/tinymce.min.js')}}"></script>
    <script src="{{asset('admin/ckeditor/ckeditor.js')}}"></script>
</head>
<body>
    <div class="wrapper">
        <nav id="sidebar" class="sidebar js-sidebar">
            <div class="sidebar-content js-simplebar">
                <a class="sidebar-brand" href="#">
                    <span class="align-middle">Patient Dashboard</span>
                </a>

                <ul class="sidebar-nav">
                    <li class="sidebar-header">
                        Pages
                    </li>

                    <li class="sidebar-item active">
                        <a class="sidebar-link" href="#">
                            <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Dashboard</span>
                         </a>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="{{url('view-appointments')}}">
                            <i class="align-middle" data-feather="users"></i> <span class="align-middle">Appointments</span>
                         </a>
                    </li>
                    
                </ul>
            </div>
        </nav>

        <div class="main">
        <nav class="navbar navbar-expand navbar-light navbar-bg">
				<a class="sidebar-toggle js-sidebar-toggle">
          <i class="hamburger align-self-center"></i>
        </a>

				<div class="navbar-collapse collapse">
					<ul class="navbar-nav navbar-align">
                   
						<li>
							<a>
                			<h4 style="color:blue !important;">{{ auth()->user()->name}}</h4>
              			</a>
						</li>
                        &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <li>
                        <a style="color:black;" href="#" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();

                            ">Logout</a>
                    <form method="POST" action="{{ route('logout') }}" id="logout-form">
                            @csrf
                        </form>
                        </li>
					</ul>
				</div>
			</nav>
            

<main class="content" style="padding: none !important">
<div class="container-fluid ">

    @yield("content")


    <!-- <footer class="footer">
        <div class="container-fluid">
            <div class="row text-muted">
                <div class="col-6 text-start">
                    <p class="mb-0">
                        <a class="text-muted" href="#" target="_blank"><strong>Online Layyah</strong></a> &copy;
                    </p>
                </div>
                
                <div class="col-6 text-end">
                    <ul class="list-inline">
                        <li class="list-inline-item">
                            <a class="text-muted" href="#" target="_blank">Support</a>
                        </li>
                        
                        <li class="list-inline-item">
                            <a class="text-muted" href="#" target="_blank">Help Center</a>
                        </li>
                        
                        <li class="list-inline-item">
                            <a class="text-muted" href="#" target="_blank">Privacy</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer> -->
            <!-- End Footer -->
</div>
</main>
</div>

<script rel="stylesheet" src="{{asset('admin/theme/js/app.js')}}"></script>
<script rel="stylesheet" src="{{asset('admin/theme/js/search.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>


</body>

</html>