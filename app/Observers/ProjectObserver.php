<?php
namespace App\Observers;

use App\Models\Project;

class ProjectObserver
{
    public function created(Project $project)
    {
        $this->refreshLatestProjectsCache();
    }

    public function updated(Project $project)
    {
        $this->refreshLatestProjectsCache();
    }

    public function deleted(Project $project)
    {
        $this->refreshLatestProjectsCache();
    }

    public function restored(Project $project)
    {
        $this->refreshLatestProjectsCache();
    }

    protected function refreshLatestProjectsCache()
    {
        app(\App\Services\ProjectService::class)->refreshLatestThree();
    }
}
