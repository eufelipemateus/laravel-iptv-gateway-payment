<?php

namespace FelipeMateus\IPTVGatewayPayment\Dashs;

use FelipeMateus\IPTVCore\Class\IPTVDashBase;
//use FelipeMateus\IPTVGatewayPayment\Model\IPTVCdn;

class GatewayDash extends IPTVDashBase {
    public static  $title = "Gateways Payment";

    public static function view(){
        $data['total'] = '0'; //IPTVCdn::count();
        return view('IPTV::gateways_dash', $data);
    }
}
