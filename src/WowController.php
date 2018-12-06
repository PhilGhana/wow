<?php

namespace Wisp1999\Wow;

use App\Http\Controllers\Controller;
use Wisp1999\HelloWorld\Model\Test;

class WowController extends Controller
{
    public function index()
    {

        $title = Test::find(1)->get();
        $message = $title[0]['title'];
        echo '這是第2個package:';
        echo $message;
    }
}
