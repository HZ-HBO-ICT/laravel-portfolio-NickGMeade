<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Incorporating the external style sheet -->
    <link rel="stylesheet" type="text/css" href="/css/style.css" />
    <title>Nick Meade - @yield('title')</title>
</head>

<body>
<div class="grid-container">
    <div class="aside">
        <!-- Aside Menu -->
        <aside>
            <div class="dropdown">
                <button class="dropbtn">
                    <figure>
                        <img class="logo" src="/resources/images/hz-logo.png" alt="HZ Logo">
                        <figcaption><img class="menu" src="/resources/images/menu.png"></figcaption>
                    </figure>
                </button>
                <div class="dropdown-content">
                    <a href="https://hz.nl/en" target="_blank">HZ Website</a>
                    <a href="https://hz.nl/uploads/documents/Regelingen/OERS/2021-2022/HZ-Course-and-Examination-Regulations-2021-2022.pdf" target="_blank">HBO-ICT Course &#38 Examination Regulations</a>
                    <a href="https://hz.nl/uploads/documents/Regelingen/OERS/2020-2021/9.-Implementation-Regulations-ICT-Fulltime-2020-2021.pdf" target="_blank">HBO-ICT Implementation Regulations </a>
                    <a href="https://learn.hz.nl/my/" target="_blank">HZ-Learn Environment</a>
                    <a href="https://teams.microsoft.com/l/channel/19%3a2e2afa0286b04932be16cb8ad2d9d2c0%40thread.skype/General?groupId=95bddebc-a340-4d88-81fc-b80e0bfc70c3&tenantId=4c16deb3-342d-4fca-bcd5-b1429308034c" target="_blank">MS Teams Environment</a>
                    <a href="https://apps.hz.nl/angular/studievoortgang/studiestatus" target="_blank">MyHZ Study Progress Page</a>
                    <a href="https://github.com/NickGMeade" target="_blank">Github Environment</a>
                </div>
            </div>
        </aside>
    </div>
    <div class="header">
        <!-- Page Header -->
        <header>
            <h1>@yield('header')</h1>
        </header>
    </div>
    <div class="nav">
        <!-- Navigation Bar -->
        <nav>
            <ul>
                <li><a class="{{ Request::path() === '/' ? 'current_page' : '' }}" href="/">Home</a></li>
                <li><a class="{{ Request::path() === 'profile' ? 'current_page' : '' }}" href="/profile">Profile</a></li>
                <li><a class="{{ Request::path() === 'dashboard' ? 'current_page' : '' }}" href="/dashboard">Dashboard</a></li>
                <li><a class="{{ Request::path() === 'faq' ? 'current_page' : '' }}" href="/faq">FAQ </a></li>
                <li><a class="{{ Request::path() === 'blog' ? 'current_page' : '' }}" href="/blog">Blog</a></li>
            </ul>
        </nav>
    </div>
    <div class="@yield('div-type')">
        <!-- Main Text Body -->
        <main>
            <article>
                @yield('content')
            </article>
        </main>
    </div>
    <div class="footer">
        <!-- Page Footer -->
        <footer><h3> &#169 Nicholas Meade 2021 </h3></footer>
    </div>
</div>
</body>
</html>
