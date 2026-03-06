<header class="site-header">
    <div class="container header__inner">
        <a href="../pages/Home.php" class="brand" aria-label="EduSync — Início">
            <img class="brand__logo" src="../img/logon.png" alt="EduSync" />
        </a>
        <nav class="nav" aria-label="Principal">
            <ul class="nav__list">
                <li><a class="nav__link" href="../pages/instituicoes.php">Instituições</a></li>
                <li><a class="nav__link" href="#">Cursos</a></li> <!-- Ainda em papel. Desenvolver. -->
                <li><a class="nav__link" href="#">Vestibulares</a></li> <!-- Ainda em papel. Desenvolver. -->
                <li><a class="nav__link" href="#">Eventos</a></li> <!-- Ainda em papel. Desenvolver. -->
                <li><a class="nav__link" href="#">Notícias</a></li><!-- Ainda em papel. Desenvolver. -->
            </ul>
        </nav>
        <div class="header__actions">
            <form class="search" role="search" aria-label="Buscar">
                <input class="search__input" type="search" placeholder="Buscar" />
            </form>
            <a id="open-login-choice" class="button button--ghost js-login-trigger" href="login.php">Login</a>
            <button class="button button--dark js-admin-trigger" type="button" aria-controls="admin-login">Acesso Admin</button>
        </div>
    </div>
</header>