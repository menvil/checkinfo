<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\IpService;

class IpController extends Controller
{
    /**
     * Show the info for given ip address
     *
     * @param  string  $ip
     * @return View
     */
    public function show($ip)
    {
        $ipAddress = explode('.',$ip);
        //dd(IpService::lookup($ip));
        return view('info',
            [
                'ip' => $ipAddress[0].'.'.$ipAddress[1].'.'.$ipAddress[2],
                'info' => IpService::lookup($ip)
            ]
        );
    }

    /**
     * Show the info for given address range
     *
     * @param  string  $range
     * @return View
     */
    public function short($range)
    {
        $ipAddress = explode('.',$range);
        return view('info', [
            'ip' => $ipAddress[0].'.'.$ipAddress[1].'.'.$ipAddress[2],
            'info' => IpService::lookup($ipAddress[0].'.'.$ipAddress[1].'.'.$ipAddress[2].'.0')
        ]);
    }
}
