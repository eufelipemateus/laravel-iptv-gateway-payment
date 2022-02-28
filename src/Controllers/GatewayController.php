<?php

namespace FelipeMateus\IPTVGatewayPayment\Controllers;

use Illuminate\Http\Request;
use FelipeMateus\IPTVCore\Controllers\CoreController;
use FelipeMateus\IPTVGatewayPayment\Models\IPTVGateway;

class GatewayController extends CoreController
{
    public function list(){
        $data['list'] =  IPTVGateway::where("active",1)->get();
        return view("IPTV::list_gateway",$data);
    }
}
