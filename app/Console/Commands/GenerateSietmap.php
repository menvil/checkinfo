<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class GenerateSietmap extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'generate:sitemap {--type=*}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {

//        $type = $this->option('type');
//        if (!empty($type)) {
//            $type = $type[0];
//        } else {
//            $type = 'all';
//        }
//
//        if($type == 'all'){
//            $total = 0;
//            $ips = [];
//            $count = 0;
//            $previousA = 0;
//            $previousB = 0;
//            $previousC = 0;
//            for ($a = 0; $a <= 255; $a++){
//                for ($b = 0; $b <= 255; $b++){
//                    for ($c = 0; $c <= 255; $c++){
//                        $count++;
//                        if ($count % 50000 == 0) {
//                            $ips[] = $a . '.' . $b . '.' . $c . '.0';
//                            print_r($previousA . ' - ' . $previousB . ' - ' . $previousC . ' - 0' . "\r\n");
//                            print_r($a . ' - ' . $b . ' - ' . $c . ' - 0' . "\r\n");
//                            $total++;
//                            //print_r(count($ips)."\r\n");
//                            $ips = [];
//                            $previousA = $a;
//                            $previousB = $b;
//                            $previousC = $c;
//                            $count = 0;
//                        }
//                    }
//                }
//            }
//        } else {
//
//        }



//
//        0 - 71 - 183 - 95
//        0 - 72 - 122 - 175
//
//

        $startA = 10;
        $startB = 0;
        $startC = 0;
        $startD = 0;
        $count = 0;


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

                    if ($count % 5000 == 0 && $count !== 0){
                        //print_r($previousA.' - '.$previousB.' - '.$previousC.' - '.$previousD."\r\n");
                        print_r($a.' - '.$b.' - '.$c.' - 0'."\r\n");
                        $previousA = $a;
                        $previousB = $b;
                        $previousC = $c;
                    }
                    $count++;
                }
            }
        }

    }
}
