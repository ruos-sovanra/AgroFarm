<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand " href="#">E-Shop</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mx-auto">
            <li class="nav-item active">
                <a class="nav-link" href="{{route('ui.index')}}">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('ui.shop')}}">Shop</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('ui.about')}}">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('ui.shop')}}">Contact</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#cart">Cart</a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search products..." aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav>