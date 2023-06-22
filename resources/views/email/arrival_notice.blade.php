<table border="0" width="100%" style="background: #eeeeee">
    <tr>
        <td>
            <table border="0" width="90%" align="center" style="table-layout: fixed; border-collapse: collapse; background: #ffffff; max-width: 600px">
                <tr>
                    @include('email.header')
                </tr>
                <tr>
                    <td style="width: 100%; padding: 20px; font-size: 14px; color: #555555">
                        Dear Customer,

                        Please note in order for your cargo to be released from its warehouse, regardless of the customs status, all Forwarder & Arrival notice fees* must be paid in full. If you would like Clearit to handle the payments on your behalf, please notify your agent.
                    </td>
                </tr>
                <tr>
                    @include('email.thankyou')
                </tr>
                <tr>
                    <td style="padding: 20px; padding-top: 0px">
                        <p>*handling fees apply</p>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        @include('email.footer')
    </tr>
</table>
