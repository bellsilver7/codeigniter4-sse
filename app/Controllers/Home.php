<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }

    public function stream()
    {
        if (ob_get_level()) {
            // 버퍼가 있을 경우
            ob_end_flush(); 
        }

        header('Content-Type: text/event-stream');
        header('Cache-Control: no-cache');
        header('X-Accel-Buffering: no'); // nginx proxy buffering 비활성화를 위한 설정

        $counter = rand(1, 10);
        while (!connection_aborted()) {
            // "ping" 이벤트를 초당 송신

            echo "event: ping\n";
            $curDate = date(DATE_ATOM);
            echo 'data: {"time": "' . $curDate . '"}';
            echo "\n\n";

            // 간단한 메시지를 랜덤 간격으로 송신

            $counter--;

            if (!$counter) {
                echo 'data: This is a message at time ' . $curDate . "\n\n";
                $counter = rand(1, 10);
            }

            ob_flush();
            flush();

            sleep(1);
        }
    }
}
