<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = date('Y-m-d H:i:s');

        // bars

        $sql = "
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4041910', 'Milka bar Oreo 37g', 'Bars', '1', 'SRB', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4309796', 'Milka bar Leo GO 48g', 'Bars', '1', 'SRB', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4315619', 'Milka bar Nut Bis Cream EAM 46g', 'Bars', '1', 'SRB', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4318767', 'Milka bar Waffelini Choco 31g', 'Bars', '1', 'SRB', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4318852', 'Milka bar Waffelini Milk 31g', 'Bars', '1', 'SRB', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4039663', 'Milka bar Nussini 31.5g', 'Bars', '1', 'SRB', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4309796', 'Milka bar Leo GO 48g', 'Bars', '1', 'CRO', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4039663', 'Milka bar Nussini 31.5g', 'Bars', '1', 'CRO', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4041910', 'Milka bar Oreo 37g', 'Bars', '1', 'CRO', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4315619', 'Milka bar Nut Bis Cream EAM 48g', 'Bars', '1', 'CRO', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4318767', 'Milka bar Waffelini Choco 31g', 'Bars', '1', 'CRO', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4318852', 'Milka bar Waffelini Milk 31g', 'Bars', '1', 'CRO', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4309796', 'Milka bar Leo GO 48g', 'Bars', '1', 'SLO', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4039663', 'Milka bar Nussini 31.5g', 'Bars', '1', 'SLO', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4041910', 'Milka bar Oreo 37g', 'Bars', '1', 'SLO', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4318767', 'Milka bar Nut Bis Cream EAM 46g', 'Bars', '1', 'SLO', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4318852', 'Milka bar Waffelini Choco 31g', 'Bars', '1', 'SLO', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4315619', 'Milka bar Waffelini Milk 31g', 'Bars', '1', 'SLO', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4041910', 'Milka bar Oreo 37g', 'Bars', '1', 'BIH', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4309796', 'Milka bar Leo GO 48g', 'Bars', '1', 'BIH', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4315619', 'Milka bar Nut Bis Cream EAM 46g', 'Bars', '1', 'BIH', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4318767', 'Milka bar Waffelini Choco 31g', 'Bars', '1', 'BIH', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4318852', 'Milka bar Waffelini Milk 31g', 'Bars', '1', 'BIH', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4039663', 'Milka bar Nussini 31.5g', 'Bars', '1', 'BIH', '{$now}', '{$now}');
        ";

        DB::unprepared($sql);

        //bisquits

        $sql = "
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('784386', 'Milka Choco Minis 150g', 'Bisquits', '3', 'SRB', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('848332', 'Milka Choco Dessert Orange 147g', 'Bisquits', '3', 'SRB', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('848328', 'Milka Choco Dessert Raspberry 147g', 'Bisquits', '3', 'SRB', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('848321', 'Milka Choco Dessert Mousse 128g', 'Bisquits', '3', 'SRB', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4006951', 'Milka Choco Cow 120g', 'Bisquits', '3', 'SRB', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4006937', 'Milka Lila Stix 112g', 'Bisquits', '3', 'SRB', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4302421', 'Milka Tender Moo 140g', 'Bisquits', '3', 'SRB', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4314417', 'Milka Cake & Choc 175g', 'Bisquits', '3', 'SRB', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4010291', 'Milka Choc and Choc 150g', 'Bisquits', '3', 'SRB', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4037770', 'Milka Sensation Cookies', 'Bisquits', '3', 'SRB', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4037773', 'Milka Sensation Cookies Dark', 'Bisquits', '3', 'SRB', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4041392', 'Milka Choco Creme 260g', 'Bisquits', '3', 'SRB', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4081654', 'Milka Choco Brownie 150g', 'Bisquits', '3', 'SRB', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4240417', 'Milka Cookie Loop 132G ', 'Bisquits', '3', 'SRB', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4256933', 'Milka Choco Biscuit 150g', 'Bisquits', '3', 'SRB', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4006665', 'Milka Choco Grain 126g', 'Bisquits', '3', 'SRB', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4255361', 'Milka Sensation Cookies Oreo', 'Bisquits', '3', 'SRB', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4259452', 'Milka Cookie XL 184g', 'Bisquits', '3', 'SRB', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4241183', 'Milka Sensation Cookies Max 312g', 'Bisquits', '3', 'SRB', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('848321', 'Milka Choco Dessert Mousse 128g', 'Bisquits', '3', 'CRO', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('848332', 'Milka Choco Dessert Orange 147g', 'Bisquits', '3', 'CRO', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('848328', 'Milka Choco Dessert Raspberry 147g', 'Bisquits', '3', 'CRO', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('784386', 'Milka Choco Minis 150g', 'Bisquits', '3', 'CRO', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4006951', 'Milka Choco Cow 120g', 'Bisquits', '3', 'CRO', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4306033', 'Milka Lila Stix 112g', 'Bisquits', '3', 'CRO', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4006665', 'Milka Choco Grain 126g', 'Bisquits', '3', 'CRO', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4302421', 'Milka Tender Moo 140g', 'Bisquits', '3', 'CRO', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4314417', 'Milka Cake & Choc 175g', 'Bisquits', '3', 'CRO', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4010291', 'Milka Choc and Choc 150g', 'Bisquits', '3', 'CRO', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4081654', 'Milka Choco Brownie 150g', 'Bisquits', '3', 'CRO', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4037770', 'Milka Sensation Cookies', 'Bisquits', '3', 'CRO', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4037773', 'Milka Sensation Cookies Dark', 'Bisquits', '3', 'CRO', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4255361', 'Milka Sensation Cookies Oreo', 'Bisquits', '3', 'CRO', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4041392', 'Milka Choco Creme 260g', 'Bisquits', '3', 'CRO', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4240417', 'Milka Cookie Loop 132G ', 'Bisquits', '3', 'CRO', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4259452', 'Milka Cookie XL 184g', 'Bisquits', '3', 'CRO', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4241183', 'Milka Sensation Cookies Max 312g', 'Bisquits', '3', 'CRO', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4256933', 'Milka Choco Biscuit 150g', 'Bisquits', '3', 'CRO', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('848332', 'Milka Choco Dessert Orange 147g', 'Bisquits', '3', 'SLO', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('848328', 'Milka Choco Dessert Raspberry 147g', 'Bisquits', '3', 'SLO', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('848321', 'Milka Choco Dessert Mousse 128g', 'Bisquits', '3', 'SLO', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('784386', 'Milka Choco Minis 150g', 'Bisquits', '3', 'SLO', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4006951', 'Milka Choco Cow 120g', 'Bisquits', '3', 'SLO', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4306033', 'Milka Lila Stix 112g', 'Bisquits', '3', 'SLO', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4006665', 'Milka Choco Grain 126g', 'Bisquits', '3', 'SLO', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4302421', 'Milka Tender Moo 140g', 'Bisquits', '3', 'SLO', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4010291', 'Milka Choc and Choc 150g', 'Bisquits', '3', 'SLO', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4081654', 'Milka Choco Brownie 150g', 'Bisquits', '3', 'SLO', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4314417', 'Milka Cake & Choc 175g', 'Bisquits', '3', 'SLO', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4037770', 'Milka Sensation Cookies', 'Bisquits', '3', 'SLO', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4037773', 'Milka Sensation Cookies Dark', 'Bisquits', '3', 'SLO', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4255361', 'Milka Sensation Oreo', 'Bisquits', '3', 'SLO', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4041392', 'Milka Choco Creme 260g', 'Bisquits', '3', 'SLO', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4240417', 'Milka Cookie Loop 132G ', 'Bisquits', '3', 'SLO', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4259452', 'Milka Cookie XL 184g', 'Bisquits', '3', 'SLO', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4256933', 'Milka Choco Biscuit 150g', 'Bisquits', '3', 'SLO', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4241183', 'Milka Sensation Cookies Max 312g', 'Bisquits', '3', 'SLO', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('784386', 'Milka Choco Minis 150g', 'Bisquits', '3', 'BIH', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('848332', 'Milka Choco Dessert Orange 147g', 'Bisquits', '3', 'BIH', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('848328', 'Milka Choco Dessert Raspberry 147g', 'Bisquits', '3', 'BIH', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('848321', 'Milka Choco Dessert Mousse 128g', 'Bisquits', '3', 'BIH', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4006951', 'Milka Choco Cow 120g', 'Bisquits', '3', 'BIH', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4306033', 'Milka Lila Stix 112g', 'Bisquits', '3', 'BIH', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4006665', 'Milka Choco Grain 126g', 'Bisquits', '3', 'BIH', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4037770', 'Milka Sensation Cookies', 'Bisquits', '3', 'BIH', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4037773', 'Milka Sensation Cookies Dark', 'Bisquits', '3', 'BIH', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4240417', 'Milka Cookie Loop 132G ', 'Bisquits', '3', 'BIH', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4255361', 'Milka Sensation Cookies Oreo', 'Bisquits', '3', 'BIH', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4041392', 'Milka Choco Creme 260g', 'Bisquits', '3', 'BIH', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4302421', 'Milka Tender Moo 140g', 'Bisquits', '3', 'BIH', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4010291', 'Milka Choc and Choc 150g', 'Bisquits', '3', 'BIH', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4081654', 'Milka Choco Brownie 150g', 'Bisquits', '3', 'BIH', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4314417', 'Milka Cake & Choc 175g', 'Bisquits', '3', 'BIH', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4259452', 'Milka Cookie XL 184g', 'Bisquits', '3', 'BIH', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4256933', 'Milka Choco Biscuit 150g', 'Bisquits', '3', 'BIH', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4241183', 'Milka Sensation Cookies Max 312g', 'Bisquits', '3', 'BIH', '{$now}', '{$now}');
        ";

        DB::unprepared($sql);

        //mmax

        $sql = "
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('548221', 'MILKA 250G ALPINE MILK ', 'MMAX', '5', 'SRB', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('548227', 'MILKA 250G WHOLE NUTS ', 'MMAX', '5', 'SRB', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4040952', 'MILKA 270G MILK WITH WHOLE NUTS', 'MMAX', '5', 'SRB', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4040956', 'MILKA 270G ALPINE MILK ', 'MMAX', '5', 'SRB', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4040955', 'MILKA 270G NOISETTE 16', 'MMAX', '5', 'SRB', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4040972', 'MKA 270G RAISINS MILK CHOC 15CA', 'MMAX', '5', 'SRB', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4279280', 'MILKA 270G CHOCOWAFER ', 'MMAX', '5', 'SRB', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4281345', 'MILKA 276G CARAMEL PEANUT ', 'MMAX', '5', 'SRB', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4040958', 'MILKA 280G TRIOLADE', 'MMAX', '5', 'SRB', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4014666', 'MILKA 300G NUT NOUGAT ', 'MMAX', '5', 'SRB', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4256635', 'MILKA 300G STRAWBERRY CHEESECAKE', 'MMAX', '5', 'SRB', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4040871', 'MILKA 300G MILK WITH STRAWBERRY ', 'MMAX', '5', 'SRB', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4256639', 'MILKA 300G CHOCO AND BISCUIT', 'MMAX', '5', 'SRB', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4257962', 'MILKA 300G OREO BISCUIT ', 'MMAX', '5', 'SRB', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4256686', 'MILKA 300G TOFFEE WHOLENUTS ', 'MMAX', '5', 'SRB', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4256685', 'MILKA 300G ALMOND', 'MMAX', '5', 'SRB', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4256080', 'MILKA 300G MILK ALMOND AND TRUFFLE', 'MMAX', '5', 'SRB', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4272813', 'MILKA 300G CHOCOCOOKIE', 'MMAX', '5', 'SRB', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4317941', 'MILKA 250G MILK WITH WHOLE NUTS ', 'MMAX', '5', 'SRB', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4316892', 'MILKA 250G NOISETTE ', 'MMAX', '5', 'SRB', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4316867', 'MILKA 250G ALPINE MILK', 'MMAX', '5', 'SRB', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('548221', 'MILKA 250G ALPINE MILK ', 'MMAX', '6', 'CRO', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('548227', 'MILKA 250G WHOLE NUTS ', 'MMAX', '7', 'CRO', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4040952', 'MILKA 270G MILK WITH WHOLE NUTS', 'MMAX', '8', 'CRO', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4040956', 'MILKA 270G ALPINE MILK ', 'MMAX', '9', 'CRO', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4040955', 'MILKA 270G NOISETTE 16', 'MMAX', '10', 'CRO', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4040972', 'MILKA 270G RAISINS AND NUTS', 'MMAX', '11', 'CRO', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4279280', 'MILKA 270G CHOCOWAFER ', 'MMAX', '12', 'CRO', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4281345', 'MILKA 276G CARAMEL PEANUT ', 'MMAX', '13', 'CRO', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4040958', 'MILKA 280G TRIOLADE', 'MMAX', '14', 'CRO', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4014666', 'MILKA 300G NUT NOUGAT ', 'MMAX', '15', 'CRO', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4256635', 'MILKA 300G STRAWBERRY CHEESECAKE', 'MMAX', '16', 'CRO', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4040871', 'MILKA 300G MILK WITH STRAWBERRY ', 'MMAX', '17', 'CRO', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4256639', 'MILKA 300G CHOCO AND BISCUIT', 'MMAX', '18', 'CRO', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4257962', 'MILKA 300G OREO BISCUIT ', 'MMAX', '19', 'CRO', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4256686', 'MILKA 300G TOFFEE WHOLENUTS ', 'MMAX', '20', 'CRO', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4256685', 'MILKA 300G ALMOND', 'MMAX', '21', 'CRO', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4256080', 'MILKA 300G MILK ALMOND AND TRUFFLE', 'MMAX', '22', 'CRO', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4272813', 'MILKA 300G CHOCOCOOKIE', 'MMAX', '23', 'CRO', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4317941', 'MILKA 250G MILK WITH WHOLE NUTS ', 'MMAX', '24', 'CRO', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4316892', 'MILKA 250G NOISETTE ', 'MMAX', '25', 'CRO', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4316867', 'MILKA 250G ALPINE MILK', 'MMAX', '26', 'CRO', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('548221', 'MILKA 250G ALPINE MILK ', 'MMAX', '27', 'SLO', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('548227', 'MILKA 250G WHOLE NUTS ', 'MMAX', '28', 'SLO', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4040952', 'MILKA 270G MILK WITH WHOLE NUTS', 'MMAX', '29', 'SLO', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4040956', 'MILKA 270G ALPINE MILK ', 'MMAX', '30', 'SLO', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4040955', 'MILKA 270G NOISETTE 16', 'MMAX', '31', 'SLO', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4040972', 'MILKA 270G RAISINS AND NUTS', 'MMAX', '32', 'SLO', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4279280', 'MILKA 270G CHOCOWAFER ', 'MMAX', '33', 'SLO', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4281345', 'MILKA 276G CARAMEL PEANUT ', 'MMAX', '34', 'SLO', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4040958', 'MILKA 280G TRIOLADE', 'MMAX', '35', 'SLO', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4014666', 'MILKA 300G NUT NOUGAT ', 'MMAX', '36', 'SLO', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4256635', 'MILKA 300G STRAWBERRY CHEESECAKE', 'MMAX', '37', 'SLO', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4040871', 'MILKA 300G MILK WITH STRAWBERRY ', 'MMAX', '38', 'SLO', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4256639', 'MILKA 300G CHOCO AND BISCUIT', 'MMAX', '39', 'SLO', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4257962', 'MILKA 300G OREO BISCUIT ', 'MMAX', '40', 'SLO', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4256686', 'MILKA 300G TOFFEE WHOLENUTS ', 'MMAX', '41', 'SLO', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4256685', 'MILKA 300G ALMOND', 'MMAX', '42', 'SLO', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4256080', 'MILKA 300G MILK ALMOND AND TRUFFLE', 'MMAX', '43', 'SLO', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4272813', 'MILKA 300G CHOCOCOOKIE', 'MMAX', '44', 'SLO', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4317941', 'MILKA 250G MILK WITH WHOLE NUTS ', 'MMAX', '45', 'SLO', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4316892', 'MILKA 250G NOISETTE ', 'MMAX', '46', 'SLO', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4316867', 'MILKA 250G ALPINE MILK', 'MMAX', '47', 'SLO', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('548221', 'MILKA 250G ALPINE MILK ', 'MMAX', '48', 'BIH', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('548227', 'MILKA 250G WHOLE NUTS ', 'MMAX', '49', 'BIH', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4040952', 'MILKA 270G MILK WITH WHOLE NUTS', 'MMAX', '50', 'BIH', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4040956', 'MILKA 270G ALPINE MILK ', 'MMAX', '51', 'BIH', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4040955', 'MILKA 270G NOISETTE 16', 'MMAX', '52', 'BIH', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4040972', 'MKA 270G RAISINS MILK CHOC 15CA', 'MMAX', '53', 'BIH', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4279280', 'MILKA 270G CHOCOWAFER ', 'MMAX', '54', 'BIH', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4281345', 'MILKA 276G CARAMEL PEANUT ', 'MMAX', '55', 'BIH', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4040958', 'MILKA 280G TRIOLADE', 'MMAX', '56', 'BIH', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4014666', 'MILKA 300G NUT NOUGAT ', 'MMAX', '57', 'BIH', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4256635', 'MILKA 300G STRAWBERRY CHEESECAKE', 'MMAX', '58', 'BIH', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4040871', 'MILKA 300G MILK WITH STRAWBERRY ', 'MMAX', '59', 'BIH', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4256639', 'MILKA 300G CHOCO AND BISCUIT', 'MMAX', '60', 'BIH', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4257962', 'MILKA 300G OREO BISCUIT ', 'MMAX', '61', 'BIH', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4256686', 'MILKA 300G TOFFEE WHOLENUTS ', 'MMAX', '62', 'BIH', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4256685', 'MILKA 300G ALMOND', 'MMAX', '63', 'BIH', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4256080', 'MILKA 300G MILK ALMOND AND TRUFFLE', 'MMAX', '64', 'BIH', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4272813', 'MILKA 300G CHOCOCOOKIE', 'MMAX', '65', 'BIH', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4317941', 'MILKA 250G MILK WITH WHOLE NUTS ', 'MMAX', '66', 'BIH', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4316892', 'MILKA 250G NOISETTE ', 'MMAX', '67', 'BIH', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4316867', 'MILKA 250G ALPINE MILK', 'MMAX', '68', 'BIH', '{$now}', '{$now}');
        ";

        DB::unprepared($sql);

        //pastry

        $sql = "
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4316826', 'Milka Croissant Choco 50g', 'Pastry', '1', 'SRB', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4316829', 'Milka Croissant Vanilla 50g', 'Pastry', '1', 'SRB', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4316826', 'Milka Croissant Choco 50g', 'Pastry', '1', 'CRO', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4316829', 'Milka Croissant Vanilla 50g', 'Pastry', '1', 'CRO', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4316826', 'Milka Croissant Choco 50g', 'Pastry', '1', 'SLO', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4316829', 'Milka Croissant Vanilla 50g', 'Pastry', '1', 'SLO', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4316826', 'Milka Croissant Choco 50g', 'Pastry', '1', 'BIH', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4316829', 'Milka Croissant Vanilla 50g', 'Pastry', '1', 'BIH', '{$now}', '{$now}');
        ";

        DB::unprepared($sql);

        //praline

        $sql = "
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4309452', 'MILKA SIWM HAZELNUT 110G ', 'Praline', '4', 'SRB', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4309524', 'MILKA SIWM THANK YOU MILK 110G', 'Praline', '', 'SRB', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4309466', 'MILKA SIWM 110G STRAWBERRY', 'Praline', '', 'SRB', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4309487', 'MILKA GOOD LUCK MOUSSE 110G ', 'Praline', '', 'SRB', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4302485', 'MILKA 159G PARTY MIX ', 'Praline', '', 'SRB', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4306146', 'MILKA 158G FAVOURITES ', 'Praline', '', 'SRB', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4306603', 'MILKA 95G FAVOURITES ', 'Praline', '', 'SRB', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4309212', 'MILKA 44G HEART SHAPED HAZELNUT CREAM ', 'Praline', '', 'SRB', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4302485', 'MILKA 159G PARTY MIX ', 'Praline', '4', 'CRO', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4306146', 'MILKA 158G FAVOURITES ', 'Praline', '', 'CRO', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4306603', 'MILKA 95G FAVOURITES ', 'Praline', '', 'CRO', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4309212', 'MILKA 44G HEART SHAPED HAZELNUT CREAM ', 'Praline', '', 'CRO', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4309452', 'MILKA SIWM HAZELNUT 110G ', 'Praline', '', 'CRO', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4309524', 'MILKA SIWM THANK YOU MILK 110G', 'Praline', '', 'CRO', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4309466', 'MILKA SIWM 110G STRAWBERRY', 'Praline', '', 'CRO', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4309487', 'MILKA GOOD LUCK MOUSSE 110G ', 'Praline', '', 'CRO', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4309212', 'MILKA 44G HEART SHAPED HAZELNUT CREAM ', 'Praline', '4', 'SLO', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4309452', 'MILKA SIWM HAZELNUT 110G ', 'Praline', '', 'SLO', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4309524', 'MILKA SIWM THANK YOU MILK 110G', 'Praline', '', 'SLO', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4309466', 'MILKA SIWM 110G STRAWBERRY', 'Praline', '', 'SLO', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4309487', 'MILKA GOOD LUCK MOUSSE 110G ', 'Praline', '', 'SLO', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4302485', 'MILKA 159G PARTY MIX ', 'Praline', '', 'SLO', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4306146', 'MILKA 158G FAVOURITES ', 'Praline', '', 'SLO', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4306603', 'MILKA 95G FAVOURITES ', 'Praline', '', 'SLO', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4309452', 'MILKA SIWM HAZELNUT 110G ', 'Praline', '4', 'BIH', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4309524', 'MILKA SIWM THANK YOU MILK 110G', 'Praline', '', 'BIH', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4309466', 'MILKA SIWM 110G STRAWBERRY', 'Praline', '', 'BIH', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4309487', 'MILKA GOOD LUCK MOUSSE 110G ', 'Praline', '', 'BIH', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4302485', 'MILKA 159G PARTY MIX ', 'Praline', '', 'BIH', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4306146', 'MILKA 158G FAVOURITES ', 'Praline', '', 'BIH', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4306603', 'MILKA 95G FAVOURITES ', 'Praline', '', 'BIH', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4309212', 'MILKA 44G HEART SHAPED HAZELNUT CREAM ', 'Praline', '', 'BIH', '{$now}', '{$now}');
";

        DB::unprepared($sql);

        //table

        $sql = "
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4242036', 'MILKA 80G MILK WITH HAZELNUT', 'Table', '3', 'SRB', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('', 'MILKA EASTER 100G', 'Table', '3', 'SRB', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4242193', 'MILKA 80G NOISETTE', 'Table', '3', 'SRB', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4241996', 'MILKA 80G ALPINE MILK', 'Table', '3', 'SRB', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('355966', 'MILKA 87,5G MILKINIS  ', 'Table', '3', 'SRB', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4057071', 'MILKA 90G BUBBLY MILK ', 'Table', '3', 'SRB', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4056415', 'MILKA 90G PEANUT CARAMEL', 'Table', '3', 'SRB', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4057058', 'MILKA 92G OREO SENDWICH', 'Table', '3', 'SRB', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4256075', 'MILKA 100G CREAM & BISCUIT', 'Table', '3', 'SRB', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4053907', 'MILKA 95G WHITE BUBBLY', 'Table', '3', 'SRB', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4242273', 'MILKA 100G WITH WHOLE HAZELNUTS', 'Table', '3', 'SRB', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4252694', 'MILKA 100G CHOCO MOUSSE', 'Table', '3', 'SRB', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4057473', 'MILKA 100G MILK WITH STRAWBERRY ', 'Table', '3', 'SRB', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4242204', 'MILKA 100G RAISINS AND NUTS', 'Table', '3', 'SRB', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('642735', 'MILKA 100G RASPBERRY', 'Table', '3', 'SRB', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4047052', 'MILKA 100G OREO COOKIES ', 'Table', '3', 'SRB', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4307426', 'MILKA NOUGAT CREME 85G ', 'Table', '3', 'SRB', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4071971', 'MILKA OREO BROWNIE 100G ', 'Table', '3', 'SRB', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4047055', 'MILKA 100G CHIPS AHOY! ', 'Table', '3', 'SRB', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4303640', 'MILKA 100G OREO WHITE ', 'Table', '3', 'SRB', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4301332', 'MILKA WHITE 100G ', 'Table', '3', 'SRB', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4067211', 'MILKA 100G CARAMEL ', 'Table', '3', 'SRB', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4319442', 'MILKA 90G BISCOFF ', 'Table', '3', 'SRB', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4317212', 'MILKA 95G WITH WHOLE HAZELNUTS ', 'Table', '3', 'SRB', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4317147', 'MILKA 90G RAISIN AND NUT ', 'Table', '3', 'SRB', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4317300', 'MILKA WHITE 90G ', 'Table', '3', 'SRB', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4319722', 'MILKA 190G CHOP CAR ALMONDS ', 'Table', '3', 'SRB', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4320251', 'MILKA 190G WHOLE NUT ', 'Table', '3', 'SRB', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4320264', 'MILKA 190G BISCOFF ', 'Table', '3', 'SRB', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4320282', 'MILKA 190G ALPINE MILK ', 'Table', '3', 'SRB', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4320285', 'MILKA 190G NOISETTE ', 'Table', '3', 'SRB', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4047056', 'MILKA 100G MILKINIS', 'Table', '3', 'CRO', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('', 'MILKA EASTER 100G', 'Table', '3', 'CRO', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4313982', 'MILKA 100G YOGHURT', 'Table', '3', 'CRO', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4242036', 'MILKA 80G MILK WITH HAZELNUT', 'Table', '3', 'CRO', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4242193', 'MILKA 80G NOISETTE', 'Table', '3', 'CRO', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4241996', 'MILKA 80G ALPINE MILK', 'Table', '3', 'CRO', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('355966', 'MILKA 87,5G MILKINIS  ', 'Table', '3', 'CRO', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4057071', 'MILKA 90G BUBBLY MILK ', 'Table', '3', 'CRO', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4254207', 'MILKA 90G ALMOND', 'Table', '3', 'CRO', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4056415', 'MILKA 90G PEANUT CARAMEL', 'Table', '3', 'CRO', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4057058', 'MILKA 92G OREO SENDWICH', 'Table', '3', 'CRO', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4256075', 'MILKA 100G CREAM & BISCUIT', 'Table', '3', 'CRO', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4053907', 'MILKA 95G WHITE BUBBLY', 'Table', '3', 'CRO', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4242273', 'MILKA 100G WITH WHOLE HAZELNUTS', 'Table', '3', 'CRO', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4252694', 'MILKA 100G CHOCO MOUSSE', 'Table', '3', 'CRO', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4057473', 'MILKA 100G MILK WITH STRAWBERRY ', 'Table', '3', 'CRO', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4242204', 'MILKA 100G RAISINS AND NUTS', 'Table', '3', 'CRO', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('642735', 'MILKA 100G RASPBERRY', 'Table', '3', 'CRO', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4047052', 'MILKA 100G OREO COOKIES ', 'Table', '3', 'CRO', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4307426', 'MILKA NOUGAT CREME 85G ', 'Table', '3', 'CRO', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4071971', 'MILKA OREO BROWNIE 100G ', 'Table', '3', 'CRO', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4047055', 'MILKA 100G CHIPS AHOY! ', 'Table', '3', 'CRO', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4303640', 'MILKA 100G OREO WHITE ', 'Table', '3', 'CRO', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4301332', 'MILKA WHITE 100G ', 'Table', '3', 'CRO', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4067211', 'MILKA 100G CARAMEL ', 'Table', '3', 'CRO', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4312557', 'MILKA SWEET EASTER 90G TAB  ČOK', 'Table', '3', 'CRO', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('355940', 'MILKA 43,75G MILKINIS', 'Table', '3', 'CRO', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4319442', 'MILKA 90G BISCOF', 'Table', '3', 'CRO', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4317212', 'MILKA 95G WITH WHOLE HAZELNUTS ', 'Table', '3', 'CRO', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4317147', 'MILKA 90G RAISIN AND NUT ', 'Table', '3', 'CRO', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4317300', 'MILKA WHITE 90G ', 'Table', '3', 'CRO', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4319722', 'MILKA 190G CHOP CAR ALMONDS ', 'Table', '3', 'CRO', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4320251', 'MILKA 190G WHOLE NUT ', 'Table', '3', 'CRO', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4320264', 'MILKA 190G BISCOFF ', 'Table', '3', 'CRO', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4320282', 'MILKA 190G ALPINE MILK ', 'Table', '3', 'CRO', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4320285', 'MILKA 190G NOISETTE ', 'Table', '3', 'CRO', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4047056', 'MILKA 100G MILKINIS', 'Table', '3', 'SLO', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('', 'MILKA EASTER 100G', 'Table', '3', 'SLO', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4313982', 'MILKA 100G YOGHURT', 'Table', '3', 'SLO', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4242007', 'MILKA 100G HAZELNUT', 'Table', '3', 'SLO', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4241991', 'MILKA 100G ALPINE MILK', 'Table', '3', 'SLO', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4242156', 'MILKA 100G NOISETTE', 'Table', '3', 'SLO', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('355966', 'MILKA 87,5G MILKINIS  ', 'Table', '3', 'SLO', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4057071', 'MILKA 90G BUBBLY MILK ', 'Table', '3', 'SLO', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4056415', 'MILKA 90G PEANUT CARAMEL', 'Table', '3', 'SLO', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4057058', 'MILKA 92G OREO SENDWICH', 'Table', '3', 'SLO', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4256075', 'MILKA 100G CREAM & BISCUIT', 'Table', '3', 'SLO', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4053907', 'MILKA 95G WHITE BUBBLY', 'Table', '3', 'SLO', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4242273', 'MILKA 100G WITH WHOLE HAZELNUTS', 'Table', '3', 'SLO', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4252694', 'MILKA 100G CHOCO MOUSSE', 'Table', '3', 'SLO', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4057473', 'MILKA 100G MILK WITH STRAWBERRY ', 'Table', '3', 'SLO', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4242204', 'MILKA 100G RAISINS AND NUTS', 'Table', '3', 'SLO', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('642735', 'MILKA 100G RASPBERRY', 'Table', '3', 'SLO', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4047052', 'MILKA 100G OREO COOKIES ', 'Table', '3', 'SLO', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4307426', 'MILKA NOUGAT CREME 85G ', 'Table', '3', 'SLO', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4071971', 'MILKA OREO BROWNIE 100G ', 'Table', '3', 'SLO', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4047055', 'MILKA 100G CHIPS AHOY! ', 'Table', '3', 'SLO', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4303640', 'MILKA 100G OREO WHITE ', 'Table', '3', 'SLO', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4301332', 'MILKA WHITE 100G ', 'Table', '3', 'SLO', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4067211', 'MILKA 100G CARAMEL ', 'Table', '3', 'SLO', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4312557', 'MILKA SWEET EASTER 90G TABLET 21CA', 'Table', '3', 'SLO', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4319442', 'MILKA 90G BISCOFF ', 'Table', '3', 'SLO', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4317142', 'MILKA 90G HAZELNUT', 'Table', '3', 'SLO', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4317589', 'MILKA 90G NOISETTE ', 'Table', '3', 'SLO', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4317809', 'MILKA 90G ALPINE MILK', 'Table', '3', 'SLO', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4317212', 'MILKA 95G WITH WHOLE HAZELNUTS ', 'Table', '3', 'SLO', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4317147', 'MILKA 90G RAISIN AND NUT ', 'Table', '3', 'SLO', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4317300', 'MILKA WHITE 90G ', 'Table', '3', 'SLO', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4319722', 'MILKA 190G CHOP CAR ALMONDS ', 'Table', '3', 'SLO', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4320251', 'MILKA 190G WHOLE NUT ', 'Table', '3', 'SLO', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4320264', 'MILKA 190G BISCOFF ', 'Table', '3', 'SLO', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4320282', 'MILKA 190G ALPINE MILK ', 'Table', '3', 'SLO', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4320285', 'MILKA 190G NOISETTE ', 'Table', '3', 'SLO', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4242036', 'MILKA 80G MILK WITH HAZELNUT', 'Table', '3', 'BIH', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('', 'MILKA EASTER 100G', 'Table', '3', 'BIH', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4242193', 'MILKA 80G NOISETTE', 'Table', '3', 'BIH', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4241996', 'MILKA 80G ALPINE MILK', 'Table', '3', 'BIH', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('355966', 'MILKA 87,5G MILKINIS  ', 'Table', '3', 'BIH', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4057071', 'MILKA 90G BUBBLY MILK', 'Table', '3', 'BIH', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4056415', 'MILKA 90G PEANUT CARAMEL', 'Table', '3', 'BIH', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4057058', 'MILKA 92G OREO SENDWICH', 'Table', '3', 'BIH', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4256075', 'MILKA 100G CREAM & BISCUIT', 'Table', '3', 'BIH', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4053907', 'MILKA 95G WHITE BUBBLY', 'Table', '3', 'BIH', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4242273', 'MILKA 100G WITH WHOLE HAZELNUTS', 'Table', '3', 'BIH', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4057473', 'MILKA 100G MILK WITH STRAWBERRY ', 'Table', '3', 'BIH', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4242204', 'MILKA 100G RAISINS AND NUTS', 'Table', '3', 'BIH', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('642735', 'MILKA 100G RASPBERRY', 'Table', '3', 'BIH', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4047052', 'MILKA 100G OREO COOKIES ', 'Table', '3', 'BIH', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4307426', 'MILKA NOUGAT CREME 85G ', 'Table', '3', 'BIH', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4071971', 'MILKA OREO BROWNIE 100G ', 'Table', '3', 'BIH', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4047055', 'MILKA 100G CHIPS AHOY! ', 'Table', '3', 'BIH', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4303640', 'MILKA 100G OREO WHITE ', 'Table', '3', 'BIH', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4301332', 'MILKA WHITE 100G ', 'Table', '3', 'BIH', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4067211', 'MILKA 100G CARAMEL ', 'Table', '3', 'BIH', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4319442', 'MILKA 90G BISCOFF ', 'Table', '3', 'BIH', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4252694', 'MILKA 100G CHOCO MOUSSE', 'Table', '3', 'BIH', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4317212', 'MILKA 95G WITH WHOLE HAZELNUTS ', 'Table', '3', 'BIH', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4317147', 'MILKA 90G RAISIN AND NUT ', 'Table', '3', 'BIH', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4317300', 'MILKA WHITE 90G ', 'Table', '3', 'BIH', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4319722', 'MILKA 190G CHOP CAR ALMONDS ', 'Table', '3', 'BIH', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4320251', 'MILKA 190G WHOLE NUT ', 'Table', '3', 'BIH', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4320264', 'MILKA 190G BISCOFF ', 'Table', '3', 'BIH', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4320282', 'MILKA 190G ALPINE MILK ', 'Table', '3', 'BIH', '{$now}', '{$now}');
            INSERT INTO products (skuCode, skuName, category, pointsValue, country, created_at, updated_at) VALUES ('4320285', 'MILKA 190G NOISETTE ', 'Table', '3', 'BIH', '{$now}', '{$now}');
";

        DB::unprepared($sql);
    }
}
