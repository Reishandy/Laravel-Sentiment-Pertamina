
<div class="navbar bg-base-100 shadow-sm flex-col sm:flex-row">
    <div class="flex flex-row flex-1 w-full sm:w-auto text-left py-2 sm:py-auto">
        <div class="flex flex-col justify-center w-full sm:w-auto">
            <a href="{{ route('home') }}" class="btn btn-ghost text-xl">{{ config('app.name', 'Laravel') }}</a>
        </div>

        {{-- Navlinks --}}
        <div class="hidden sm:flex gap-4 ml-4">
            <a href="{{ route('dashboard') }}" class="btn btn-ghost {{ request()->routeIs('dashboard') ? 'btn-active' : '' }}">Dashboard</a>
            <a href="{{ route('about') }}" class="btn btn-ghost {{ request()->routeIs('about') ? 'btn-active' : '' }}">About</a>
        </div>
    </div>

    <div class="flex-none flex justify-between items-center w-full sm:hidden">
        <div class="flex gap-4">
            <a href="{{ route('dashboard') }}" class="btn btn-ghost {{ request()->routeIs('dashboard') ? 'btn-active' : '' }}">Dashboard</a>
            <a href="{{ route('about') }}" class="btn btn-ghost {{ request()->routeIs('about') ? 'btn-active' : '' }}">About</a>
        </div>
    </div>

    <div class="divider mb-0 mt-2 sm:hidden"></div>

    <div class="flex-none flex justify-between items-center w-full sm:justify-end sm:w-auto">
        {{-- theme selector --}}
        <div class="dropdown dropdown-start sm:dropdown-end dropdown-hover">
            <div tabindex="0" role="button" class="btn btn-ghost m-1">Theme</div>
            <ul tabindex="0" class="dropdown-content menu bg-base-200 rounded-box z-1 w-52 p-2 shadow-sm">
                <x-theme-category title="Dark" :themes="[
                                ['label' => 'Dark', 'value' => 'dark'],
                                ['label' => 'Synthwave', 'value' => 'synthwave'],
                                ['label' => 'Coffee', 'value' => 'coffee'],
                                ['label' => 'Dracula', 'value' => 'dracula'],
                                ['label' => 'Abyss', 'value' => 'abyss'],
                                ['label' => 'Aqua', 'value' => 'aqua'],
                            ]"/>

                <x-theme-category title="Light" :themes="[
                                ['label' => 'Light', 'value' => 'light'],
                                ['label' => 'Retro', 'value' => 'retro'],
                                ['label' => 'Cyberpunk', 'value' => 'cyberpunk'],
                                ['label' => 'Pastel', 'value' => 'pastel'],
                                ['label' => 'Cupcake', 'value' => 'cupcake'],
                                ['label' => 'Lofi', 'value' => 'lofi'],
                                ['label' => 'Wireframe', 'value' => 'wireframe'],
                                ['label' => 'Lemonade', 'value' => 'lemonade'],
                                ['label' => 'Caramellatte', 'value' => 'caramellatte'],
                            ]"/>
            </ul>
        </div>

        <div class="dropdown dropdown-end dropdown-hover">
            <div tabindex="0" role="button" class="btn btn-ghost m-1">{{ Auth::user()->name }}</div>
            <ul tabindex="0" class="dropdown-content menu bg-base-200 rounded-box z-1 w-52 p-2 shadow-sm">
                <li><a href="{{ route('profile.edit') }}">Profile</a></li>
                <li>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <button class="text-error hover:cursor-pointer">Log Out</button>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</div>
