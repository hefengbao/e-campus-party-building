<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PayController extends Controller
{
    public function index()
    {
        $start = \DateTime::createFromFormat('','');

        $end = clone $start;

        print_r([
            mb_strlen('你好ab'),
            strlen('你好ab'),
            mb_strlen('123'),
            strlen('123'),
            mb_substr('你好ab', 0, 5),
            substr('你好ab', 0,5)
        ]);
    }
}
