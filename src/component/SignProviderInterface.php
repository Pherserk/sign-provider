<?php

namespace Pherserk\SignProvider\component;

use Pherserk\Language\model\LanguageInterface;
use Pherserk\Sign\model\SignInterface;

interface SignProviderInterface
{
    /**
     * @param SignInterface[] $characters
     * @param LanguageInterface $language
     * @param int $minimumClassificationsCount
     *
     * @return SignInterface[]
     */
    public function search(array $characters, LanguageInterface $language, int $minimumClasificationsCount) : array;
}

