<div class="navbar bg-base-100 dark:bg-gray-800 border-b border-gray-200 dark:border-gray-700">
    <!-- Logo -->
    <div>
        <a href="{{ route('home') }}" class="text-xl btn btn-ghost">{{ config('app.name') }}</a>
    </div>

    <!-- Navigation Links -->
    <div class="flex-1">
        <ul class="menu menu-horizontal px-1">
            <li><a href="{{ route('page1') }}">Page 1</a></li>
            <li><a href="{{ route('page2') }}">Page 2</a></li>

            @auth
                <li>
                    <details>
                        <summary>Admin</summary>
                        <ul class="p-2 rounded bg-base-100 dark:bg-gray-700">
                            <li><a href="{{ route('posts.index') }}">Posts</a></li>
                            <li><a href="#">Link 2</a></li>
                        </ul>
                    </details>
                </li>
            @endauth
        </ul>
    </div>

    <!-- Authentication -->
    <div>
        @guest
            <a href="{{ route('register') }}" class="btn btn-primary">Register</a>
            <a href="{{ route('login') }}" class="btn btn-secondary">Login</a>
        @else
            <ul class="menu menu-horizontal px-1">
                <li>
                    <details>
                        <summary>{{ auth()->user()->name }}</summary>
                        <ul class="p-2 rounded bg-base-100 dark:bg-gray-700">
                            <li><a href="{{ route('profile.edit') }}">Profile</a></li>
                            <li><button form="logout">Logout</button></li>
                        </ul>
                    </details>
                </li>
            </ul>
            <form id="logout" action="{{ route('logout') }}" method="POST">
                @csrf
            </form>
        @endguest
    </div>
</div>
