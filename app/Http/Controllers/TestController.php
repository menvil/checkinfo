<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GeoIp2\Database\Reader;
use IP2Location\Database as IP2Loc;

use App\Services\IpService;

class TestController extends Controller
{
    public function lookup(){

 //       dd(IpService::lookup('185.189.199.221'));
//        exit;
        $db = new IP2Loc(base_path().'/database/ip2location/IP2LOCATION.BIN', IP2Loc::FILE_IO);

        $records = $db->lookup('11.30.50.30', IP2Loc::ALL);
dd($records); exit;
        echo '===== Ip2Location database data ====='. "<br>";
        echo 'IP Number             : ' . $records['ipNumber'] . "<br>";
        echo 'IP Version            : ' . $records['ipVersion'] . "<br>";
        echo 'IP Address            : ' . $records['ipAddress'] . "<br>";
        echo 'Country Code          : ' . $records['countryCode'] . "<br>";
        echo 'Country Name          : ' . $records['countryName'] . "<br>";
        echo 'Region Name           : ' . $records['regionName'] . "<br>";
        echo 'City Name             : ' . $records['cityName'] . "<br>";
        echo 'Latitude              : ' . $records['latitude'] . "<br>";
        echo 'Longitude             : ' . $records['longitude'] . "<br>";
        echo 'Area Code             : ' . $records['areaCode'] . "<br>";
        echo 'IDD Code              : ' . $records['iddCode'] . "<br>";
        echo 'Weather Station Code  : ' . $records['weatherStationCode'] . "<br>";
        echo 'Weather Station Name  : ' . $records['weatherStationName'] . "<br>";
        echo 'MCC                   : ' . $records['mcc'] . "<br>";
        echo 'MNC                   : ' . $records['mnc'] . "<br>";
        echo 'Mobile Carrier        : ' . $records['mobileCarrierName'] . "<br>";
        echo 'Usage Type            : ' . $records['usageType'] . "<br>";
        echo 'Elevation             : ' . $records['elevation'] . "<br>";
        echo 'Net Speed             : ' . $records['netSpeed'] . "<br>";
        echo 'Time Zone             : ' . $records['timeZone'] . "<br>";
        echo 'ZIP Code              : ' . $records['zipCode'] . "<br>";
        echo 'Domain Name           : ' . $records['domainName'] . "<br>";
        echo 'ISP Name              : ' . $records['isp'] . "<br>";

        $reader = new Reader(base_path().'/database/maxmind/GeoLite2-City.mmdb');
        $record = $reader->city('11.30.50.30');
        echo '===== MaxMind database data ====='. "<br>";
        //dd($record);

        $reader2 = new Reader(base_path().'/database/dbip/dbip-city-lite.mmdb');
        $record = $reader2->city('11.30.50.30');
        echo '===== DBIP database data ====='. "<br>";
        dd($record); exit;
    }
}
