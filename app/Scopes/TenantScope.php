<?php

namespace App\Scopes;
use illuminate\Database\Eloquent\Builder;
use illuminate\Database\Eloquent\Model;
use illuminate\Database\Eloquent\Scope;

class TenantScope implements Scope
{
    public function apply(Builder $builder, Model $model)
    {
        if(session()->has('tenant_id') && !is_null(session()->get('tenant_id'))){
            $builder->where('tenant_id', session()->get('tenant_id'));
        }
    }
}
