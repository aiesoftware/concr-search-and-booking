<?php

namespace Concr\SearchAndBooking\Repository;

use Concr\SearchAndBooking\Entity\Collection\ConferenceQuerableCollection;

interface ConferenceRepositoryInterface
{
    public function findAll(ConferenceQuery $query): ConferenceQuerableCollection;
}
