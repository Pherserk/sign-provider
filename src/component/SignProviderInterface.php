<?php

namespace Pherserk\SignProvider\component;

use Pherserk\Sign\model\SignInterface;

interface SignProviderInterface
{
    /**
     * @param string[] $characters
     * @param LanguageInterface $language
     * @param int $minimumClassificationsCount
     *
     * @return SignInterface[]
     */
    public function search(string[] $characters, LanguageInterface $language, int $minimumClasificationsCount) : array;
}

