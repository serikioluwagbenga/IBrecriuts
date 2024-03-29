<?php

namespace App\Repositories;

use App\Models\Skill;

/**
 * Class SkillRepository
 *
 * @version June 22, 2020, 5:43 am UTC
 */
class SkillRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
    ];

    /**
     * Return searchable fields
     */
    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Skill::class;
    }
}
