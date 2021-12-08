<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-jet-label for="name" value="{{ __('Name') }}" />
                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

        

             <div>
                <x-jet-label for="std_id" value="{{ __('std_id') }}" />
                <x-jet-input id="std_id" class="block mt-1 w-full" type="text" name="std_id" :value="old('std_id')" required autofocus autocomplete="std_id" />
            </div>

            
            

            <div>
                <x-jet-label for="address" value="{{ __('address') }}" />
                <x-jet-input id="address" class="block mt-1 w-full" type="text" name="address" :value="old('address')" required autofocus autocomplete="address" />
            </div>

             <div>
                <x-jet-label for="department" value="{{ __('department') }}" />
                <x-jet-input id="department" class="block mt-1 w-full" type="text" name="department" :value="old('department')" required autofocus autocomplete="department" />
            </div>

             <div>
                <x-jet-label for="batch" value="{{ __('batch') }}" />
                <x-jet-input id="batch" class="block mt-1 w-full" type="text" name="batch" :value="old('batch')" required autofocus autocomplete="batch" />
            </div>

            <div>
                <x-jet-label for="semester" value="{{ __('semester') }}" />
                <x-jet-input id="semester" class="block mt-1 w-full" type="text" name="semester" :value="old('semester')" required autofocus autocomplete="semester" />
            </div>

            

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>
            <br>
            <div>
                <x-jet-label for="image" value="{{ __('image') }}" />
                <x-jet-input id="image" class="block mt-1 w-full" type="file" name="image" :value="old('image')" required autofocus autocomplete="image" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-jet-label for="terms">
                        <div class="flex items-center">
                            <x-jet-checkbox name="terms" id="terms"/>

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-jet-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-jet-button class="ml-4">
                    {{ __('Register') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
