<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Project;
use Illuminate\Support\Facades\Storage;

class ProjectsTable extends Component
{
    use WithPagination;

    public $search = '';
    public $statusFilter = '';
    public $sortField = 'order';
    public $sortDirection = 'asc';

    protected $queryString = ['search', 'statusFilter'];

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function updatingStatusFilter()
    {
        $this->resetPage();
    }

    public function setStatusFilter($status = '')
    {
        $this->statusFilter = $status;
        $this->resetPage();
    }

    public function sortBy($field)
    {
        if ($this->sortField === $field) {
            $this->sortDirection = $this->sortDirection === 'asc' ? 'desc' : 'asc';
        } else {
            $this->sortField = $field;
            $this->sortDirection = 'asc';
        }
    }

    public function toggleFeatured($projectId)
    {
        $project = Project::find($projectId);
        if ($project) {
            $project->update(['is_featured' => !$project->is_featured]);
            $this->dispatch('project-updated', message: 'Project featured status updated!');
        }
    }

    public function toggleActive($projectId)
    {
        $project = Project::find($projectId);
        if ($project) {
            $project->update(['is_active' => !$project->is_active]);
            $this->dispatch('project-updated', message: 'Project status updated!');
        }
    }

    public function deleteProject($projectId)
    {
        $project = Project::find($projectId);
        if ($project) {
            if ($project->image) {
                Storage::disk('public')->delete($project->image);
            }
            if ($project->gallery) {
                foreach ($project->gallery as $galleryImg) {
                    Storage::disk('public')->delete($galleryImg);
                }
            }
            $project->delete();
            $this->dispatch('project-deleted', message: 'Project deleted successfully!');
        }
    }

    public function render()
    {
        $query = Project::query();

        if (!empty($this->search)) {
            $searchTerm = '%' . trim($this->search) . '%';
            $query->where(function ($q) use ($searchTerm) {
                $q->where('title', 'like', $searchTerm)
                  ->orWhere('client', 'like', $searchTerm)
                  ->orWhere('location', 'like', $searchTerm)
                  ->orWhere('category', 'like', $searchTerm);
            });
        }

        if (!empty($this->statusFilter)) {
            if ($this->statusFilter === 'ongoing' || $this->statusFilter === 'in_progress') {
                $query->whereIn('status', ['ongoing', 'in_progress']);
            } elseif ($this->statusFilter === 'upcoming' || $this->statusFilter === 'planned') {
                $query->whereIn('status', ['upcoming', 'planned']);
            } elseif ($this->statusFilter === 'completed') {
                $query->whereIn('status', ['completed', 'Completed']);
            } else {
                $query->where('status', $this->statusFilter);
            }
        }

        $projects = $query->orderBy($this->sortField, $this->sortDirection)
                          ->paginate(10);

        $counts = [
            'all' => Project::count(),
            'ongoing' => Project::whereIn('status', ['ongoing', 'in_progress'])->count(),
            'completed' => Project::whereIn('status', ['completed', 'Completed'])->count(),
            'upcoming' => Project::whereIn('status', ['upcoming', 'planned'])->count(),
        ];

        return view('livewire.projects-table', [
            'projects' => $projects,
            'counts' => $counts,
        ]);
    }
}
