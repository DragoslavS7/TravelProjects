<?php

namespace App\Http\Controllers;

use App\CountryUser;
use Illuminate\Http\Request;
use Khill\Lavacharts\Lavacharts;
use DB;

class ChartController extends Controller
{
    public function getLaraChart()
    {
        $lava = new Lavacharts;

        $popularity = $lava->DataTable();
        $data = CountryUser::select("city as 0","total_city as 1")->get()->toArray();

        $popularity->addStringColumn('Country')
            ->addNumberColumn('Posecenost')
            ->addRows($data);

        $lava->GeoChart('Popularity', $popularity);

        return view('laracharts',compact('lava'));

    }
}
