<?php

namespace App\Scopes;
use illuminate\Database\Eloquent\Builder;
use illuminate\Database\Eloquent\Model;
use illuminate\Database\Eloquent\Scope;

class TenantScope implements Scope
{
    public function apply(Builder $builder, Model $model)
    {


        if(checkTenantId()){
            $builder->where('tenant_id', session('tenant_id'));
        }

    }
}
