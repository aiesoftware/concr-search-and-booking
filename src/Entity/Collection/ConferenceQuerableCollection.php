<?php

namespace Concr\SearchAndBooking\Entity\Collection;

use Concr\SearchAndBooking\Entity\ConferenceQueryable;
use Ramsey\Collection\AbstractCollection;

class ConferenceQuerableCollection extends AbstractCollection
{

    public function getType(): string
    {
        return ConferenceQueryable::class;
    }
}
