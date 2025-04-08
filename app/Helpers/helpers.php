<?php

use Carbon\Carbon;
use App\Services\SimilarityTool;

if (! function_exists ( 'print_a' )) {
    function print_a($a) {
        print '<pre>';
        print_r( $a );
        print "</pre>";
    }
}

if(! function_exists ( 'guidv4' )) {
    function guidv4($trim = true)
    {
        // Windows
        if (function_exists('com_create_guid') === true) {
            if ($trim === true)
                return trim(com_create_guid(), '{}');
            else
                return com_create_guid();
        }

        // OSX/Linux
        if (function_exists('openssl_random_pseudo_bytes') === true) {
            $data = openssl_random_pseudo_bytes(16);
            $data[6] = chr(ord($data[6]) & 0x0f | 0x40);    // set version to 0100
            $data[8] = chr(ord($data[8]) & 0x3f | 0x80);    // set bits 6-7 to 10
            return vsprintf('%s%s-%s-%s-%s-%s%s%s', str_split(bin2hex($data), 4));
        }

        // Fallback (PHP 4.2+)
        mt_srand((double)microtime() * 10000);
        $charid = strtolower(md5(uniqid(rand(), true)));
        $hyphen = chr(45);                  // "-"
        $lbrace = $trim ? "" : chr(123);    // "{"
        $rbrace = $trim ? "" : chr(125);    // "}"
        $guidv4 = $lbrace .
            substr($charid, 0, 8) . $hyphen .
            substr($charid, 8, 4) . $hyphen .
            substr($charid, 12, 4) . $hyphen .
            substr($charid, 16, 4) . $hyphen .
            substr($charid, 20, 12) .
            $rbrace;
        return $guidv4;
    }
}

if (! function_exists ( 'toISODate' )) {
    function toISODate($inDate) {
        $date=date_create($inDate);

        return date_format($date,"Y-m-d");
    }
}

if (! function_exists ( 'fromISODate' )) {
    function fromISODate($inDate) {
        $date=date_create($inDate);

        return date_format($date,"d.m.Y");
    }
}

if (! function_exists ( 'fromISODateTime' )) {
    function fromISODateTime($inDate) {
        $date=date_create($inDate);

        return date_format($date,"d.m.Y H.i");
    }
}

if (! function_exists ( 'toISODateTime' )) {
    function toISODateTime($inDate) {
        $date=date_create($inDate);

        return date_format($date,"Y-m-d H.i.s");
    }
}
/**
 * Write code on Method
 *
 * @return response()
 */
if (! function_exists('convertYmdToMdy')) {
    function convertYmdToMdy($date)
    {
        return Carbon::createFromFormat('Y-m-d', $date)->format('m-d-Y');
    }
}

/**
 * Write code on Method
 *
 * @return response()
 */
if (! function_exists('convertMdyToYmd')) {
    function convertMdyToYmd($date)
    {
        return Carbon::createFromFormat('m-d-Y', $date)->format('Y-m-d');
    }
}

if (! function_exists('compareTwoStrings')) {
    function compareTwoStrings($string1, $string2)
    {
        $simTool = new SimilarityTool();

        $result = $simTool->compareStrings($string1, $string2);

        return $result;
    }
}
