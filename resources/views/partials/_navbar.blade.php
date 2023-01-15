<nav class="navbar navbar-expand-lg navbar-dark bg-dark" id="navbar">
    <div class="container">
      <a class="navbar-brand" href="/">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('/user')}}">Users</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('/user/add')}}">Add User</a>
          </li>
        </ul>
      </div>
      <a href="{{url('user/login')}}" class="btn text-white">Login</a>
      <a href="{{url('user/logout')}}" class="btn text-white">Logout</a>
    </div>
  </nav>