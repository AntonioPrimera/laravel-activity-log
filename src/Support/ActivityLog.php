<?php

namespace AntonioPrimera\ActivityLog\Support;

use AntonioPrimera\ActivityLog\Models\Log;
use Carbon\Carbon;
use Exception;

class ActivityLog
{
    /**
     * Stores a Log in the database
     *
     * @param string $systemUid
     * @param string $process
     * @param string $contents
     * @param string $level
     * @param string|null $file
     * @param array|null $data
     *
     * @return mixed
     */
    public static function create(
        string $systemUid,
        string $process,
        string $contents,
        string $level,
        ?string $file = null,
        ?array $data = []
    )
    {
        $latestLog = Log::latest()->first();

        if (
            $latestLog
            && $latestLog->system_uid === $systemUid
            && $latestLog->process    === $process
            && $latestLog->contents   === $contents
            && $latestLog->level      === $level
            && $latestLog->file       === $file
        ) {
            $latestLog->update([
               'counter' => ++$latestLog->counter,
            ]);

            return $latestLog;
        }

        return Log::create([
            'system_uid' => $systemUid,
            'process'    => $process,
            'contents'   => $contents,
            'level'      => $level,
            'file'       => $file,
            'data'       => json_encode($data),
            'counter'    => 1,
        ]);
    }

    /**
     * Get a list of resources from
     * db over a period time.
     *
     * @param Carbon|null $from
     * @param Carbon|null $to
     *
     * @return mixed
     * @throws Exception
     */
    public static function get(?Carbon $from = null, ?Carbon $to = null)
    {
        // from can't be greater than end
        if ($from && $to && $to->gt($from))
            throw new Exception('The end date must be greater than the start date');

        // in case we do not receive a from date then we set it for the beginning of the current day
        if (!$from)
            $from = Carbon::today()->startOfDay();

        // in case we do not receive an end date then we set it for now
        if (!$to)
            $to = Carbon::now();

        return Log::where('created_at', '>=', $from)
            ->where('created_at', '<=', $to)
            ->get();
    }
}