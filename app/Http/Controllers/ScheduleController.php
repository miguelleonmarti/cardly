<?php

namespace App\Http\Controllers;

use App\Schedule;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    public function create()
    {
        return view('schedule');
    }

    public function search(Request $request)
    {
        if ($request->ajax()) {
            $output = "";
            $schedules = Schedule::where('line', 'LIKE', '%' . $request->search . "%")->get();
            if ($schedules) {
                foreach ($schedules as $schedule) {
                    $output .= '<tr>' .
                        '<td>' . $schedule->line . '</td>' .
                        '<td>' . $schedule->name . '</td>' .
                        '<td>' . $schedule->from . '</td>' .
                        "<td><a href='$schedule->fromImage'>Schedule image</a></td>" .
                        '<td>' . $schedule->to . '</td>' .
                        "<td><a href='$schedule->toImage'>Schedule image</a></td>" .
                        '</tr>';
                }
                return Response($output);
            }
        }
    }
}
