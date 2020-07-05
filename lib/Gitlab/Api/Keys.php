<?php

declare(strict_types=1);

namespace Gitlab\Api;

class Keys extends AbstractApi
{
    /**
     * @param int $id
     *
     * @return mixed
     */
    public function show($id)
    {
        return $this->get('keys/'.$this->encodePath($id));
    }
}
