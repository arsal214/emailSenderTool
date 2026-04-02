@canany(['customers-view', 'customers-delete', 'customers-edit'])
<div class="d-inline-flex">
    <div class="dropdown">
        <a href="#" class="text-body" data-bs-toggle="dropdown">
            <i class="ph-list"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-end">
            <form action="{{ route('customers.destroy',$list->id) }}" method="POST">
                @csrf
                @method('DELETE')
                @can('customers-view')
                    <a href="{{ route('customers.show',$list->id) }}" class="dropdown-item">
                        <i class="ph-eye me-2"></i>{{ __('Show') }}
                    </a>
                @endcan
                @can('customers-edit')
                    <a href="#" class="dropdown-item"
                       data-bs-toggle="modal"
                       data-bs-target="#sendEmailModal{{ $list->id }}">
                        <i class="ph-paper-plane-tilt me-2"></i>{{ __('Send Email') }}
                    </a>
                @endcan
                @can('customers-delete')
                    <button type="submit" class="dropdown-item sa-confirm">
                        <i class="ph-trash me-2"></i>{{ __('Delete') }}
                    </button>
                @endcan
            </form>
            @can('customers-edit')
                @if(in_array($list->status, ['Sent', 'Fail']))
                    <form action="{{ route('customers.reset-status', $list->id) }}" method="POST">
                        @csrf
                        @method('PATCH')
                        <button type="submit" class="dropdown-item text-warning">
                            <i class="ph-arrow-counter-clockwise me-2"></i>{{ __('Reset to Pending') }}
                        </button>
                    </form>
                @endif
            @endcan
        </div>
    </div>
</div>

{{-- Send Email Modal --}}
@can('customers-edit')
<div id="sendEmailModal{{ $list->id }}" class="modal fade" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Send Email to {{ $list->first_name }} {{ $list->last_name }}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <form action="{{ route('customers.send-email', $list->id) }}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Select Template</label>
                        <select name="template_id" class="form-select" required>
                            <option value="">-- Choose a template --</option>
                            @foreach($templates as $template)
                                <option value="{{ $template->id }}">{{ $template->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <p class="text-muted mb-0">
                        <i class="ph-envelope me-1"></i> Will be sent to: <strong>{{ $list->email }}</strong>
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-link" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">
                        <i class="ph-paper-plane-tilt me-1"></i> Send Email
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endcan

@endcanany
