<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="{{ url('/categories/') }}">Home</a>
    <button class="navbar-toggler" type="button">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/home/') }}">Account</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/cart/') }}">Shopping Cart</a>
            </li>
        </ul>
    </div>
</nav>