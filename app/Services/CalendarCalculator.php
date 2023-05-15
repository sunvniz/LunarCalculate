<?php

namespace App\Services;

use Carbon\Carbon;

class CalendarCalculator
{
	public function handle(Carbon $today)
	{
		echo $today->format('Y-m-d H:i:s');
	}
}