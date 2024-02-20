<?php
declare(strict_types=1);

namespace App\model;

/**
 *
 */
final class ApiClient
{

    private const API_URL = "http://www.api.webtask.com";

    public function getResource(string $resource = ""): iterable
    {
        $content = file_get_contents(self::API_URL . $resource);
        $data    = json_decode($content);

        return $data;
    }
}