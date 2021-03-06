<?php

namespace App\Lambda;

interface FunctionInterface
{
    /**
     * Handle the Lambda event.
     *
     * @param array   $event   The event information array.
     * @param Context $context The Context object.
     *
     * @return mixed Response for the lambda. Must be json encodeable.
     */
    public function __invoke(array $event, Context $context);
}
