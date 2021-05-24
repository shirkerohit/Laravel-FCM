<?php

namespace LaravelFCM;

use GuzzleHttp\Client;
use Illuminate\Support\Manager;

class FCMManager extends Manager
{
    public function getDefaultDriver()
    {
        return config('fcm.driver');
    }

    protected function createHttpDriver()
    {
        $config = config('fcm.http', []);

        return new Client(['timeout' => $config['timeout']]);
    }
}
