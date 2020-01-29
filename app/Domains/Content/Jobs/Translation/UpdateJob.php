<?php

namespace Artip\Domains\Content\Jobs\Translation;

use Lucid\Foundation\Job;
use Artip\Data\Models\ContentTranslation;

class UpdateJob extends Job
{

    /**
     *
     * @var array
     */
    private $input;

    /**
     * 
     * @param array $input
     */
    public function __construct(array $input)
    {
        $this->input = $input;
    }

    /**
     * 
     * @param ContentTranslation $entry
     * @return void
     */
    public function handle(ContentTranslation $entry): void
    {
        if (isset($this->input['title'])) {
            ContentTranslation::updateOrCreate(['content_id' => $this->input['id']], [
                'content_id' => $this->input['id'],
                'title' => $this->input['title'],
                'translation' => $this->input['translation'],
            ]);
        }
    }

}
