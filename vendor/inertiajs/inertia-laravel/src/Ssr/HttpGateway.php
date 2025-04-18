<?php

namespace Inertia\Ssr;

use Exception;
use Illuminate\Support\Facades\Http;

class HttpGateway implements Gateway
{
    /**
     * Dispatch the Inertia page to the Server Side Rendering engine.
     */
    public function dispatch(array $page): ?Response
    {
        if (! config('inertia.ssr.enabled', true) || ! (new BundleDetector)->detect()) {
            return null;
        }

        $url = str_replace('/render', '', rtrim(config('inertia.ssr.url', 'http://127.0.0.1:13714'), '/')).'/render';

        try {
            $response = Http::post($url, $page)->throw()->json();
        } catch (Exception $e) {
            return null;
        }

        if (is_null($response)) {
            return null;
        }

        return new Response(
            implode("\n", $response['head']),
            $response['body']
        );
    }
}
