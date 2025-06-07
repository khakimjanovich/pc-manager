<?php

namespace Khakimjanovich\PCManager\Observers;

use Illuminate\Support\Facades\DB;
use Khakimjanovich\PCManager\Enums\CardAddSMSConfigLanguages;
use Khakimjanovich\PCManager\Enums\ExceptionCodes;
use Khakimjanovich\PCManager\Exceptions\PCManagerException;
use Khakimjanovich\PCManager\Models\CardAddSMSConfig;

class CardAddSMSConfigObserver
{
    /**
     * @throws PCManagerException
     */
    public function creating(CardAddSMSConfig $model): void
    {
        if (! in_array($model->language->value, CardAddSMSConfigLanguages::toArray())) {
            throw new PCManagerException(ExceptionCodes::SMS_CONFIG_INVALID_LANGUAGE);
        }

        if (DB::table($model->getTable())->where('processing_centre', $model->getProcessingCentre())->where('language', $model->language)->exists()) {
            throw new PCManagerException(ExceptionCodes::SMS_CONFIG_HAS_ALREADY_BEEN_CREATED);
        }

        $model->processing_centre = $model->getProcessingCentre();

    }

    /**
     * @throws PCManagerException
     */
    public function updating(CardAddSMSConfig $model): void
    {
        if (! in_array($model->language->value, CardAddSMSConfigLanguages::toArray())) {
            throw new PCManagerException(ExceptionCodes::SMS_CONFIG_INVALID_LANGUAGE);
        }

        if ($model->isDirty('language') && DB::table($model->getTable())->where('processing_centre', $model->getProcessingCentre())->where('language', $model->language)->whereNot('id', $model->id)->first()) {
            throw new PCManagerException(ExceptionCodes::SMS_CONFIG_ONE_CONFIG_FOR_ONE_LANGUAGE_CAN_BE_CREATED);
        }
    }
}
