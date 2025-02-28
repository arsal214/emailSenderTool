@canany(['templates-view', 'templates-edit', 'templates-delete'])
    <div class="d-inline-flex">
        <div class="dropdown">
            <a href="#" class="text-body" data-bs-toggle="dropdown">
                <i class="ph-list"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-end">
                <form action="{{ route('templates.destroy',$list->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    @can('templates-edit')
                        <a href="{{ route('templates.edit',$list->id) }}" class="dropdown-item">
                            <i class="ph-note-pencil me-2"></i>{{ __('Edit') }}
                        </a>
                    @endcan
                    @can('templates-delete')
                        <button type="submit" class="dropdown-item sa-confirm">
                            <i class="ph-trash me-2"></i>{{ __('Delete') }}
                        </button>
                    @endcan
                </form>
            </div>
        </div>
    </div>
@endcanany
