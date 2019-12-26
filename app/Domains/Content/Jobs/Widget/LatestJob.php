<?php

namespace Artip\Domains\Content\Jobs\Widget;

use Artip\Data\Models\Content;
use Lucid\Foundation\Job;

class LatestJob extends Job 
{
	/**
	 *
	 * @var string
	 */
	private $service;

	/**
	 *
	 * @param int $id
	 */
	public function __construct(string $service) 
	{
		$this->service = $service;
	}

	/**
     * 
     * @param Content $content
     * @return object
     */
	public function handle(Content $content): object
	{
		return $content->with(['category:id,display_name'])
		->with(['category' => function($query) {
			$query->where('service_name', $this->service);
		}])
		->where('is_published', true)
		->orderBy('created_at', 'desc')
		->get()
		->take(2);
	}
} 