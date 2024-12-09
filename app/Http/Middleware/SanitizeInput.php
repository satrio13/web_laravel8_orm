<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class SanitizeInput
{
    public function handle(Request $request, Closure $next)
    {
        // Daftar input yang ingin dikecualikan dari sanitasi
        $excludedFields = ['keterangan','isi','profil'];

        // Loop melalui semua input
        $sanitizedInput = [];

        foreach($request->all() as $key => $value)
        {
            if(in_array($key, $excludedFields))
            {
                // Jika field ada dalam daftar pengecualian, tambahkan tanpa sanitasi
                $sanitizedInput[$key] = $value;
            }elseif(is_string($value))
            {
                // Sanitasi string dengan menghapus tag HTML
                $sanitizedInput[$key] = strip_tags($value);
            }elseif(filter_var($value, FILTER_VALIDATE_URL))
            {
                // Jika input adalah URL, sanitasi menggunakan FILTER_SANITIZE_URL
                $sanitizedInput[$key] = filter_var($value, FILTER_SANITIZE_URL);
            }else
            {
                // Untuk tipe data lain, biarkan tetap sama
                $sanitizedInput[$key] = $value;
            }
        }

        // Mengganti input dengan yang sudah disanitasi
        $request->merge($sanitizedInput);

        return $next($request);
    }

}