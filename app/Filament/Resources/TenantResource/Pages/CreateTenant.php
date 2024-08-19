<?php

namespace App\Filament\Resources\TenantResource\Pages;

use App\Filament\Resources\TenantResource;
use App\Models\Tenant;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateTenant extends CreateRecord
{
    protected static string $resource = TenantResource::class;

    protected function handleRecordCreation(array $data): Tenant
    {
        $tenant = Tenant::create([
            'id' => $data['id'],
            'data' => $data['id'].'.tenancytest1.test'
        ]);

        $tenant->domains()->create(['domain' => $data['id'].'.tenancytest1.test']);
        return $tenant;
    }

}
