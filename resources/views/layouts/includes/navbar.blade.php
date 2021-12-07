<nav class="navbar  navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand  nav-a text-lg" >My Project</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse  navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active ">
                <a class="nav-link nav-a text-bold" href="{{URL('/user/stores')}}">Stores</a>
            </li>
            <li class="nav-item">
                <a class="nav-link nav-a  text-bold" href="{{URL('/user/category')}}">Category</a>
            </li>
            <li class="nav-item">
                <a class="nav-link nav-a  text-bold " href="{{URL('/user/stores')}}">must rating</a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0"  method="GET" action="{{URL('/user/search')}}">
            <input class="form-control mr-sm-2" name="search" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-light" type="submit">Search</button>
        </form>
    </div>
</nav>
