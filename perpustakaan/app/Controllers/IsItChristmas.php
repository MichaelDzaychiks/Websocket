<?php

namespace App\Controllers;

class IsItChristmas extends BaseController
{
    public function index(): string
    {
        $current_day = date('j'); 
        $current_month = date('n'); 


        $season = '';
        switch($current_month) {
            case 1:
                $season = $current_day <= 6 ? 'It is Christmas!' : 'It is not Christmas.';
                break;
            case 12:
                $season = $current_day >= 25 ? 'It is Christmas!' : 'It is not Christmas.';
                break;
            default: 
                $season = 'It is not Christmas.';
                break;
        }

        return view('is_it_christmas', ['season' => $season]);
    }
}
