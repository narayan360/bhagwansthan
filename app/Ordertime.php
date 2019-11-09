<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Setting;

class Ordertime extends Model
{
    protected static $ord_min = ['00', '15', '30' , '45'];
    protected static $min_interval = 15;

    

    public static function date()
    {


    	$date_option = []; 
    	$today_data = strtotime(date('Y-m-d'));
    	for ($i=0; $i < 7; $i++) { 
    		$data = strtotime('+ '. $i .' Day', $today_data);

    		if($i == 0){

                    $date_option[date('m/d/Y', $data)] = 'TODAY '.date('l, M d, Y', $data);

    		}elseif($i == 1){
        			$date_option[date('m/d/Y', $data)] = 'TOMORROW '.date('l, M d, Y', $data);
                }

               else{
        			$date_option[date('m/d/Y', $data)] = date('l, M d, Y', $data);    			
                }
    		}

    	return $date_option;
    }

    public static function hour($type='collection', $date=null)
    {


        $time_option = [];


        $start_time =  \App\Setting::ofValue('start_time');
        $end_time = \App\Setting::ofValue('end_time');


        $start_time = strtotime($start_time);
        $end_time = strtotime($end_time);

        $start_hr = (int) date('H', $start_time);
        $start_min = (int) date('i', $start_time);
        $end_hr = (int) date('H', $end_time);
        $end_min = (int) date('i', $end_time);
        if($end_min){
            $end_hr = $end_hr +1;
        }
        $today = date('m/d/Y');
        if($date && $today <> $date){
            for ($i=$start_hr; $i < $end_hr; $i++) {
                foreach (self::$ord_min as $min) {
                    $time = $i.':'.$min;
                    $str_time = strtotime($i.':'.$min);
                    if($end_time >= $str_time){
                        $time_option[$time] = $time;
                    }
                }
            }
        }else{

            for ($i=$start_hr; $i < $end_hr; $i++) {
                foreach (self::$ord_min as $min) {
                    $current_time = strtotime(date('H:s'));
                    $current_time = strtotime('+ 45 Minutes', $current_time);
                    $time = $i.':'.$min;
                    $str_time = strtotime($i.':'.$min);
                    if($str_time > $current_time && $end_time >= $str_time){
                        $time_option[$time] = $time;
                    }
                }

            }

        }

        // dd($time_option);

        return $time_option;
    }
	
}
