<nav class="uk-navbar-container" uk-navbar>
    <div class="uk-navbar-left ml-2">
        <ul class="uk-navbar-nav">
            <li class="uk-active"><a href="#">Home</a></li>
            <li><a href="#">Customers</a></li>
            <li>
                <a href="#">Dropdown</a>
                <div class="uk-navbar-dropdown">
                    <ul class="uk-nav uk-navbar-dropdown-nav">
                        <li class="uk-active"><a href="#">Active</a></li>
                        <li><a href="#">Item</a></li>
                        <li><a href="#">Item</a></li>
                    </ul>
                </div>
            </li>
            <li><a href="#">Item</a></li>
        </ul>
    </div>
    <div class="uk-navbar-right mr-2">
        <ul class="uk-navbar-nav">
            <li class="uk-active">
                <x-theme-toggle />
            </li>
        </ul>
    </div>
</nav>