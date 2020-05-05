<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

class SitemapController extends Controller
{
    private $parts = 4;

    public function index()
    {
        return response()->view('sitemap.index',
            [
                'pages' => (256*256)/((256*256)/$this->parts)
            ]
        )->header('Content-Type', 'application/xml');
    }

    private function getData ($page) {
        $startA = explode('.', request()->getHost())[0];
        $startB = 0;
        $startC = 0;
        $count = 0;

        $links = [];
        if($startA != -1){
            $currentA = $startA;
            $startA = -1;
        } else {
            $currentA = 0;
        }

        for ($a = $currentA; $a <= $currentA; $a++){
            if($startB != -1){
                $currentB = $startB;
                $startB = -1;
            } else {
                $currentB = 0;
            }

            for ($b = $currentB; $b <= 255; $b++){

                if($startC != -1){
                    $currentC = $startC;
                    $startC = -1;
                } else {
                    $currentC = 0;
                }

                for ($c = $currentC; $c <= 255; $c++){
                    $count++;
                    if($count > (((int)$page - 1) * (256*256)/$this->parts) && $count <= (int)$page * (256*256)/$this->parts){
                        $links[] = $a.'.'.$b.'.'.$c;
                    }
                }
            }
        }

        return $links;

    }
    public function xml($page)
    {
        return response()->view('sitemap.item',
            [
                'time' => (new Carbon())->tz('UTC')->toAtomString(),
                'links' => $this->getData($page)
            ]
        )->header('Content-Type', 'application/xml');
    }

    public function txt($page)
    {
        return response()->view('sitemap.text',
            [
                'time' => (new Carbon())->tz('UTC')->toAtomString(),
                'links' => $this->getData($page)
            ]
        )->header('Content-Type', 'text/html; charset=UTF-8');
    }
}
