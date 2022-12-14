<div class="sidebar" data-color="white" data-active-color="danger">
    <div class="logo">
        <a href="#safebox" class="simple-text logo-mini">
            <div class="logo-image-small">
                <img src="{{ asset('paper') }}/img/safebox_logo.png">
            </div>
        </a>
        <a href="/home" class="simple-text logo-normal">
            {{ __('SAFEBOX SYSTEM') }}
        </a>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="{{ $elementActive == 'dashboard' ? 'active' : '' }}">
                <a href="/home">
                    <i class="nc-icon nc-chart-pie-36"></i>
                    <p>{{ __('Dashboard') }}</p>
                </a>
            </li>
            <li class="{{ $elementActive == 'sirkulasi' ? 'active' : '' }}">
                <a href="/sirkulasi">
                    <i class="nc-icon nc-refresh-69"></i>
                    <p>{{ __('Sirkulasi') }}</p>
                </a>
            </li>
            <li class="{{ $elementActive == 'users' ? 'active' : '' }}">
                <a href="/users">
                    <i class="nc-icon nc-badge"></i>
                    <p>{{ __('User Management') }}</p>
                </a>
            </li>
            <li class="{{ $elementActive == 'pegawai' ? 'active' : '' }}">
                <a href="/pegawai">
                    <i class="nc-icon nc-circle-10"></i>
                    <p>{{ __('User') }}</p>
                </a>
            </li>
            <li class="{{ $elementActive == 'invalid' ? 'active' : '' }}">
                <a href="/invalid">
                    <i class="nc-icon nc-simple-remove"></i>
                    <p>{{ __('Invalid UID') }}</p>
                </a>
            </li>
            <li class="{{ $elementActive == 'alat' ? 'active' : '' }}">
                <a href="/alat">
                    <i class="nc-icon nc-settings"></i>
                    <p>{{ __('Alat') }}</p>
                </a>
            </li>
            <li class="{{ $elementActive == 'alat-rusak' ? 'active' : '' }}">
                <a href="/alat-rusak">
                    <i class="nc-icon nc-alert-circle-i"></i>
                    <p>{{ __('Alat Rusak') }}</p>
                </a>
            </li>
            {{-- <li class="{{ $elementActive == 'application' ? 'active' : '' }}">
                <a href="/application">
                    <i class="nc-icon nc-atom"></i>
                    <p>{{ __('Applications') }}</p>
                </a>
            </li>
            <li class="{{ $elementActive == 'device' ? 'active' : '' }}">
                <a href="/device">
                    <i class="nc-icon nc-spaceship"></i>
                    <p>{{ __('Devices') }}</p>
                </a>
            </li>
            <li class="{{ $elementActive == 'warga' ? 'active' : '' }}">
                <a href="/warga">
                    <i class="nc-icon nc-circle-10"></i>
                    <p>{{ __('Warga') }}</p>
                </a>
            </li>
            <li class="{{ $elementActive == 'monitoring' ? 'active' : '' }}">
                <a href="/monitoring">
                    <i class="nc-icon nc-chart-pie-36"></i>
                    <p>{{ __('Monitoring') }}</p>
                </a>
            </li> --}}
            {{-- <li class="{{ $elementActive == 'user' || $elementActive == 'profile' ? 'active' : '' }}">
                <a data-toggle="collapse" aria-expanded="true" href="#laravelExamples">
                    <i class="nc-icon"><img src="{{ asset('paper/img/laravel.svg') }}"></i>
                    <p>
                            {{ __('Laravel examples') }}
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse show" id="laravelExamples">
                    <ul class="nav">
                        <li class="{{ $elementActive == 'profile' ? 'active' : '' }}">
                            <a href="{{ route('profile.edit') }}">
                                <span class="sidebar-mini-icon">{{ __('UP') }}</span>
                                <span class="sidebar-normal">{{ __(' User Profile ') }}</span>
                            </a>
                        </li>
                        <li class="{{ $elementActive == 'user' ? 'active' : '' }}">
                            <a href="{{ route('page.index', 'user') }}">
                                <span class="sidebar-mini-icon">{{ __('U') }}</span>
                                <span class="sidebar-normal">{{ __(' User Management ') }}</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li> --}}
            <!-- <li class="{{ $elementActive == 'icons' ? 'active' : '' }}">
                <a href="{{ route('page.index', 'icons') }}">
                    <i class="nc-icon nc-diamond"></i>
                    <p>{{ __('Icons') }}</p>
                </a>
            </li> -->
            {{-- <li class="{{ $elementActive == 'map' ? 'active' : '' }}">
                <a href="{{ route('page.index', 'map') }}">
                    <i class="nc-icon nc-pin-3"></i>
                    <p>{{ __('Maps') }}</p>
                </a>
            </li>
            <li class="{{ $elementActive == 'notifications' ? 'active' : '' }}">
                <a href="{{ route('page.index', 'notifications') }}">
                    <i class="nc-icon nc-bell-55"></i>
                    <p>{{ __('Notifications') }}</p>
                </a>
            </li>
            <li class="{{ $elementActive == 'tables' ? 'active' : '' }}">
                <a href="{{ route('page.index', 'tables') }}">
                    <i class="nc-icon nc-tile-56"></i>
                    <p>{{ __('Table List') }}</p>
                </a>
            </li>
            <li class="{{ $elementActive == 'typography' ? 'active' : '' }}">
                <a href="{{ route('page.index', 'typography') }}">
                    <i class="nc-icon nc-caps-small"></i>
                    <p>{{ __('Typography') }}</p>
                </a>
            </li> --}}
        </ul>
    </div>
</div>
