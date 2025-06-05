<?php

declare(strict_types=1);

namespace Khakimjanovich\PCManager\Models;

use Illuminate\Database\Eloquent\Attributes\ObservedBy;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Crypt;
use Khakimjanovich\PCManager\Data\Card\CreateData;
use Khakimjanovich\PCManager\Observers\CardObserver;

/**
 * @property string $id
 * @property string $encrypted_pan
 * @property string $expiry_date
 * @property string $phone_number
 * @property string $bin
 * @property string $pan
 * @property string $card_token
 * @property string $name_on_card
 * @property string $name
 * @property int $order
 * @property bool $is_main
 * @property string $local_owner_id
 * @property string $processing_center
 */
#[ObservedBy(CardObserver::class)]
abstract class Card extends Model
{
    public $incrementing = false;

    protected $table = 'pc_manager_cards';

    protected $keyType = 'string';

    protected $fillable = [
        'id', 'encrypted_pan', 'expiry_date', 'phone_number', 'bin', 'card_token', 'name_on_card', 'name', 'order',
        'is_main', 'local_owner_id', 'processing_center',
    ];

    protected $appends = ['pan'];

    protected $hidden = ['encrypted_pan', 'updated_at', 'card_token'];

    public static function create(CreateData $data): self
    {
        return static::query()->firstOrCreate(['id' => hash('sha256', $data->pan)], [
            'encrypted_pan' => Crypt::encryptString($data->pan), 'expiry_date' => $data->expiry_date,
            'phone_number' => $data->phone_number, 'bin' => $data->bin, 'card_token' => $data->token,
            'name_on_card' => $data->name_on_card, 'name' => $data->name, 'order' => $data->order,
            'is_main' => $data->is_main, $data->local_owner_id, 'processing_center' => $data->processing_centre,
        ]);
    }
    
    public function getPanAttribute(): string
    {
        return Crypt::decryptString($this->attributes['encrypted_pan']);
    }

    abstract public function getDebitRow(): string;
}
