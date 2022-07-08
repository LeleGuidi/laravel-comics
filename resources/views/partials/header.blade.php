<header class="header">
    <div class="header_top">
        <div class="header_top_container">
            <a href="/#">dc power visa<i class="fa-regular fa-registered"></i></a>
            <a href="/#">additional dc sites <i class="fa-solid fa-caret-down"></i></a>
        </div>
    </div>
    <div class="header_container">
        <div class="header_logo">
            <img src="{{asset('img/dc-logo.png')}}" alt="DC LOGO">
        </div>
        <div class="header_nav">
            <nav>
                <ul>
                    <li class="{{Route::CurrentRouteName() == 'Characters' ? 'active' : ''}}">
                        <a href="/#">Characters</a>
                    </li>
                    <li class="{{Route::CurrentRouteName() == 'Comics' ? 'active' : ''}}">
                        <a href="/#">Comics</a>
                    </li>
                    <li class="{{Route::CurrentRouteName() == 'Movies' ? 'active' : ''}}">
                        <a href="/#">Movies</a>
                    </li>
                    <li class="{{Route::CurrentRouteName() == 'TV' ? 'active' : ''}}">
                        <a href="/#">TV</a>
                    </li>
                    <li class="{{Route::CurrentRouteName() == 'Games' ? 'active' : ''}}">
                        <a href="/#">Games</a>
                    </li>
                    <li class="{{Route::CurrentRouteName() == 'Collectibles' ? 'active' : ''}}">
                        <a href="/#">Collectibles</a>
                    </li>
                    <li class="{{Route::CurrentRouteName() == 'Videos' ? 'active' : ''}}">
                        <a href="/#">Videos</a>
                    </li>
                    <li class="{{Route::CurrentRouteName() == 'Fans' ? 'active' : ''}}">
                        <a href="/#">Fans</a>
                    </li>
                    <li class="{{Route::CurrentRouteName() == 'News' ? 'active' : ''}}">
                        <a href="/#">News</a>
                    </li>
                    <li class="{{Route::CurrentRouteName() == 'Shop' ? 'active' : ''}}">
                        <a href="/#">Shop <i class="fa-solid fa-caret-down"></i></a>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="header_search">
            <input type="text" placeholder="Search"><i class="fa-solid fa-magnifying-glass"></i>
        </div>
    </div>
</header>