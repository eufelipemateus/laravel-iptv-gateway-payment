<?php

namespace Tschope\IPTVGatewayPayment\Dashs;

use Tschope\IPTVCore\Helpers\IPTVDashBase;
use Tschope\IPTVGatewayPayment\Models\IPTVGateway;

class GatewayDash extends IPTVDashBase {
    public static  $title = "Gateways Payment";

    public static function view(){
        $data['list'] = IPTVGateway::where("active",1)->limit(10)->get();
        return view('IPTV::gateways_dash', $data);
    }
}
