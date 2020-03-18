<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FallController
{
    public function getFall(Request $request)
    {
        $eixoX = pow($request->x, 2);
        $eixoY = pow($request->y, 2);
        $eixoZ = pow($request->z, 2);

        $aceleracao = sqrt($eixoX * $eixoY * $eixoZ);
        $data['aceleracao'] = $aceleracao / 9.8;
        return response()
            ->json($data, 200);

    }
}
