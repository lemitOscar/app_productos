<nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="flex-shrink-0 flex items-center">
                    <h2 class="font-bold text-xl text-gray-800 leading-tight">
                        @yield('titulo')
                    </h2>
                </div>

                <!-- Navigation Links -->
                <!--<div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-jet-nav-link href="" :active="request()->routeIs('dashboard')">
                        
                    </x-jet-nav-link>
                </div>-->

                <!--<div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-jet-nav-link href="" :active="request()->routeIs('productos')">
                        
                    </x-jet-nav-link>
                </div>-->

                <!--<div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-jet-nav-link href="" :active="request()->routeIs('producto.new')">
                        
                    </x-jet-nav-link>
                </div>-->
            </div>

            <div class="hidden sm:flex sm:items-center sm:ml-6">
                <!-- Teams Dropdown -->
                @if (Laravel\Jetstream\Jetstream::hasTeamFeatures())
                    <div class="ml-3 relative">
                        <x-jet-dropdown align="right" width="60">
                            <x-slot name="trigger">
                                <span class="inline-flex rounded-md">
                                    <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:bg-gray-50 hover:text-gray-700 focus:outline-none focus:bg-gray-50 active:bg-gray-50 transition ease-in-out duration-150">
                                        {{ Auth::user()->currentTeam->name }}

                                        <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M10 3a1 1 0 01.707.293l3 3a1 1 0 01-1.414 1.414L10 5.414 7.707 7.707a1 1 0 01-1.414-1.414l3-3A1 1 0 0110 3zm-3.707 9.293a1 1 0 011.414 0L10 14.586l2.293-2.293a1 1 0 011.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z" clip-rule="evenodd" />
                                        </svg>
                                    </button>
                                </span>
                            </x-slot>

                            <x-slot name="content">
                                <div class="w-60">
                                    <!-- Team Management -->
                                    <div class="block px-4 py-2 text-xs text-gray-400">
                                        {{ __('Manage Team') }}
                                    </div>

                                    <!-- Team Settings -->
                                    <x-jet-dropdown-link href="{{ route('teams.show', Auth::user()->currentTeam->id) }}">
                                        {{ __('Team Settings') }}
                                    </x-jet-dropdown-link>

                                    @can('create', Laravel\Jetstream\Jetstream::newTeamModel())
                                        <x-jet-dropdown-link href="{{ route('teams.create') }}">
                                            {{ __('Create New Team') }}
                                        </x-jet-dropdown-link>
                                    @endcan

                                    <div class="border-t border-gray-100"></div>

                                    <!-- Team Switcher -->
                                    <div class="block px-4 py-2 text-xs text-gray-400">
                                        {{ __('Switch Teams') }}
                                    </div>

                                    @foreach (Auth::user()->allTeams() as $team)
                                        <x-jet-switchable-team :team="$team" />
                                    @endforeach
                                </div>
                            </x-slot>
                        </x-jet-dropdown>
                    </div>
                @endif

                <!-- Settings Dropdown -->
                <div class="ml-3 relative">
                    <x-jet-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                                <button class="flex text-sm focus:outline-none focus:border-gray-300 transition duration-150 ease-in-out">
                                    <span class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                                        {{ Auth::user()->name }}
                                        <img class="ml-2 h-8 w-8 rounded-full object-cover border-2 border-transparent" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}"/>
                                        
                                        <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                        </svg>
                                    </span>
                                    
                                    
                                </button>
                            @else
                                <span class="inline-flex rounded-md">
                                    <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                                        {{ Auth::user()->name }}

                                        <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                        </svg>
                                    </button>
                                </span>
                            @endif
                        </x-slot>

                        <x-slot name="content">
                            <!-- Account Management -->
                            <div class="block px-4 py-2 text-xs text-gray-400">
                                {{ __('Administrar Cuenta') }}
                            </div>

                            <x-jet-dropdown-link href="{{ route('profile.show') }}">
                                {{ __('Perfil') }}
                            </x-jet-dropdown-link>

                            @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                                <x-jet-dropdown-link href="{{ route('api-tokens.index') }}">
                                    {{ __('API Tokens') }}
                                </x-jet-dropdown-link>
                            @endif

                            <div class="border-t border-gray-100"></div>

                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <x-jet-dropdown-link href="{{ route('logout') }}"
                                         onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                    {{ __('Cerrar Sesión') }}
                                </x-jet-dropdown-link>
                            </form>
                        </x-slot>
                    </x-jet-dropdown>
                </div>
            </div>

            <!-- Hamburger -->
            <div class="-mr-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-jet-responsive-nav-link href="{{ route('productos') }}" :active="request()->routeIs('productos')">
                {{ __('Productos') }}
            </x-jet-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="flex items-center px-4">
                @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                    <div class="flex-shrink-0 mr-3">
                        <img class="h-10 w-10 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                    </div>
                @endif

                <div>
                    <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                    <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
                </div>
            </div>

            <div class="mt-3 space-y-1">
                <!-- Account Management -->
                <x-jet-responsive-nav-link href="{{ route('profile.show') }}" :active="request()->routeIs('profile.show')">
                    {{ __('Profile') }}
                </x-jet-responsive-nav-link>

                @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                    <x-jet-responsive-nav-link href="{{ route('api-tokens.index') }}" :active="request()->routeIs('api-tokens.index')">
                        {{ __('API Tokens') }}
                    </x-jet-responsive-nav-link>
                @endif

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-jet-responsive-nav-link href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                    this.closest('form').submit();">
                        {{ __('Logout') }}
                    </x-jet-responsive-nav-link>
                </form>

                <!-- Team Management -->
                @if (Laravel\Jetstream\Jetstream::hasTeamFeatures())
                    <div class="border-t border-gray-200"></div>

                    <div class="block px-4 py-2 text-xs text-gray-400">
                        {{ __('Manage Team') }}
                    </div>

                    <!-- Team Settings -->
                    <x-jet-responsive-nav-link href="{{ route('teams.show', Auth::user()->currentTeam->id) }}" :active="request()->routeIs('teams.show')">
                        {{ __('Team Settings') }}
                    </x-jet-responsive-nav-link>

                    @can('create', Laravel\Jetstream\Jetstream::newTeamModel())
                        <x-jet-responsive-nav-link href="{{ route('teams.create') }}" :active="request()->routeIs('teams.create')">
                            {{ __('Create New Team') }}
                        </x-jet-responsive-nav-link>
                    @endcan

                    <div class="border-t border-gray-200"></div>

                    <!-- Team Switcher -->
                    <div class="block px-4 py-2 text-xs text-gray-400">
                        {{ __('Switch Teams') }}
                    </div>

                    @foreach (Auth::user()->allTeams() as $team)
                        <x-jet-switchable-team :team="$team" component="jet-responsive-nav-link" />
                    @endforeach
                @endif
            </div>
        </div>
    </div>
</nav>

<div class="overflow-y h-screen">
    <div class="flex flex-col float-left w-64 h-screen px-4 py-2 bg-white bg-scroll dark:bg-gray-800 dark:border-gray-600">
        <div class="flex flex-col justify-between flex-1 mt-6">
            <nav>
                <a class="flex items-center px-4 py-2 text-gray-700 hover:bg-gray-200 rounded dark:bg-gray-700 dark:text-gray-200" href="{{ route('productos') }}" :active="request()->routeIs('productos')">
                    <svg xmlns="http://www.w3.org/2000/svg" id="Layer_3" data-name="Layer 3" viewBox="0 0 64 64" width="1.25rem" height="1.25rem">
                    <path d="M54.83,47.416,55.9,38.89A4,4,0,0,0,55,31H53.909a6,6,0,0,0-4.676-4.852l3.682-15.34a7.947,7.947,0,0,0-13.4-7.425l-.567-1.7a1,1,0,0,0-1.655-.391L35.8,2.783,32.447,1.105a1,1,0,0,0-1.376,1.267l1.58,3.95a9.02,9.02,0,0,0-6.406,6.626A5.717,5.717,0,0,1,25,9.4V8.816A3,3,0,0,0,27,6V4a3,3,0,0,0-3-3H16a3,3,0,0,0-3,3V6a3,3,0,0,0,2,2.816V9.4a5.724,5.724,0,0,1-2.555,4.773A7.722,7.722,0,0,0,9,20.605V31a4,4,0,0,0-.9,7.89L9.17,47.416,5.914,50.672A3.121,3.121,0,0,0,8.121,56a3.134,3.134,0,0,0,2.026-.766l.423,3.386A5.008,5.008,0,0,0,15.531,63H48.469a5.008,5.008,0,0,0,4.961-4.38l.423-3.386A3.1,3.1,0,0,0,59,52.879a3.1,3.1,0,0,0-.914-2.207ZM46.414,39h7.453l-.828,6.625ZM57,35a2,2,0,0,1-2,2H44.414l-4-4H55A2,2,0,0,1,57,35Zm-5.142-4H38.414l-2.086-2.086A3.142,3.142,0,0,0,34.121,28,3.1,3.1,0,0,0,32,28.845a3.122,3.122,0,0,0-1-.628V20.605c0-.158-.02-.314-.029-.471A3.98,3.98,0,0,1,32.8,21.149a1,1,0,0,0,1.4,0,3.984,3.984,0,0,1,6.522,1.417,1,1,0,0,0,1.2.6A3.948,3.948,0,0,1,43,23a4,4,0,0,1,4,4,1,1,0,0,0,1,1A4,4,0,0,1,51.858,31ZM32,33.414,35.586,37H28.414ZM45.182,3a5.953,5.953,0,0,1,5.788,7.341L47.82,23.463A5.975,5.975,0,0,0,43,21a5.235,5.235,0,0,0-.781.06,5.93,5.93,0,0,0-4.108-2.945l1.16-9.859A5.952,5.952,0,0,1,45.182,3ZM33.905,4.071l1.648.824a1,1,0,0,0,1.154-.188l.855-.856.515,1.541a7.749,7.749,0,0,0-.423,1.015A8.942,8.942,0,0,0,35,6c-.107,0-.21.012-.316.016ZM35,8a6.982,6.982,0,0,1,2.244.368L36.1,18.07a5.93,5.93,0,0,0-2.6,1.06,5.937,5.937,0,0,0-2.947-1.087,7.7,7.7,0,0,0-2.529-3.518A7,7,0,0,1,35,8ZM15,4a1,1,0,0,1,1-1h8a1,1,0,0,1,1,1V6a1,1,0,0,1-1,1H16a1,1,0,0,1-1-1ZM11,20.605a5.724,5.724,0,0,1,2.555-4.773A7.722,7.722,0,0,0,17,9.4V9h6V9.4a7.722,7.722,0,0,0,3.445,6.437A5.724,5.724,0,0,1,29,20.605v7.538a3.121,3.121,0,0,0-1.328.771L27,29.586V22a1,1,0,0,0-1-1H14a1,1,0,0,0-1,1v9H11ZM25,31H15V23H25ZM7,35a2,2,0,0,1,2-2H23.586l-4,4H9A2,2,0,0,1,7,35Zm3.133,4h7.453l-6.625,6.625ZM8.121,54a1.121,1.121,0,0,1-.793-1.914L29.086,30.328A1.121,1.121,0,0,1,31,31.121a1.112,1.112,0,0,1-.328.793L8.914,53.672A1.133,1.133,0,0,1,8.121,54ZM23,44V56a1,1,0,0,1-2,0V44.414l1.344-1.344A.994.994,0,0,1,23,44ZM51.445,58.372A3,3,0,0,1,48.469,61H15.531a3,3,0,0,1-2.976-2.628l-.613-4.9L19,46.414V56a3,3,0,0,0,6,0V44a2.985,2.985,0,0,0-1.2-2.385L26.414,39H37.586L40.2,41.615A2.985,2.985,0,0,0,39,44V56a3,3,0,0,0,6,0V46.414l7.058,7.058ZM41,44a.994.994,0,0,1,.656-.93L43,44.414V56a1,1,0,0,1-2,0ZM55.879,54a1.133,1.133,0,0,1-.793-.328L33.328,31.914A1.121,1.121,0,0,1,34.121,30a1.133,1.133,0,0,1,.793.328L56.672,52.086A1.121,1.121,0,0,1,55.879,54Z"/><path d="M32,41a3,3,0,0,0-3,3V56a3,3,0,0,0,6,0V44A3,3,0,0,0,32,41Zm1,15a1,1,0,0,1-2,0V44a1,1,0,0,1,2,0Z"/><rect x="44" y="6.459" width="2" height="6.083" transform="translate(28.231 52.326) rotate(-80.538)"/><rect x="43" y="11.459" width="2" height="6.083" transform="translate(22.464 55.518) rotate(-80.538)"/>
                    </svg>
                    <span class="mx-4 font-medium">{{ __('Productos') }}</span>
                </a>

                <a class="flex items-center px-4 py-2 mt-5 text-gray-600 transition-colors duration-200 transform rounded dark:text-gray-400 hover:bg-gray-200 dark:hover:bg-gray-700 dark:hover:text-gray-200 hover:text-gray-700" href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" id="Capa_1" enable-background="new 0 0 512 512" height="1.25rem" viewBox="0 0 512 512" width="1.25rem">
                        <g>
                            <path d="m256 207c47.972 0 87-39.028 87-87s-39.028-87-87-87-87 39.028-87 87 39.028 87 87 87zm0-144c31.43 0 57 25.57 57 57s-25.57 57-57 57-57-25.57-57-57 25.57-57 57-57z"/>
                            <path d="m432 207c30.327 0 55-24.673 55-55s-24.673-55-55-55-55 24.673-55 55 24.673 55 55 55zm0-80c13.785 0 25 11.215 25 25s-11.215 25-25 25-25-11.215-25-25 11.215-25 25-25z"/>
                            <path d="m444.1 241h-23.2c-27.339 0-50.939 16.152-61.693 39.352-22.141-24.17-53.944-39.352-89.228-39.352h-27.957c-35.284 0-67.087 15.182-89.228 39.352-10.755-23.2-34.355-39.352-61.694-39.352h-23.2c-37.44 0-67.9 30.276-67.9 67.49v109.21c0 16.156 13.194 29.3 29.412 29.3h91.727c1.538 17.9 16.59 32 34.883 32h199.957c18.292 0 33.344-14.1 34.883-32h90.679c16.796 0 30.46-13.61 30.46-30.34v-108.17c-.001-37.214-30.461-67.49-67.901-67.49zm-414.1 67.49c0-20.672 17.002-37.49 37.9-37.49h23.2c20.898 0 37.9 16.818 37.9 37.49v10.271c-10.087 26.264-8 42.004-8 98.239h-91zm331 135.489c0 2.769-2.252 5.021-5.021 5.021h-199.958c-2.769 0-5.021-2.253-5.021-5.021v-81.957c0-50.19 40.832-91.022 91.021-91.022h27.957c50.19 0 91.022 40.832 91.022 91.021zm121-27.319c0 .517 5.592.34-91 .34 0-56.651 2.071-72.018-8-98.239v-10.271c0-20.672 17.002-37.49 37.9-37.49h23.2c20.898 0 37.9 16.818 37.9 37.49z"/>
                            <path d="m80 207c30.327 0 55-24.673 55-55s-24.673-55-55-55-55 24.673-55 55 24.673 55 55 55zm0-80c13.785 0 25 11.215 25 25s-11.215 25-25 25-25-11.215-25-25 11.215-25 25-25z"/>
                        </g>
                    </svg>

                    <span class="mx-4 font-medium">Clientes</span>
                </a>

                <hr class="my-6 dark:border-gray-600" />

                <a class="flex items-center px-4 py-2 mt-5 text-gray-600 transition-colors duration-200 transform rounded dark:text-gray-400 hover:bg-gray-200 dark:hover:bg-gray-700 dark:hover:text-gray-200 hover:text-gray-700" href="{{ route('usuarios') }}" :active="request()->routeIs('usuarios')">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 477.869 477.869" style="enable-background:new 0 0 477.869 477.869;" xml:space="preserve" width="1.25rem" height="1.25rem">
                        <g>
                            <g>
                                <path d="M387.415,233.496c48.976-44.029,52.987-119.424,8.958-168.4C355.991,20.177,288.4,12.546,239.02,47.332    c-53.83-37.99-128.264-25.149-166.254,28.68c-34.859,49.393-27.259,117.054,17.689,157.483    c-55.849,29.44-90.706,87.481-90.453,150.613v51.2c0,9.426,7.641,17.067,17.067,17.067h443.733    c9.426,0,17.067-7.641,17.067-17.067v-51.2C478.121,320.976,443.264,262.935,387.415,233.496z M307.201,59.842    c47.062-0.052,85.256,38.057,85.309,85.119c0.037,33.564-19.631,64.023-50.237,77.799c-1.314,0.597-2.628,1.143-3.959,1.707    c-4.212,1.699-8.556,3.051-12.988,4.045c-0.853,0.188-1.707,0.29-2.577,0.461c-4.952,0.949-9.977,1.457-15.019,1.519    c-2.27,0-4.557-0.171-6.827-0.375c-0.853,0-1.707,0-2.56-0.171c-9.7-1.142-19.136-3.923-27.904-8.226    c-0.324-0.154-0.7-0.137-1.024-0.273c-1.707-0.819-3.413-1.536-4.932-2.458c0.137-0.171,0.222-0.358,0.358-0.529    c7.826-10.056,13.996-21.296,18.278-33.297l0.529-1.434c1.947-5.732,3.459-11.602,4.523-17.562c0.154-0.87,0.273-1.707,0.41-2.645    c0.987-6.067,1.506-12.2,1.553-18.347c-0.049-6.135-0.568-12.257-1.553-18.313c-0.137-0.887-0.256-1.707-0.41-2.645    c-1.064-5.959-2.576-11.83-4.523-17.562l-0.529-1.434c-4.282-12.001-10.453-23.241-18.278-33.297    c-0.137-0.171-0.222-0.358-0.358-0.529C277.449,63.831,292.19,59.843,307.201,59.842z M85.335,145.176    c-0.121-47.006,37.886-85.21,84.892-85.331c22.034-0.057,43.232,8.434,59.134,23.686c0.99,0.956,1.963,1.911,2.918,2.901    c2.931,3.071,5.634,6.351,8.09,9.813c0.751,1.058,1.434,2.185,2.133,3.277c2.385,3.671,4.479,7.523,6.263,11.52    c0.427,0.973,0.751,1.963,1.126,2.935c1.799,4.421,3.215,8.989,4.233,13.653c0.12,0.512,0.154,1.024,0.256,1.553    c2.162,10.597,2.162,21.522,0,32.119c-0.102,0.529-0.137,1.041-0.256,1.553c-1.017,4.664-2.433,9.232-4.233,13.653    c-0.375,0.973-0.7,1.963-1.126,2.935c-1.786,3.991-3.88,7.837-6.263,11.503c-0.7,1.092-1.382,2.219-2.133,3.277    c-2.455,3.463-5.159,6.742-8.09,9.813c-0.956,0.99-1.929,1.946-2.918,2.901c-6.91,6.585-14.877,11.962-23.569,15.906    c-1.382,0.631-2.782,1.212-4.198,1.707c-4.114,1.633-8.347,2.945-12.663,3.925c-1.075,0.239-2.185,0.375-3.277,0.563    c-4.634,0.863-9.333,1.336-14.046,1.417h-1.877c-4.713-0.08-9.412-0.554-14.046-1.417c-1.092-0.188-2.202-0.324-3.277-0.563    c-4.316-0.98-8.55-2.292-12.663-3.925c-1.417-0.563-2.816-1.143-4.198-1.707C105.013,209.057,85.374,178.677,85.335,145.176z     M307.201,418.242H34.135v-34.133c-0.25-57.833,36.188-109.468,90.76-128.614c29.296,12.197,62.249,12.197,91.546,0    c5.698,2.082,11.251,4.539,16.623,7.356c3.55,1.826,6.827,3.908,10.24,6.007c2.219,1.382,4.471,2.731,6.605,4.25    c3.294,2.338,6.4,4.881,9.455,7.492c1.963,1.707,3.908,3.413,5.751,5.12c2.816,2.662,5.461,5.478,8.004,8.363    c1.826,2.082,3.601,4.198,5.291,6.383c2.236,2.867,4.369,5.803,6.349,8.823c1.707,2.56,3.226,5.222,4.727,7.885    c1.707,2.935,3.277,5.871,4.71,8.926c1.434,3.055,2.697,6.4,3.925,9.66c1.075,2.833,2.219,5.649,3.106,8.533    c1.195,3.959,2.031,8.055,2.867,12.151c0.512,2.423,1.178,4.796,1.553,7.253c1.011,6.757,1.53,13.579,1.553,20.412V418.242z     M443.735,418.242h-102.4v-34.133c0-5.342-0.307-10.633-0.785-15.872c-0.137-1.536-0.375-3.055-0.546-4.591    c-0.461-3.772-0.99-7.509-1.707-11.213c-0.307-1.581-0.631-3.169-0.973-4.762c-0.819-3.8-1.769-7.566-2.85-11.298    c-0.358-1.229-0.683-2.475-1.058-3.686c-4.779-15.277-11.704-29.797-20.565-43.127l-0.666-0.973    c-2.935-4.358-6.07-8.573-9.404-12.646l-0.119-0.154c-3.413-4.232-7.117-8.346-11.008-12.237c0.222,0,0.461,0,0.7,0    c4.816,0.633,9.666,0.975,14.524,1.024h0.939c4.496-0.039,8.985-0.33,13.449-0.87c1.399-0.171,2.782-0.427,4.181-0.649    c3.63-0.557,7.214-1.28,10.752-2.167c1.007-0.256,2.031-0.495,3.055-0.785c4.643-1.263,9.203-2.814,13.653-4.642    c54.612,19.127,91.083,70.785,90.829,128.649V418.242z"/>
                            </g>
                        </g>
                    </svg>

                    <span class="mx-4 font-medium">{{ __('Usuarios') }}</span>
                </a>

                <a class="flex items-center px-4 py-2 mt-5 text-gray-600 transition-colors duration-200 transform rounded dark:text-gray-400 hover:bg-gray-200 dark:hover:bg-gray-700 dark:hover:text-gray-200 hover:text-gray-700" href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" id="Layer_3" enable-background="new 0 0 64 64" height="1.25rem" viewBox="0 0 64 64" width="1.25rem">
                        <g>
                            <path d="m62.732 14.373c-7.92-8.499-19.121-13.373-30.732-13.373s-22.813 4.874-30.732 13.373c-.173.185-.269.429-.269.682l.001 46.945c0 .552.448 1 1 1h10 12 12 26c.552 0 1-.448 1-1l.001-46.945c0-.253-.096-.497-.269-.682zm-3.129-.318h-55.207c7.406-7.052 17.336-11.055 27.604-11.055s20.198 4.003 27.603 11.055zm-48.603 9.945v-3c0-.551.449-1 1-1h40c.551 0 1 .449 1 1v3zm40 2v2h-38v-2zm-15 23h-11v-11c0-.552-.448-1-1-1h-11v-3h38v27h-14v-11c0-.552-.448-1-1-1zm-7 2h2v2h-2zm-12 0h2v2h-2zm-4-2v-10h2v3c0 .552.448 1 1 1h4c.552 0 1-.448 1-1v-3h2v10zm38-17h-38v-2h38zm-34 7h2v2h-2zm-4 12h2v3c0 .552.448 1 1 1h4c.552 0 1-.448 1-1v-3h2v10h-10zm12 10v-10h2v3c0 .552.448 1 1 1h4c.552 0 1-.448 1-1v-3h2v10zm28 0v-32-3h1c.552 0 1-.448 1-1v-4c0-1.654-1.346-3-3-3h-40c-1.654 0-3 1.346-3 3v4c0 .552.448 1 1 1h1v3 9 12 11h-8l-.001-44.946h58.002v17.945h-5.001c-.552 0-1 .448-1 1v10c0 .552.448 1 1 1h5v15h-8zm8-20v3h-4v-8h4.001v3h-2v2z"/>
                            <path d="m22 10h20v2h-20z"/><path d="m22 6h20v2h-20z"/>
                            <path d="m15 57h6v2h-6z"/>
                            <path d="m15 45h6v2h-6z"/>
                            <path d="m27 57h6v2h-6z"/>
                            <path d="m6 35h2v2h-2z"/>
                            <path d="m6 39h2v2h-2z"/>
                            <path d="m6 43h2v2h-2z"/>
                        </g>
                    </svg>

                    <span class="mx-4 font-medium">Almacenes</span>
                </a>

                <hr class="my-6 dark:border-gray-600" />

                <a class="flex items-center px-4 py-2 mt-5 text-gray-600 transition-colors duration-200 transform rounded dark:text-gray-400 hover:bg-gray-200 dark:hover:bg-gray-700 dark:hover:text-gray-200 hover:text-gray-700" href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" width="1.25rem" height="1.25rem">
                        <g id="sign_·_ecommerce_·_shopping_·_tag_·_sale" data-name="sign · ecommerce · shopping · tag · sale">
                            <path d="M23.1,43.728a3,3,0,0,0-4.243,0l-1.414,1.414a1,1,0,0,1-1.415,0l-1.414-1.414a1,1,0,0,1,0-1.415l2.828-2.828a1,1,0,0,0-1.414-1.414L13.2,40.9a3,3,0,0,0,0,4.243l1.414,1.414a3,3,0,0,0,4.243,0l1.414-1.414a1,1,0,0,1,1.415,0L23.1,46.556a1,1,0,0,1,0,1.415L20.272,50.8a1,1,0,1,0,1.414,1.414l2.829-2.828a3,3,0,0,0,0-4.243Z"/>
                            <path d="M34.515,37.628,23.908,31.264a1,1,0,0,0-1.221.15l-1.415,1.415a1,1,0,0,0-.15,1.221l6.364,10.607a1,1,0,1,0,1.715-1.03l-1.72-2.866,3.138-3.138,2.866,1.72a1,1,0,0,0,1.03-1.715ZM26.42,38.994l-3.182-5.3.31-.31,5.3,3.182Z"/>
                            <path d="M40.657,30.414,37.121,33.95l-7.778-7.778a1,1,0,1,0-1.414,1.414l8.485,8.485a1,1,0,0,0,1.414,0l4.243-4.243a1,1,0,0,0-1.414-1.414Z"/><path d="M47.314,23.757l-2.829,2.829-2.828-2.829,1.414-1.414a1,1,0,0,0-1.414-1.414l-1.414,1.414-2.829-2.828,2.829-2.829a1,1,0,1,0-1.414-1.414l-3.536,3.536a1,1,0,0,0,0,1.414l8.485,8.485a1,1,0,0,0,1.414,0l3.536-3.536a1,1,0,1,0-1.414-1.414Z"/><path d="M58.261,17.63,59.373,10.4A5,5,0,0,0,53.694,4.7l-15.4,2.3a9.054,9.054,0,0,0-5.036,2.538L3.3,39.485a5,5,0,0,0,0,7.071L17.444,60.7a5,5,0,0,0,7.071,0l16.4-16.4C42.63,52.683,46.488,58,51,58c6.168,0,11-10.1,11-23C62,28.252,60.635,21.959,58.261,17.63ZM23.1,59.284a3.071,3.071,0,0,1-4.243,0L4.716,45.142a3,3,0,0,1,0-4.243L34.669,10.946a7.048,7.048,0,0,1,3.917-1.973l15.4-2.3a3.023,3.023,0,0,1,.453-.034A3,3,0,0,1,57.4,10.1l-.775,5.042a10.3,10.3,0,0,0-1.947-1.859,3.971,3.971,0,0,0-1.168-2.787,4.1,4.1,0,0,0-5.657,0A4,4,0,1,0,54.1,15.378a11.167,11.167,0,0,1,2.085,2.629l-1.142,7.424a6.955,6.955,0,0,1-1.97,3.885ZM51,14a3.8,3.8,0,0,1,1.421.286,2.028,2.028,0,0,1-.329.451,2.026,2.026,0,1,1,.22-2.561A5.621,5.621,0,0,0,51,12a1,1,0,0,0,0,2Zm0,42c-3.614,0-7.017-5.5-8.365-13.422L54.482,30.73a8.934,8.934,0,0,0,2.532-5l.7-4.523A39.263,39.263,0,0,1,60,35C60,46.383,55.878,56,51,56Z"/>
                        </g>
                    </svg>

                    <span class="mx-4 font-medium">Ventas</span>
                </a>

                <a class="flex items-center px-4 py-2 mt-5 text-gray-600 transition-colors duration-200 transform rounded dark:text-gray-400 hover:bg-gray-200 dark:hover:bg-gray-700 dark:hover:text-gray-200 hover:text-gray-700" href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" height="1.25rem" viewBox="0 0 64 64" width="1.25rem">
                        <g id="outline">
                            <path d="m60 46.184v-15.376l-2-5v-8.808a3 3 0 0 0 -3-3h-32v-2h3.236l.211-.105a5.316 5.316 0 0 0 2.553-4.895 5.316 5.316 0 0 0 -2.553-4.895l-.211-.105h-14.472l-.211.1a5.316 5.316 0 0 0 -2.553 4.9 5.316 5.316 0 0 0 2.553 4.9l.211.105h3.236v2h-6a3 3 0 0 0 -3 3v8.808l-2 5v15.371a3 3 0 0 0 -2 2.816v10a3 3 0 0 0 3 3h54a3 3 0 0 0 3-3v-10a3 3 0 0 0 -2-2.816zm-47.71-36.184a3.558 3.558 0 0 1 -1.29-3 3.563 3.563 0 0 1 1.287-3h13.423a3.558 3.558 0 0 1 1.29 3 3.558 3.558 0 0 1 -1.29 3zm4.71 2h4v2h-4zm-11 19.192 2-5v-9.192a1 1 0 0 1 1-1h46a1 1 0 0 1 1 1v9.192l2 5v14.808h-52zm54 27.808a1 1 0 0 1 -1 1h-54a1 1 0 0 1 -1-1v-10a1 1 0 0 1 1-1h54a1 1 0 0 1 1 1z"/>
                            <path d="m54 18h-19v10h19zm-2 8h-15v-6h15z"/>
                            <path d="m18 6h2v2h-2z"/>
                            <path d="m22 6h2v2h-2z"/>
                            <path d="m14 6h2v2h-2z"/>
                            <path d="m26 26h6v-3c0-3.131-1.5-5-4-5h-13c-2.505 0-4 1.869-4 5v7h-2v2h19v-2h-2zm2-6c.5 0 2 0 2 3v1h-4v-1c0-3 1.505-3 2-3zm-15 10v-7c0-3 1.505-3 2-3h9.627a6.545 6.545 0 0 0 -.627 3v7z"/>
                            <path d="m9 34v10h18v-10zm10 2h2v2h-2zm-4 0h2v2h-2zm-4 0h2v2h-2zm2 6h-2v-2h2zm4 0h-2v-2h2zm4 0h-2v-2h2zm4 0h-2v-2h2zm0-6v2h-2v-2z"/>
                            <path d="m29 44h6v-10h-6zm4-2h-2v-2h2zm-2-6h2v2h-2z"/>
                            <path d="m37 30v14h18v-14zm10 2h2v2h-2zm2 6h-2v-2h2zm-6-2h2v2h-2zm0-4h2v2h-2zm-4 0h2v2h-2zm0 4h2v2h-2zm6 6h-6v-2h6zm4 0h-2v-2h2zm4 0h-2v-6h2zm0-10v2h-2v-2z"/>
                            <path d="m14 58h36v-8h-36zm2-6h32v4h-32z"/>
                            <path d="m56 56h2v2h-2z"/>
                            <path d="m52 56h2v2h-2z"/>
                            <path d="m6 56h2v-4h2v-2h-4z"/>
                        </g>
                    </svg>

                    <span class="mx-4 font-medium">Corte de Caja</span>
                </a>

                <hr class="my-4 dark:border-gray-600" />
            </nav>
        </div>
    </div>