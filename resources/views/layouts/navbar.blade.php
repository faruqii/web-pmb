  <!-- Nav -->
  <nav class="navbar navbar-expand navbar-dark bg-warning">
    <div class="container py-2">
        {{-- check if user is logged in --}}
        @auth
            <div class="navbar-nav">
                @if (auth()->user()->role == 'admin')
                    <a class="nav-link" style="color: white;" href="{{ '/admin/students' }}">Home</a>                  
                @else
                    <a class="nav-link" style="color: white;" href="{{ '/admin/students' }}">Home</a>
                    <a class="nav-link" href="{{ '/home/status' }}">Student Status</a>              
                @endif
            </div>
            <div class="d-flex">
                <div class="dropdown ms-4">
                    <button class="btn btn-light dropdown-toggle text-" type="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        {{ auth()->user()->name }}
                    </button>
                    <ul class="dropdown-menu">
                            <form action="{{ url('/logout') }}" method="POST">
                                @csrf
                                <button type="submit" class="dropdown-item text-">Logout</button>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        @else
            <div class="navbar-nav w-100 d-flex justify-content-between">
                <a class="nav-link active" aria-current="page" href="{{ '/' }}">Home</a>
                <a class="nav-link" href="{{ '/' }}">Login</a>
            </div>
        @endauth

    </div>
</nav>
<!-- Nav End -->