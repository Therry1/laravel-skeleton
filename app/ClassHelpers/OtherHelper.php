<?php

namespace App\ClassHelpers;

use Carbon\Carbon;

class OtherHelper
{
    public function make_formation_month(){
        /**
            fonction permattant de calculer 1 moi de formation
         */
        $current_date = Carbon::now();
        $preview_month = "";
        $next_month = "";

        if ($current_date->day > 15){
            $preview_month = $current_date->locale()->format('M');
            $next_month    = $current_date->month();
        }
    }
}
