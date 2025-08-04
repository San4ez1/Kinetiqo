<?php

namespace App\Http\Filters;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

abstract class AbstractFilter implements FilterInterface
{
    /** @var Request */
    protected $request;

    /** @var Builder */
    protected $builder;

    /** @var array */
    protected $filters = [];

    public function __construct(array $queryParams)
    {
         $this->queryParams = $queryParams;
    }

    abstract protected function getCallbacks(): array;


    public function apply(Builder $builder): void
    {
        $this->before($builder);
        
        foreach ($this->getCallbacks() as $name => $callback) {
            if (isset($this->queryParams[$name])) {
                call_user_func($callback, $builder, $this->queryParams[$name]);
            }

        }
    }
    protected function before(Builder $builder)
    {
        // Optional: Add default before() logic if needed
    }

        
}