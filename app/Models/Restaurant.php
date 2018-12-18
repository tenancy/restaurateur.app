<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;
use Tenancy\Identification\Concerns\AllowsTenantIdentification;
use Tenancy\Identification\Contracts\Tenant;
use Tenancy\Identification\Drivers\Http\Contracts\IdentifiesByHttp;

/**
 * @property int $id
 * @property string $name
 * @property string $slug
 * @property string $domain
 * @property bool $is_online
 * @property bool $is_paid_for
 * @property bool $is_accepting_reservations
 * @property bool $is_showing_menu
 * @property string $address
 * @property string $phone
 * @property string $email
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * @property Carbon $deleted_at
 */
class Restaurant extends Model implements Tenant, IdentifiesByHttp
{
    use AllowsTenantIdentification;

    /**
     * Specify whether the tenant model is matching the request.
     *
     * @param Request $request
     * @return Tenant
     */
    public function tenantIdentificationByHttp(Request $request): ?Tenant
    {
        $host = $request->getHost();
        $appHost = parse_url(config('app.url'), PHP_URL_HOST);

        return $this->newQuery()
            ->where('domain', $host)
            ->when(Str::endsWith($host, $appHost), function ($query) use ($host, $appHost) {
                $slug = Str::replaceLast(".$appHost", '', $host);

                return $query->orWhere('slug', $slug);
            })
            ->first();
    }
}
