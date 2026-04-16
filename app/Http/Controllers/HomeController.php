<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    public function index()
    {
        $response = Http::get(config('app.dashboard_url') . '/home');

        $data = $response->json();

        // change all image URLs
        $this->transformImages($data);
        // dd($data['about_act']['image']);
        return view('frontend.pages.index', compact('data'));
    }

    private function formatImageUrl($url)
    {
        if (!$url)
            return null;

        $old = "http://admin.continuitycare.com.au/storage/";
        $new = url('/api/image/');

        return str_replace($old, $new . '/', $url);
    }

    private function transformImages(&$data)
    {
        foreach ($data as $key => &$value) {

            if ($key === 'image' && is_string($value)) {
                $value = $this->formatImageUrl($value);
            }

            if (is_array($value)) {
                $this->transformImages($value);
            }
        }
    }
}