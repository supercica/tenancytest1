<?php

namespace App\Models;


use Stancl\Tenancy\Database\Models\Tenant as BaseTenant;
use Stancl\Tenancy\Contracts\TenantWithDatabase;
use Stancl\Tenancy\Database\Concerns\HasDatabase;
use Stancl\Tenancy\Database\Concerns\HasDomains;

class Tenant extends BaseTenant //jeja implements TenantWithDatabase - no database per tenant
{
    // jeja single database
    // use HasDatabase; - no database per tenant
    use HasDomains;
}
