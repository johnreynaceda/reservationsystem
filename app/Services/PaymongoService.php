<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class PaymongoService
{
    public function create_payment_link($data = [])
    {
        // $auth_key = base64_encode(config('app.PM_secret_key'));
        // $response = Http::post('https://api.paymongo.com/v1/links')
        $client = new \GuzzleHttp\Client();
        $auth_key = base64_encode('sk_test_16yZ66JGVgMo1PwyB2p4txf6');


        // $response = $client->request('POST', 'https://api.paymongo.com/v1/links', [
        //     'body' => json_encode($data),
        //     'headers' => [
        //         'accept' => 'application/json',
        //         'authorization' => 'Basic ' . $auth_key,
        //         'content-type' => 'application/json',
        //     ],
        //     'stream' => false,
        // ]);
        $response = Http::accept('application/json')->withHeaders([
            'authorization' => 'Basic ' . $auth_key,
            'content-type' => 'application/json',
        ])->post('https://api.paymongo.com/v1/links', $data);

        // dd($response->object());
        return $response->object();
    }

    public function retrieve_payment_link($reference_number)
    {

        $client = new \GuzzleHttp\Client();
        $auth_key = base64_encode('sk_test_16yZ66JGVgMo1PwyB2p4txf6');


        // $response = $client->request('GET', 'https://api.paymongo.com/v1/links/' . $reference_number, [
        //     'headers' => [
        //         'accept' => 'application/json',
        //         'authorization' => 'Basic ' . $auth_key,
        //     ],
        // ]);
        $response = Http::accept('application/json')->withHeaders([
            'authorization' => 'Basic ' . $auth_key,
            'content-type' => 'application/json',
        ])->get('https://api.paymongo.com/v1/links/' . $reference_number);

        return $response->object();
    }
}