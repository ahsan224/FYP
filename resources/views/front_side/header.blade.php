 <!-- header section strats -->
 <header class="header_section">
      <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="{{url('about')}}">
            <span>
              Aridian
            </span>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class=""> </span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link"  href="{{url('/')}}">Home </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{url('about')}}"> About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{url('departments')}}">Departments</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{url('doctors')}}">Doctors</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="{{url('contact')}}">Contact Us <span class="sr-only">(current)</span> </a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="{{url('register')}}">Register</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="{{url('login')}}">Login</a>
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->