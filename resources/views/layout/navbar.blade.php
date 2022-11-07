<nav class="navbar navbar-expand-lg" style="background-color: #043F7E;">
    <div class="container-fluid container">
        <a class="navbar-brand text-white" href="{{route('AboutUs')}}">ComicsMag</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active text-white" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{route('AuthPage')}}">Авторизация</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{route('RegPage')}}">Регистрация</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white" href="{{route('AdminPage')}}" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Админ
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{route('NewCategory')}}">Добавить категрию</a></li>
                        <li><a class="dropdown-item" href="#">Длбавить товар</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{route('logout')}}">Выход</a>
                </li>

            </ul>
        </div>
    </div>
</nav>
