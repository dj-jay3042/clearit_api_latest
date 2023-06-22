@php
    $url = $this->url;
    $freightosRef = $this->freightosRef;
    $companyname = $this->companyname;
    $website = $this->website;
    $serviceName = str_replace(' ', '', 'Clearit USA');
@endphp

<table border="0" width="100%" style="background: #eeeeee">
    <tr>
        <td>
            <table border="0" width="90%" align="center" style="table-layout: fixed; border-collapse: collapse; background: #ffffff; max-width: 600px">
                <tr>
                    @include('core.email.header')
                </tr>
                <tr>
                    <td style="width: 100%; padding: 20px; font-size: 14px; color: #555555">
                        Hi there,

                        Thank you for selecting {{ $serviceName }} as your Customs Broker on {{ $companyname }} for shipment #{{ $freightosRef }}.

                        Simply click <a href="{{ $url }}">here</a> to complete the registration process and fill in your Power of Attorney (POA).

                        Please do so as soon as possible to avoid any delays in your shipment.

                        For any questions regarding customs, please reply to this email and we will be happy to assist you further.
                    </td>
                </tr>
                <tr>
                    <td style="padding: 20px; padding-top: 0px">
                        <p>Thank you,<br><span style="font-weight: 600">The {{ $serviceName }} Team</span></p>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>
