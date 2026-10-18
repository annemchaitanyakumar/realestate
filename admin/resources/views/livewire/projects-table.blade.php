<div>
    <!-- Status Metric Cards (Clickable Quick Filters) -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 mb-6">
        <!-- All Projects -->
        <button
            type="button"
            wire:click="setStatusFilter('')"
            class="text-left p-4 rounded-xl border transition-all duration-200 bg-white hover:shadow-md cursor-pointer {{ $statusFilter === '' ? 'ring-2 ring-blue-500 border-blue-500 shadow-sm' : 'border-gray-200' }}"
        >
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-xs font-semibold uppercase tracking-wider text-gray-500">All Projects</p>
                    <p class="text-2xl font-bold text-gray-900 mt-1">{{ $counts['all'] ?? 0 }}</p>
                </div>
                <div class="w-11 h-11 rounded-xl bg-blue-50 flex items-center justify-center text-blue-600">
                    <i class="fas fa-layer-group text-lg"></i>
                </div>
            </div>
            <div class="mt-2 flex items-center text-xs {{ $statusFilter === '' ? 'text-blue-600 font-semibold' : 'text-gray-400' }}">
                <span>{{ $statusFilter === '' ? '● Active view' : 'Click to filter' }}</span>
            </div>
        </button>

        <!-- Ongoing Projects -->
        <button
            type="button"
            wire:click="setStatusFilter('ongoing')"
            class="text-left p-4 rounded-xl border transition-all duration-200 bg-white hover:shadow-md cursor-pointer {{ in_array($statusFilter, ['ongoing', 'in_progress']) ? 'ring-2 ring-emerald-500 border-emerald-500 shadow-sm' : 'border-gray-200' }}"
        >
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-xs font-semibold uppercase tracking-wider text-emerald-600">Ongoing Projects</p>
                    <p class="text-2xl font-bold text-gray-900 mt-1">{{ $counts['ongoing'] ?? 0 }}</p>
                </div>
                <div class="w-11 h-11 rounded-xl bg-emerald-50 flex items-center justify-center text-emerald-600">
                    <i class="fas fa-hard-hat text-lg"></i>
                </div>
            </div>
            <div class="mt-2 flex items-center text-xs {{ in_array($statusFilter, ['ongoing', 'in_progress']) ? 'text-emerald-600 font-semibold' : 'text-gray-400' }}">
                <span>{{ in_array($statusFilter, ['ongoing', 'in_progress']) ? '● Active view' : 'Under active development' }}</span>
            </div>
        </button>

        <!-- Completed Projects -->
        <button
            type="button"
            wire:click="setStatusFilter('completed')"
            class="text-left p-4 rounded-xl border transition-all duration-200 bg-white hover:shadow-md cursor-pointer {{ $statusFilter === 'completed' ? 'ring-2 ring-indigo-500 border-indigo-500 shadow-sm' : 'border-gray-200' }}"
        >
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-xs font-semibold uppercase tracking-wider text-indigo-600">Completed Projects</p>
                    <p class="text-2xl font-bold text-gray-900 mt-1">{{ $counts['completed'] ?? 0 }}</p>
                </div>
                <div class="w-11 h-11 rounded-xl bg-indigo-50 flex items-center justify-center text-indigo-600">
                    <i class="fas fa-check-circle text-lg"></i>
                </div>
            </div>
            <div class="mt-2 flex items-center text-xs {{ $statusFilter === 'completed' ? 'text-indigo-600 font-semibold' : 'text-gray-400' }}">
                <span>{{ $statusFilter === 'completed' ? '● Active view' : 'Successfully delivered' }}</span>
            </div>
        </button>

        <!-- Upcoming Projects -->
        <button
            type="button"
            wire:click="setStatusFilter('upcoming')"
            class="text-left p-4 rounded-xl border transition-all duration-200 bg-white hover:shadow-md cursor-pointer {{ in_array($statusFilter, ['upcoming', 'planned']) ? 'ring-2 ring-amber-500 border-amber-500 shadow-sm' : 'border-gray-200' }}"
        >
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-xs font-semibold uppercase tracking-wider text-amber-600">Upcoming Projects</p>
                    <p class="text-2xl font-bold text-gray-900 mt-1">{{ $counts['upcoming'] ?? 0 }}</p>
                </div>
                <div class="w-11 h-11 rounded-xl bg-amber-50 flex items-center justify-center text-amber-600">
                    <i class="fas fa-clock text-lg"></i>
                </div>
            </div>
            <div class="mt-2 flex items-center text-xs {{ in_array($statusFilter, ['upcoming', 'planned']) ? 'text-amber-600 font-semibold' : 'text-gray-400' }}">
                <span>{{ in_array($statusFilter, ['upcoming', 'planned']) ? '● Active view' : 'Proposed & master planned' }}</span>
            </div>
        </button>
    </div>

    <!-- Search and Filters Bar -->
    <div class="mb-6 flex flex-col md:flex-row gap-4 items-center justify-between">
        <div class="flex flex-col sm:flex-row gap-3 w-full md:w-auto">
            <!-- Search Input -->
            <div class="relative w-full sm:w-72">
                <input
                    type="text"
                    wire:model.live.debounce.300ms="search"
                    placeholder="Search title, location, category..."
                    class="pl-10 pr-8 py-2.5 bg-white border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent text-sm w-full shadow-sm"
                >
                <i class="fas fa-search absolute left-3.5 top-3.5 text-gray-400 text-sm"></i>
                @if($search)
                    <button
                        wire:click="$set('search', '')"
                        class="absolute right-3 top-3 text-gray-400 hover:text-gray-600"
                    >
                        <i class="fas fa-times text-xs"></i>
                    </button>
                @endif
            </div>

            <!-- Status Filter Dropdown -->
            <select
                wire:model.live="statusFilter"
                class="px-4 py-2.5 bg-white border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 text-sm shadow-sm font-medium text-gray-700 w-full sm:w-auto"
            >
                <option value="">All Statuses ({{ $counts['all'] ?? 0 }})</option>
                <option value="ongoing">Ongoing ({{ $counts['ongoing'] ?? 0 }})</option>
                <option value="completed">Completed ({{ $counts['completed'] ?? 0 }})</option>
                <option value="upcoming">Upcoming ({{ $counts['upcoming'] ?? 0 }})</option>
            </select>
        </div>

        <a href="{{ route('admin.projects.create') }}" class="inline-flex items-center justify-center px-5 py-2.5 bg-gradient-to-r from-blue-600 to-indigo-600 hover:from-blue-700 hover:to-indigo-700 text-white font-medium rounded-xl shadow-sm hover:shadow-md transition-all duration-200 w-full md:w-auto text-center text-sm">
            <i class="fas fa-plus mr-2"></i>Add New Project
        </a>
    </div>

    <!-- Loading Indicator -->
    <div wire:loading class="mb-4 w-full">
        <div class="bg-blue-50 border-l-4 border-blue-500 p-3 rounded-r-xl">
            <div class="flex items-center">
                <i class="fas fa-spinner fa-spin text-blue-500 mr-3"></i>
                <p class="text-blue-700 text-sm font-medium">Filtering projects list...</p>
            </div>
        </div>
    </div>

    <!-- Projects Table -->
    <div class="card overflow-hidden bg-white rounded-2xl border border-gray-200 shadow-sm">
        <div class="overflow-x-auto">
            <table class="w-full text-left">
                <thead class="bg-gray-50/80 border-b border-gray-200">
                    <tr>
                        <th class="px-6 py-4">
                            <button wire:click="sortBy('title')" class="flex items-center space-x-1 text-xs font-bold text-gray-600 uppercase tracking-wider hover:text-gray-900">
                                <span>Project</span>
                                @if($sortField === 'title')
                                    <i class="fas fa-sort-{{ $sortDirection === 'asc' ? 'up' : 'down' }} text-blue-600"></i>
                                @else
                                    <i class="fas fa-sort text-gray-300"></i>
                                @endif
                            </button>
                        </th>
                        <th class="px-6 py-4 text-xs font-bold text-gray-600 uppercase tracking-wider">Client / Developer</th>
                        <th class="px-6 py-4 text-xs font-bold text-gray-600 uppercase tracking-wider">Location</th>
                        <th class="px-6 py-4">
                            <button wire:click="sortBy('status')" class="flex items-center space-x-1 text-xs font-bold text-gray-600 uppercase tracking-wider hover:text-gray-900">
                                <span>Status</span>
                                @if($sortField === 'status')
                                    <i class="fas fa-sort-{{ $sortDirection === 'asc' ? 'up' : 'down' }} text-blue-600"></i>
                                @else
                                    <i class="fas fa-sort text-gray-300"></i>
                                @endif
                            </button>
                        </th>
                        <th class="px-6 py-4 text-center text-xs font-bold text-gray-600 uppercase tracking-wider">Featured</th>
                        <th class="px-6 py-4 text-center text-xs font-bold text-gray-600 uppercase tracking-wider">Active</th>
                        <th class="px-6 py-4 text-center text-xs font-bold text-gray-600 uppercase tracking-wider">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100">
                    @forelse($projects as $project)
                        <tr class="hover:bg-blue-50/30 transition-colors duration-150" wire:key="project-{{ $project->id }}">
                            <!-- Project info -->
                            <td class="px-6 py-4">
                                <div class="flex items-center space-x-3.5">
                                    @if($project->image)
                                        <img src="{{ asset('storage/' . $project->image) }}" alt="{{ $project->title }}" class="w-14 h-14 rounded-xl object-cover border border-gray-200 shadow-xs flex-shrink-0">
                                    @else
                                        <div class="w-14 h-14 bg-gradient-to-br from-blue-50 to-indigo-100 text-blue-600 rounded-xl flex items-center justify-center border border-blue-100 flex-shrink-0">
                                            <i class="fas fa-building text-lg"></i>
                                        </div>
                                    @endif
                                    <div class="min-w-0">
                                        <p class="font-semibold text-gray-900 text-sm leading-snug">{{ $project->title }}</p>
                                        <div class="flex items-center gap-2 mt-1">
                                            <span class="inline-block px-2 py-0.5 bg-gray-100 text-gray-600 rounded text-xs font-medium">{{ $project->category ?? 'Real Estate' }}</span>
                                            @if($project->value)
                                                <span class="text-xs font-medium text-gray-500">₹{{ number_format($project->value, 2) }} L</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </td>

                            <!-- Client -->
                            <td class="px-6 py-4 text-sm text-gray-700">
                                <span class="font-medium">{{ $project->client ?? 'Paanchajanya Reality' }}</span>
                            </td>

                            <!-- Location -->
                            <td class="px-6 py-4 text-sm text-gray-600">
                                <div class="flex items-center gap-1.5">
                                    <i class="fas fa-map-marker-alt text-red-400 text-xs"></i>
                                    <span>{{ $project->location ?? 'Hyderabad' }}</span>
                                </div>
                            </td>

                            <!-- Status Badge -->
                            <td class="px-6 py-4 whitespace-nowrap">
                                @if(in_array($project->status, ['ongoing', 'in_progress']))
                                    <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-semibold bg-emerald-50 text-emerald-700 border border-emerald-200">
                                        <span class="w-2 h-2 rounded-full bg-emerald-500 animate-pulse"></span>
                                        Ongoing
                                    </span>
                                @elseif(in_array($project->status, ['completed', 'Completed']))
                                    <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-semibold bg-indigo-50 text-indigo-700 border border-indigo-200">
                                        <i class="fas fa-check-circle text-indigo-500 text-[11px]"></i>
                                        Completed
                                    </span>
                                @elseif(in_array($project->status, ['upcoming', 'planned']))
                                    <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-semibold bg-amber-50 text-amber-700 border border-amber-200">
                                        <i class="fas fa-clock text-amber-500 text-[11px]"></i>
                                        Upcoming
                                    </span>
                                @else
                                    <span class="inline-flex items-center px-2.5 py-1 rounded-full text-xs font-semibold bg-gray-100 text-gray-700">
                                        {{ ucfirst($project->status) }}
                                    </span>
                                @endif
                            </td>

                            <!-- Featured Toggle -->
                            <td class="px-6 py-4 text-center">
                                <button
                                    wire:click="toggleFeatured({{ $project->id }})"
                                    title="Toggle Featured"
                                    class="transition hover:scale-110 p-1"
                                >
                                    @if($project->is_featured)
                                        <i class="fas fa-star text-amber-400 text-lg"></i>
                                    @else
                                        <i class="far fa-star text-gray-300 text-lg hover:text-amber-400"></i>
                                    @endif
                                </button>
                            </td>

                            <!-- Active Toggle -->
                            <td class="px-6 py-4 text-center">
                                <button
                                    wire:click="toggleActive({{ $project->id }})"
                                    title="Toggle Active"
                                    class="relative inline-flex h-6 w-11 items-center rounded-full transition {{ $project->is_active ? 'bg-emerald-500' : 'bg-gray-300' }}"
                                >
                                    <span class="inline-block h-4 w-4 transform rounded-full bg-white shadow-xs transition {{ $project->is_active ? 'translate-x-6' : 'translate-x-1' }}"></span>
                                </button>
                            </td>

                            <!-- Actions -->
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center justify-center space-x-2">
                                    @if($project->public_url)
                                        <a href="{{ $project->public_url }}" target="_blank" title="View Live Page" class="p-2 text-emerald-600 hover:bg-emerald-50 rounded-lg transition">
                                            <i class="fas fa-external-link-alt"></i>
                                        </a>
                                    @endif

                                    <a href="{{ route('admin.projects.edit', $project) }}" title="Edit Project" class="p-2 text-blue-600 hover:bg-blue-50 rounded-lg transition">
                                        <i class="fas fa-edit"></i>
                                    </a>

                                    <button
                                        wire:click="deleteProject({{ $project->id }})"
                                        wire:confirm="Are you sure you want to delete this project? This will permanently remove it from the system."
                                        title="Delete Project"
                                        class="p-2 text-red-500 hover:bg-red-50 rounded-lg transition"
                                    >
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7" class="px-6 py-16 text-center text-gray-500">
                                <div class="flex flex-col items-center max-w-sm mx-auto">
                                    <div class="w-16 h-16 rounded-full bg-gray-100 flex items-center justify-center mb-4">
                                        <i class="fas fa-folder-open text-2xl text-gray-400"></i>
                                    </div>
                                    <p class="text-base font-bold text-gray-800 mb-1">No projects found</p>
                                    @if($search || $statusFilter)
                                        <p class="text-sm text-gray-500 mb-4">No matching projects found for the current search or status filter.</p>
                                        <button
                                            wire:click="setStatusFilter('')"
                                            class="px-4 py-2 bg-gray-100 hover:bg-gray-200 text-gray-700 text-xs font-semibold rounded-lg transition"
                                        >
                                            Reset Filters
                                        </button>
                                    @else
                                        <p class="text-sm text-gray-500 mb-4">There are currently no projects in the system.</p>
                                        <a href="{{ route('admin.projects.create') }}" class="px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white text-xs font-semibold rounded-lg transition">
                                            <i class="fas fa-plus mr-1.5"></i>Create Your First Project
                                        </a>
                                    @endif
                                </div>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <!-- Pagination -->
        @if($projects->hasPages())
            <div class="px-6 py-4 border-t border-gray-100 bg-gray-50/50">
                {{ $projects->links() }}
            </div>
        @endif
    </div>
</div>
