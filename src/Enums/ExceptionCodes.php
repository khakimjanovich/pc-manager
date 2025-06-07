<?php

namespace Khakimjanovich\PCManager\Enums;

enum ExceptionCodes: string
{

    case SMS_CONFIG_INVALID_LANGUAGE = 'sms_config_invalid_language';
    case SMS_CONFIG_HAS_ALREADY_BEEN_CREATED = 'sms_config_has_already_been_created';
    case SMS_CONFIG_ONE_CONFIG_FOR_ONE_LANGUAGE_CAN_BE_CREATED = 'sms_config_one_config_for_one_language_can_be_created';
}
