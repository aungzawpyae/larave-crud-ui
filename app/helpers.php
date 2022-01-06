<?php

use Illuminate\Support\Str;
use Illuminate\Contracts\Routing\ResponseFactory;
use App\Network\ApiClient;

if (! function_exists('response_ok')) {
    function response_ok($data, $status = 200, $headers = [])
    {
        if ($data instanceof \Illuminate\Contracts\Support\Arrayable) {
            $data = $data->toArray();
        }

        return app(ResponseFactory::class)->json($data, $status, $headers);
    }
}

if (! function_exists('response_success')) {
    function response_success($status = 200, $headers = [])
    {
        return app(ResponseFactory::class)->json(['success' => true], $status, $headers);
    }
}

if (! function_exists('response_error')) {
    function response_error($message, $status = 500, $headers = [])
    {
        $data = [
            'message' => $message,
            'status'  => $status,
        ];

        return app(ResponseFactory::class)->json($data, $status, $headers);
    }
}

if (! function_exists('response_unauthorized')) {
    function response_unauthorized($message = 'Unauthorized', $headers = [])
    {
        return response_error($message, 401, $headers);
    }
}

if (! function_exists('response_404')) {
    function response_404($message = 'Data Missing', $headers = [])
    {
        return response_error($message, 404, $headers);
    }
}

if (! function_exists('ds_asset')) {
    function ds_asset($path)
    {
        if (! Str::startsWith($path, '/')) {
            $path = "/{$path}";
        }

       /*if (! app()->isProduction()) {
            return asset($path);
       }*/

       return config('services.ds_cdn') . $path;
    }
}

if (! function_exists('generateRandomString')) {
    function generateRandomString($length = 10)
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }

        return $randomString;
    }
}

if(!function_exists('isJSON')){
     function isJSON($string){
        return is_string($string) && is_array(json_decode($string, true)) && (json_last_error() == JSON_ERROR_NONE) ? true : false;
     }
}

if(!function_exists('parseToArray')){

     function parseToArray($data){
        if(is_string($data)){
            if(isJSON($data)){
                return json_decode($data);
            }
            else{
                return array_map('trim', explode(',', $data));
            }
        }

        return $data;
    }
}

if(!function_exists('change_mm_format')){
    function change_mm_format($str){
        if(!empty($str) && (is_string($str) || is_numeric($str)) ){
            $str_arr = str_split($str);

            $str_arr = array_map(function($char) {
                return trans("message.$char");
            }, $str_arr);

            return join('',$str_arr);
        }
        elseif(null != $str){
            return trans("message.$str");;
        }
        return '';
    }
}

if (! function_exists('gs_image_url')) {
    function gs_image_url($path) {
        if (is_null($path)) {
            return null;
        }

        $url = parse_url($path);
        if (isset($url['scheme']) && ($url['scheme'] == 'https' || $url['scheme'] == 'http')) {
            return $path;
        }

        $path = $path instanceof Ds\Core\Models\Image ? $path->path : $path;

        return url('resources') . '?url=' . $path;
    }
}

if (! function_exists('google_storage_url_for_path')) {
    function google_storage_url_for_path($path) {
        return Storage::disk('gcs')->url($path);
    }
}

if(!function_exists('mm_local_time')) {
    function mm_local_time($time){
        return new Carbon($time, 'Asia/Rangoon');
    }
}

if(!function_exists('fetch_api')) {
    function fetch_api(){
        return new ApiClient();
    }
}