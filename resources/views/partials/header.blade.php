<div class="header">
    <div class="header__container">
        <div class="header__logo">
            <a  href="#"><img class="logo__img" src="{{ asset("public/images/logo.png") }}" alt=""></a>
        </div>
    
        <div class="header__nav">
            <ul class="nav__btns">
                <li class="nav__btn"> <a href="#">О нас</a> </li>
                <li class="nav__btn"> <a href="#">Каталог</a> </li>
                <li class="nav__btn"> <a href="#">Где нас найти</a> </li>
                @auth("web")
                    <li class="nav__btn"> <a href="#">Личный кабинет</a> </li>
                @endauth
            </ul>
        </div>
    
        <div class="header__auth">

            @auth("web")
                <a href="{{ route('logout') }}" class="auth__btn">Выход</a> 
            @endauth
    
            @guest("web")
                <a href="{{ route('login') }}" class="auth__btn">Вход</a>
                <a href="{{ route('register') }}" class="auth__btn">Регистрация</a>
            @endguest
        </div>
    </div>
    
    <script src="public/js/app.js"></script>
</div>