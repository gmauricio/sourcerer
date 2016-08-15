<?php

namespace Vacancy\Mapper;

use Vacancy\Model\Vacancy;
use Vacancy\Mapper;
use Vacancy\Source\Model;

class LocalDbMapper extends Mapper
{
    public function map($row) {
        return new Model($row);
    }
}