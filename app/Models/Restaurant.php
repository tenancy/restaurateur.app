<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * @property int $id
 * @property string $name
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
class Restaurant extends Model
{

}
