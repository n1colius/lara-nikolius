<?php
/**
 * @authors Nikolius Lau (n1colius.lau@gmail.com)
 * @date    2021-08-17 22:22:36
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class DotaWinrateChartController extends Controller
{

	public function index(Request $request)
	{
        //combo hero
        $sql = "SELECT
                    a.HeroID AS id
                    , a.HeroName AS label
                FROM
                    dota_heroes a
                WHERE 1=1
                ORDER BY a.`HeroName` ASC";
        $cmb_hero = DB::select($sql, []);

        return view('dota_winrate_chart', compact(
            'cmb_hero'
        ));
    }

    public function display(Request $request)
    {
        $SelHero = (int) $request->get('sel_hero');

        $data = array();
        return view('dota_winrate_chart_display', compact(
            'data'
        ));
    }

}