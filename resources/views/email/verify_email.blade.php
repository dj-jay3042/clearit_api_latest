<table border="0" width="100%" style="background: #eeeeee">
    <tr>
        <td>
            <table border="0" width="90%" align="center" style="table-layout: fixed; border-collapse: collapse; background: #ffffff; max-width: 600px">
                <tr>
                    @include('email.header')
                </tr>
                <tr>
                    <td style="width: 100%; padding: 20px; font-size: 14px; color: #555555">
                        Dear FreightOS Customer,

                        Your six digit code for email verification is: {{ $verificationcode }}
                    </td>
                </tr>
                <tr>
                    @include('email.thankyou', ['info_email' => $info_email])
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        @include('email.footer')
    </tr>
</table>
