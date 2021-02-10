<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use mysql_xdevapi\Result;

class CalculareController extends Controller
{
    public function calculator($nr1,$nr2,$opr){
        $result="";
        switch ($opr){
            case ':':
                $result = $nr1 / $nr2;
                return view('calculator' ,['result'=>$result]);
                break;
            case '*':
                $result = $nr1 * $nr2;
                return view('calculator' ,['result'=>$result]);
                break;
            case '%':
                $result = $nr1 % $nr2;
                return view('calculator' ,['result'=>$result]);
                break;
            case '+':
                $result = $nr1 + $nr2;
                return view('calculator' ,['result'=>$result]);
                break;
            case '-':
                $result = $nr1 - $nr2;
                return view('calculator' ,['result'=>$result]);
                break;
        }

    }
}
