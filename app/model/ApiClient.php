<?php
declare(strict_types=1);

namespace App\model;

/**
 *
 */
class ApiClient
{

    private const API_URL = "http://www.api.webtask.com";

    public function getData(): iterable
    {
        $content = file_get_contents(self::API_URL);
        $data    = json_decode($content);

        return $data;
    }
}