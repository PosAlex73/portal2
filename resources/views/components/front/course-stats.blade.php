<div class="project-nav">
    <div class="card-action card-tabs  me-auto">
        <ul class="nav nav-tabs style-2">
            <li class="nav-item">
                <a href="#navpills-1" class="nav-link active" data-bs-toggle="tab" aria-expanded="false">{{ __('vars.all_tasks') }} <span class="badge badge-pill shadow-primary badge-primary">{{ $courseStats['total_tasks'] }}</span></a>
            </li>
            <li class="nav-item">
                <a href="#navpills-2" class="nav-link" data-bs-toggle="tab" aria-expanded="false">On Progress <span class="badge badge-pill badge-info shadow-info">{{ $inProgress }}</span></a>
            </li>
            <li class="nav-item">
                <a href="#navpills-3" class="nav-link" data-bs-toggle="tab" aria-expanded="true">Pending <span class="badge badge-pill badge-warning shadow-warning">{{ $courseStats['tasks_done'] }}</span></a>
            </li>
        </ul>
    </div>
</div>
