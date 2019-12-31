<?php

namespace Laravel\Cashier\Tests;

use Carbon\Carbon;
use Braintree_Configuration;
use Illuminate\Http\Request;
use Laravel\Cashier\Billable;
use PHPUnit\Framework\TestCase;
use Illuminate\Database\Schema\Builder;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\ConnectionInterface;
use Illuminate\Database\Capsule\Manager as DB;
use Illuminate\Database\Eloquent\Model as Eloquent;
use Laravel\Cashier\Http\Controllers\WebhookController;

class CashierTest extends TestCase
{
    public function test_true_is_true()
    {
        $this->assertTrue(true);
    }
}
