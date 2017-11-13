<?php

namespace Pherserk\SignProvider\component;

use Pherserk\Language\model\LanguageInterface;
use Pherserk\SignExtractor\model\UnclassifiedSign;
use Pherserk\SignProvider\model\ClassifiedSign;

interface SignProviderInterface
{
    /**
     * @param UnclassifiedSign[] $characters
     * @param LanguageInterface $language
     * @param int $minimumClassificationsCount
     *
     * @return ClassifiedSign[]
     */
    public function search(array $characters, LanguageInterface $language, int $minimumClasificationsCount) : array;
}

