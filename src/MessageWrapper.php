<?php

namespace Nelex\MessageWrapper;

class MessageWrapper
{

    /**
     * Create a new Skeleton Instance
     */
    public function __construct()
    {
    }

    /**
     * Friendly welcome
     *
     * @param string $phrase Phrase to return
     *
     * @return string Returns the phrase passed in
     */
    public function echoPhrase($phrase,$wrap_before,$wrap_after)
    {
        return $wrap_before.$phrase.$wrap_after;
    }
}
