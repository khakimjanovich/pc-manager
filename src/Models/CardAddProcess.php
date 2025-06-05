<?php

namespace Khakimjanovich\PCManager\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Attributes\ObservedBy;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Crypt;
use Khakimjanovich\PCManager\Data\CardAddProcess\CreateData;
use Khakimjanovich\PCManager\Observers\CardAddProcessObserver;

/**
 * @property string $id
 * @property string $pan
 * @property string $expiry_date
 * @property string $phone_number
 * @property string $bin
 * @property string $name
 * @property bool $is_main
 * @property string $local_owner_id
 * @property string $order
 * @property string $confirmer
 * @property Carbon $created_at
 */
#[ObservedBy(CardAddProcessObserver::class)]
abstract class CardAddProcess extends Model
{
    public $incrementing = false;
    protected $table = 'pc_manager_card_add_processes';
    protected $keyType = 'string';
    protected $fillable = [
        'encrypted_pan', 'expiry_date', 'phone_number', 'bin', 'name', 'is_main', 'local_owner_id', 'order',
        'encrypted_confirmer'
    ];

    protected $appends = ['pan', 'confirmer'];

    protected $hidden = ['encrypted_pan', 'encrypted_confirmer'];

    public static function create(CreateData $data): static
    {
        return static::query()->create([
            'encrypted_pan' => Crypt::encryptString($data->pan), 'expiry_date' => $data->expiry_date, 'phone_number' => $data->phone_number,
            'bin' => $data->bin, 'name' => $data->name, 'is_main' => $data->is_main, 'local_owner_id' => $data->local_owner_id,
            'order' => $data->order, 'encrypted_confirmer' => Crypt::encryptString($data->confirmer)
        ]);
    }

    public function getPanAttribute(): string
    {
        return Crypt::decryptString($this->attributes['encrypted_pan']);
    }

    public function getConfirmerAttribute(): string
    {
        return Crypt::decryptString($this->attributes['encrypted_confirmer']);
    }
}
