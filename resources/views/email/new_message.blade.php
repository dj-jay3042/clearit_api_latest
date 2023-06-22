<?php $url = $this->url; $message = $this->message; ?>
<table border="0" width="100%" style="border-collapse: collapse; background: #eeeeee">
    <tr>
        <td>
            <table border="0" width="90%" align="center" style="table-layout: fixed; border-collapse: collapse; background: #ffffff; max-width: 600px">
                <tr>
                    @include('email.header')
                </tr>
                <tr>
                    <td style="width: 100%; padding: 20px; font-size: 14px; color: #555555">
                        Dear Customer,

                        <strong>You have received a new message from your agent:</strong>
                        <p style="margin: 20px; padding: 7px; background: #eeeeee">{{ $message }}</p>
                        <strong>To reply:</strong>
                        You can respond to this message by replying to this email or by using the link below to chat with your agent.
                        <a href="{{ $url }}" style="color: #555555">{{ $url }}</a>
                    </td>
                </tr>
                <tr>
                    @include('email.thankyou')
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        @include('email.footer')
    </tr>
</table>
