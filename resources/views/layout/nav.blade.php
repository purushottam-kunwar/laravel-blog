<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <button
            class="navbar-toggler"
            type="button"
            data-mdb-toggle="collapse"
            data-mdb-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
        >
            <i class="fas fa-bars"></i>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <a class="navbar-brand" href="http://127.0.0.1:8000/">
                <img
                    src="https://cdn.logojoy.com/wp-content/uploads/2018/05/30164225/572.png"
                    height="100"
                    alt="MDB Logo"
                    loading="lazy"
                />
            </a>
            <ul class="navbar-nav">
                @if(Auth::check())
                    <li class="nav-item">
                        <a class="nav-link  ml-auto" href="#">{{ Auth::user()->name }}</a>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>
