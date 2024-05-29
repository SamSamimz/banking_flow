<div class="p-3 rounded auth-card anime-box">
    <div>
        <h4 class="text-center">{{ strtoupper($this->page) }}</h4>
    </div>
    @include('livewire.partials.alerts')
    <div>
        @if ($this->page == 'login')
        <form wire:submit.prevent='loginUser()'>
            <div class="form-group mb-2">
                <label class="form-label" for="email">{{ __('Email') }}</label>
                <input type="email" id="email" class="form-control" wire:model="email" />
                @error('email')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="form-group mb-2">
                <label class="form-label" for="password">{{ __('Password') }}</label>
                <input type="password" id="password" class="form-control" wire:model="password" />
                @error('password')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="text-center">
                <button class="btn btn-primary my-3 col-12 d-block">{{ __('Login') }}</button>
                
                <a href="{{route('auth.index','register')}}" wire:navigate>{{ __('New account') }} ?</a>
            </div>
        </form>
        @else
        <form wire:submit.prevent='registerUser()'>
            <div class="form-group mb-2">
                <label class="form-label" for="name">{{ __('Account Type') }}</label>
                <select wire:model='account_type' id="account_type" class="form-select">
                    <option value="">{{ __('Select account type') }}</option>
                    <option value="Individual">{{ __('Individual') }}</option>
                    <option value="Business">{{ __('Business') }}</option>
                </select>
                @error('account_type')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="form-group mb-2">
                <label class="form-label" for="name">{{ __('Name') }}</label>
                <input type="name" id="name" class="form-control" wire:model='name' />
                @error('name')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="form-group mb-2">
                <label class="form-label" for="email">{{ __('Email') }}</label>
                <input type="email" id="email" class="form-control" wire:model='email' />
                @error('email')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="form-group mb-2">
                <label class="form-label" for="password">{{ __('Password') }}</label>
                <input type="password" id="password" class="form-control" wire:model='password' />
                @error('password')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="form-group mb-2">
                <label class="form-label" for="password_confirmation">{{ __('Confirm Password') }}</label>
                <input type="password" id="password_confirmation" class="form-control" wire:model='password_confirmation' />
                @error('password_confirmation')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="text-center">
                <button class="btn btn-primary my-3 col-12 d-block">{{ __('Register') }}</button>
                
                <a href="{{route('auth.index','login')}}" wire:navigate>{{ __('Already have an account') }} ?</a>
            </div>
        </form>
        @endif
    </div>

</div>
