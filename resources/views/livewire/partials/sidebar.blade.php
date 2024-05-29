<div>
    <nav class="pushy pushy-left">
        <div class="pushy-content">
            <ul>
                <li class="pushy-link">
                    <a href="{{ route('dashboard') }}" wire:navigate>
                        <i class="fa fa-home me-2"></i>
                        {{ __('Dashboard') }}
                    </a>
                </li>
    
                <li class="pushy-submenu">
                    <a href="{{route('deposit.index')}}" wire:navigate>
                        <i class="fa-solid fa-landmark me-2"></i>
                        {{ __('Deposit') }}
                    </a>
                </li>
                <li class="pushy-submenu">
                    <a href="{{route('withdrawal.index')}}" wire:navigate>
                        <i class="fa-solid fa-money-bill me-2"></i>
                        {{ __('Withdrawal') }}
                    </a>
                </li>
            </ul>
        </div>
    </nav>
    
    <!-- Site Overlay -->
    <div class="site-overlay"></div>
    
</div>