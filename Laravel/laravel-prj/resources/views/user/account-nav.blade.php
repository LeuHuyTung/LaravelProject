    <div class="account-side-navigation">
        <button class="filter-btn active" data-show=".dashboard"><i class="fal fa-chart-bar"></i>
            <a href="{{ route('user.index') }}">Dashboard</a></button>
        <button class="filter-btn" data-show=".orders"><i class="fal fa-shopping-cart"></i> Orders</button>
        <button class="filter-btn" data-show=".address"><i class="fal fa-map-marker-alt"></i>
            Address</button>
        <button class="filter-btn" data-show=".accountdtls"><i class="fal fa-user"></i> Account
            Details</button>
        <a class="filter-btn" data-show=".dashboard"><i class="fal fa-shopping-basket"></i>
            Wishlist</a>
        <form action="{{ route('logout') }}" method="POST" id="logout-form">
            @csrf
            <a href="{{ route('logout') }}" class="filter-btn" data-show=".dashboard"
                onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i
                    class="fal fa-long-arrow-left"></i>
                Logout</a>
        </form>
    </div>
