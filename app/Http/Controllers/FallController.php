<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class FallController {
    public function getFall(Request $request)
    {
        $eixoX = pow($request->x, 2);
        $eixoY = pow($request->y, 2);
        $eixoZ = pow($request->z, 2);

        $aceleracao = sqrt($eixoX * $eixoY * $eixoZ);
        $aceleracao /= 9.8 *9.8;
        return $aceleracao;

    }
}