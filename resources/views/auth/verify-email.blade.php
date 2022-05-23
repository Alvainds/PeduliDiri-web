<x-guest-layout>

    <div width="100%"
        style="background: #f8f8f8; padding: 0px 0px; font-family:arial; line-height:28px; height:100%;  width: 100%; color: #514d6a;">
        <div style="max-width: 700px; padding:50px 0;  margin: 0px auto; font-size: 14px">

            <div style="padding: 40px; background: #fff;">
                <table border="0" cellpadding="0" cellspacing="0" style="width: 100%;">
                    <tbody>
                        <tr>
                            <td><b>Dear Sir/Madam/Customer,</b>
                                <b>@if (session('status') == 'verification-link-sent')
                                    <div class="mb-4 font-medium text-sm text-green-600">
                                        {{ __('A new verification link has been sent to the email address you provided
                                        during registration.') }}
                                    </div>
                                    @endif
                                </b>
                                <p>This is to inform you that, Your account with AdminX has been created successfully.
                                    Log it for more details.</p>
                                <div class="my-2 flex items-center justify-between">
                                    <form method="POST" action="{{ route('verification.send') }}">
                                        @csrf

                                        <div>
                                            <x-button>
                                                {{ __('Resend Verification Email') }}
                                            </x-button>
                                        </div>
                                    </form>

                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf

                                        <button type="submit"
                                            class="underline text-sm text-gray-600 hover:text-gray-900">
                                            {{ __('Log Out') }}
                                        </button>
                                    </form>
                                </div>

                                <p>This email template can be used for Create Account, Change Password, Login
                                    Information and other informational things.</p>
                                <b>- Thanks (Wrappixel team)</b>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</x-guest-layout>