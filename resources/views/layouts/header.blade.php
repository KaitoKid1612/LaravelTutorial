<!--Main Navigation-->
<header class="container">
    <!-- Animated navbar-->
    <nav class="navbar navbar-expand-lg fixed-top navbar-scroll">
      <div class="container">
        <button class="navbar-toggler ps-0" type="button">
          <span class="d-flex justify-content-start align-items-center">
            <i class="fas fa-bars" style="color:#fff"></i>
          </span>
        </button>
        <div class="collapse navbar-collapse" id="navbarExample01">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item active">
                <a class="nav-link {{ request()->is('/') ? 'active' : ''}}" aria-current="page" href="{{ route('home') }}">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->is('about') ? 'active' : ''}}" href="{{ route('about') }}" rel="nofollow">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ request()->is('posts') ? 'active' : ''}}" href="{{ route('posts') }}" rel="nofollow">Post</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ request()->is('foods') ? 'active' : ''}}" href="{{ route('foods.index') }}" rel="nofollow">Food</a>
            </li>
          </ul>
  
          <ul class="navbar-nav flex-row">
            <!-- Icons -->
            <li class="nav-item">
              <a class="nav-link pe-2"href=""rel="nofollow"target="_blank">
                <i class="fab fa-youtube"></i>
              </a>
            </li>
            <li class="nav-item">
                <a class="nav-link pe-2"href=""rel="nofollow"target="_blank">
                    <i class="fab fa-facebook-f"></i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link pe-2"href=""rel="nofollow"target="_blank">
                    <i class="fab fa-twitter"></i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link pe-2"href=""rel="nofollow"target="_blank">
                    <i class="fab fa-github"></i>
                </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Animated navbar -->
  
    <!-- Background image -->
    <div id="intro" class="bg-image" style="background-image: url('https://www.w3schools.com/w3images/photographer.jpg');
    background-color: #cccccc;
    height: 500px;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    position: relative;">
      <div class="mask text-white" style="background-color: rgba(33, 209, 146, 0.8)">
        <div class="container text-center h-100">
          <div>
            <h1 class="mb-5" style="padding:10px 0px">Welcome my Website</h1>
          </div>
        </div>
      </div>
    </div>
    <!-- Background image -->
</header>