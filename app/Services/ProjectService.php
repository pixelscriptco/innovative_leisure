<?php

namespace App\Services;

use App\Models\Project;
use Illuminate\Support\Facades\Cache;

class ProjectService
{
    protected string $key = 'frontend_projects_latest_3';

    protected string $completionKey = 'frontend_projects_by_completion';

    protected $ttl;

    public function __construct()
    {
        $this->ttl = now()->addWeeks(4);
    }

    public function getLatestThree()
    {
        return Cache::remember($this->key, $this->ttl, function () {
            return Project::latest()->limit(3)->get();
        });
    }

    public function refreshLatestThree()
    {
        $projects = Project::latest()->limit(3)->get();
        Cache::put($this->key, $projects, $this->ttl);

        return $projects;
    }

    public function getByCompletion()
    {
        return Cache::remember($this->completionKey, $this->ttl, function () {
            return Project::latest('completion_date')->get();
        });
    }
}
