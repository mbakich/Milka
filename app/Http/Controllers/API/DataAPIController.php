<?php

namespace App\Http\Controllers\API;

use App\Jobs\ProcessOcrJob;
use DateTime;
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Models\Web\Country;
use App\Models\Web\Categories;
use App\Models\Web\Gramaza;
use Validator;
use App\Http\Resources\ReceiptResource;
use Illuminate\Http\JsonResponse;
use App\Jobs\ProcessReceiptJob;

class DataAPIController extends BaseController
{


    public function installCategories()
    {

        $categories = new Categories;

        $categories->truncate();
        $now = new \DateTime();
        $nowStr  = $now->format('Y-m-d H:i:s');

        $dataFor = array(
            ['id' => 1, 'naziv' => 'Bars', 'points' => '1', 'created_at' => $nowStr, 'updated_at' => $nowStr],
            ['id' => 2, 'naziv' => 'Pastry', 'points' => '1', 'created_at' => $nowStr, 'updated_at' => $nowStr],
            ['id' => 3, 'naziv' => 'Table', 'points' => '3', 'created_at' => $nowStr, 'updated_at' => $nowStr],
            ['id' => 4, 'naziv' => 'Bisquits', 'points' => '3', 'created_at' => $nowStr, 'updated_at' => $nowStr],
            ['id' => 5, 'naziv' => 'Praline', 'points' => '4', 'created_at' => $nowStr, 'updated_at' => $nowStr],
            ['id' => 6, 'naziv' => 'MMAX', 'points' => '5', 'created_at' => $nowStr, 'updated_at' => $nowStr],
        );

        $categories->insert($dataFor);

        return $this->sendResponse('success', 'Categories retrieved successfully.');
    }

    public function installCountries()
    {

        $country = new Country;

        $country->truncate();
        $now = new \DateTime();
        $nowStr  = $now->format('Y-m-d H:i:s');

        $dataFor = array(
            ['id' => 1, 'name' => 'Srbija', 'country_code' => 'SRB', 'created_at' => $nowStr, 'updated_at' => $nowStr],
            ['id' => 2, 'name' => 'Hrvatska', 'country_code' => 'CRO', 'created_at' => $nowStr, 'updated_at' => $nowStr],
            ['id' => 3, 'name' => 'Slovenija', 'country_code' => 'SLO', 'created_at' => $nowStr, 'updated_at' => $nowStr],
            ['id' => 4, 'name' => 'Bosna i Hercegovina', 'country_code' => 'BIH', 'created_at' => $nowStr, 'updated_at' => $nowStr],
        );

        $country->insert($dataFor);

        return $this->sendResponse('success', 'Categories retrieved successfully.');
    }

    public function installGramaza()
    {

        $gramaza = new Gramaza;

        $gramaza->truncate();

        $dataForGramaza = array(
            ['id' => 1, 'category' => 'MMAX', 'grams' => '250'],
            ['id' => 2, 'category' => 'MMAX', 'grams' => '270'],
            ['id' => 3, 'category' => 'MMAX', 'grams' => '276'],
            ['id' => 4, 'category' => 'MMAX', 'grams' => '280'],
            ['id' => 5, 'category' => 'MMAX', 'grams' => '300'],
            ['id' => 6, 'category' => 'Bisquit', 'grams' => '112'],
            ['id' => 7, 'category' => 'Bisquit', 'grams' => '120'],
            ['id' => 8, 'category' => 'Bisquit', 'grams' => '126'],
            ['id' => 9, 'category' => 'Bisquit', 'grams' => '128'],
            ['id' => 10, 'category' => 'Bisquit', 'grams' => '132'],
            ['id' => 11, 'category' => 'Bisquit', 'grams' => '140'],
            ['id' => 12, 'category' => 'Bisquit', 'grams' => '147'],
            ['id' => 13, 'category' => 'Bisquit', 'grams' => '150'],
            ['id' => 14, 'category' => 'Bisquit', 'grams' => '175'],
            ['id' => 15, 'category' => 'Bisquit', 'grams' => '184'],
            ['id' => 16, 'category' => 'Bisquit', 'grams' => '260'],
            ['id' => 17, 'category' => 'Bisquit', 'grams' => '312'],
            ['id' => 18, 'category' => 'Pastry', 'grams' => '50'],
            ['id' => 19, 'category' => 'Praline', 'grams' => '44'],
            ['id' => 20, 'category' => 'Praline', 'grams' => '95'],
            ['id' => 21, 'category' => 'Praline', 'grams' => '110'],
            ['id' => 22, 'category' => 'Praline', 'grams' => '158'],
            ['id' => 23, 'category' => 'Praline', 'grams' => '159'],
            ['id' => 24, 'category' => 'Table', 'grams' => '80'],
            ['id' => 25, 'category' => 'Table', 'grams' => '87,5'],
            ['id' => 26, 'category' => 'Table', 'grams' => '90'],
            ['id' => 27, 'category' => 'Table', 'grams' => '92'],
            ['id' => 28, 'category' => 'Table', 'grams' => '95'],
            ['id' => 29, 'category' => 'Table', 'grams' => '100'],
            ['id' => 30, 'category' => 'Table', 'grams' => '190'],
            ['id' => 31, 'category' => 'Bars', 'grams' => '31'],
            ['id' => 32, 'category' => 'Bars', 'grams' => '31,5'],
            ['id' => 33, 'category' => 'Bars', 'grams' => '37'],
            ['id' => 34, 'category' => 'Bars', 'grams' => '46'],
            ['id' => 35, 'category' => 'Bars', 'grams' => '48'],
        );

        $gramaza->insert($dataForGramaza);

        return $this->sendResponse('success', 'Categories retrieved successfully.');
    }
}
