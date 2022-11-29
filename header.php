<nav class="navbar navbar-expand-md border-bottom">
    <div class="container-fluid">
        <a class="navbar-brand ms-5" href="index.php" style="font-size: 1.5em">Factio</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto">

                <!-- カテゴリー -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle me-4" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: #ED6565">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-cart2 collapse navbar-collapse mx-auto my-2" width="2em" height="2em" viewBox="0 0 16 16">
                            <path d="M1 2.5A1.5 1.5 0 0 1 2.5 1h3A1.5 1.5 0 0 1 7 2.5v3A1.5 1.5 0 0 1 5.5 7h-3A1.5 1.5 0 0 1 1 5.5v-3zM2.5 2a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zm6.5.5A1.5 1.5 0 0 1 10.5 1h3A1.5 1.5 0 0 1 15 2.5v3A1.5 1.5 0 0 1 13.5 7h-3A1.5 1.5 0 0 1 9 5.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zM1 10.5A1.5 1.5 0 0 1 2.5 9h3A1.5 1.5 0 0 1 7 10.5v3A1.5 1.5 0 0 1 5.5 15h-3A1.5 1.5 0 0 1 1 13.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zm6.5.5A1.5 1.5 0 0 1 10.5 9h3a1.5 1.5 0 0 1 1.5 1.5v3a1.5 1.5 0 0 1-1.5 1.5h-3A1.5 1.5 0 0 1 9 13.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3z" />
                        </svg>
                        Category
                    </a>
                    <ul class="dropdown-menu">
                        <form action="category.php" method="post">
                            <li><button type="submit" class="dropdown-item" name="category" value="誕生日">誕生日</li>
                            <li><button type="submit" class="dropdown-item" name="category" value="ハロウィン">ハロウィン</a></li>
                            <li><button type="submit" class="dropdown-item" name="category" value="クリスマス">クリスマス</a></li>
                            <li><button type="submit" class="dropdown-item" name="category" value="年末年始">年末年始</a></li>
                            <li><button type="submit" class="dropdown-item" name="category" value="小物">小物</a></li>
                        </form>
                    </ul>
                </li>

                <!-- カート -->
                <li class="nav-item">
                    <a class="nav-link me-4" href="cart.php" style="color: #ED6565">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-cart2 collapse navbar-collapse mx-auto my-2" width="2em" height="2em" viewBox="0 0 16 16">
                            <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l1.25 5h8.22l1.25-5H3.14zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z" />
                        </svg>
                        Cart
                    </a>
                </li>

                <!-- ログイン -->
                <li class="nav-item">
                    <a class="nav-link me-5" href="login.php" style="color: #ED6565">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-door-closed collapse navbar-collapse mx-auto my-2" width="2em" height="2em" viewBox="0 0 16 16">
                            <path d="M3 2a1 1 0 0 1 1-1h8a1 1 0 0 1 1 1v13h1.5a.5.5 0 0 1 0 1h-13a.5.5 0 0 1 0-1H3V2zm1 13h8V2H4v13z" />
                            <path d="M9 9a1 1 0 1 0 2 0 1 1 0 0 0-2 0z" />
                        </svg>
                        Log in
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>