<x-guest-layout>


    <div width="100%"
        style="background: #f8f8f8; padding: 0px 0px; font-family:arial; line-height:28px; height:100%;  width: 100%; color: #514d6a;">
        <div style="max-width: 700px; padding:50px 0;  margin: 0px auto; font-size: 14px">

            <div style="padding: 40px; background: #fff;">
                <table border="0" cellpadding="0" cellspacing="0" style="width: 100%;">
                    <tbody>
                        <tr>
                            <td><b>Dear Sir/Madam/Customer,</b>
                                <!-- Session Status -->
                                <x-auth-session-status class="mb-4" :status="session('status')" />

                                <!-- Validation Errors -->
                                <x-auth-validation-errors class="mb-4" :errors="$errors" />
                                <p>This is to inform you that, Your account with AdminX has been created successfully.
                                    Log it for more details.</p>
                                <form method="POST" action="{{ route('password.email') }}">
                                    @csrf

                                    <!-- Email Address -->
                                    <div>
                                        <x-label for="email" :value="__('Email')" />

                                        <x-input id="email" class="block mt-1 w-full" type="email" name="email"
                                            :value="old('email')" required autofocus />
                                    </div>

                                    <div class="flex items-center justify-end my-4">
                                        <x-button>
                                            {{ __('Email Password Reset Link') }}
                                        </x-button>
                                    </div>
                                </form>
                                <p>This email template can be used for Create Account, Change Password, Login
                                    Information and other informational things.</p>
                                <b>- Thanks (Wrappixel team)</b>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div style="text-align: center; font-size: 12px; color: #b2b2b5; margin-top: 20px">
                <p> Powered by Wrappixel
                    <br>
                    <a href="javascript: void(0);" style="color: #b2b2b5; text-decoration: underline;">Unsubscribe</a>
                </p>
            </div>
        </div>
    </div>
</x-guest-layout>