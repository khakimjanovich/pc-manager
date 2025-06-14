<?php

declare(strict_types=1);

namespace Khakimjanovich\PCManager\Models;

use Illuminate\Database\Eloquent\Attributes\ObservedBy;
use Illuminate\Database\Eloquent\Attributes\ScopedBy;
use Illuminate\Database\Eloquent\Model;
use Khakimjanovich\PCManager\Data\CardAddSMSConfig\CreateData;
use Khakimjanovich\PCManager\Enums\CardAddSMSConfigLanguages;
use Khakimjanovich\PCManager\Observers\CardAddSMSConfigObserver;
use Khakimjanovich\PCManager\Scopes\ProcessingCentreScope;

/**
 * @property int $id
 * @property null|string $ussd
 * @property null|int $template_id
 * @property string $service_name
 * @property string $hash
 * @property string $processing_centre
 * @property CardAddSMSConfigLanguages $language
 */
#[ScopedBy(ProcessingCentreScope::class)]
#[ObservedBy(CardAddSMSConfigObserver::class)]
abstract class CardAddSMSConfig extends Model
{
    protected $table = 'pc_manager_card_add_sms_configs';

    protected $fillable = ['ussd', 'template_id', 'service_name', 'hash', 'language'];

    protected $casts = [
        'language' => CardAddSMSConfigLanguages::class,
    ];

    abstract public function getProcessingCentre(): string;

    final public static function create(CreateData $data): static
    {
        return static::query()->create([
            'ussd' => $data->ussd, 'language' => $data->language->value, 'template_id' => $data->template_id,
            'service_name' => $data->service_name, 'hash' => $data->hash,
        ]);
    }
}
