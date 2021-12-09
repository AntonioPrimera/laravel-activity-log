<?php

namespace AntonioPrimera\ActivityLog\Models;

use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    //-- --- Constants ------------------------------------------------------------------------------------------------

    const LEVEL_INFO     = 'I';
    const LEVEL_WARNING  = 'W';
    const LEVEL_ERROR    = 'E';
    const LEVEL_CRITICAL = 'C';

    //-- --- Attributes -----------------------------------------------------------------------------------------------

    /**
     * The database connection that should be used by the model.
     *
     * @var string
     */
    protected $connection = 'activity_log';

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'logs';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'system_uid',
        'process',
        'file',
        'contents',
        'data',
        'level',
        'counter',
    ];
}