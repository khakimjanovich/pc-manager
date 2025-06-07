<?php

namespace Khakimjanovich\PCManager\Scopes;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Scope;

class ProcessingCentreScope implements Scope
{
    public function apply(Builder $builder, Model $model): void
    {
        $builder->where('processing_centre', '=', $model->getProcessingCentre());
    }
}
