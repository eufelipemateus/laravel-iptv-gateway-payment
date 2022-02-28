<?php

namespace FelipeMateus\IPTVGatewayPayment\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IPTVGateway extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'code','name','class_model','config_data','active'
    ];

    protected $table = "iptv_gateways_payments";

}
