<?php

namespace App\Repositories\Customers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Repositories\Entity;

class Customer extends Entity
{
    const DISABLE   = 0;
    const ENABLE    = 1;

    const ALL_STATUS = [
        self::DISABLE,
        self::ENABLE,
    ];
    const DISPLAY_STATUS = [
        self::DISABLE   => 'Không hiển thị',
        self::ENABLE    => 'Hiển thị'
    ];

    const NOT_MAIN      = 0;
    const MAIN          = 1;

    const DISPLAY_BRANCH = [
        self::NOT_MAIN      => 'Chi nhánh phụ',
        self::MAIN          => 'Chi nhánh chính'
    ];

    /**
     * Fillable definition
     * @var array
     */
    protected $fillable = [
        'full_name',
        'email',
        'password',
        'address',
        'phone',
    ];
}
