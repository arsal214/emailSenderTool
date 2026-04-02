@extends('admin.layout.app')

@section('title', 'Email Settings')

@section('header')
    <div class="page-header page-header-light shadow">
        <div class="page-header-content d-lg-flex">
            <div class="d-flex">
                <h4 class="page-title mb-0">
                    Home - <span class="fw-normal">Email Settings</span>
                </h4>
            </div>
        </div>
    </div>
@endsection

@section('content')
<div class="col-md-8 col-lg-6">
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Resend Configuration</h5>
        </div>
        <div class="card-body">
            <form action="{{ route('email-settings.save') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label class="form-label fw-semibold">Resend API Key <span class="text-danger">*</span></label>
                    <div class="input-group">
                        <input type="password"
                               id="resend_api_key"
                               name="RESEND_API_KEY"
                               class="form-control @error('RESEND_API_KEY') is-invalid @enderror"
                               value="{{ $settings['RESEND_API_KEY'] }}"
                               required />
                        <button type="button" class="btn btn-outline-secondary" id="toggleKey">
                            <i class="ph-eye" id="toggleKeyIcon"></i>
                        </button>
                    </div>
                    @error('RESEND_API_KEY')
                        <div class="invalid-feedback d-block">{{ $message }}</div>
                    @enderror
                    <small class="text-muted">Get your API key from <strong>resend.com → API Keys</strong></small>
                </div>

                <div class="mb-3">
                    <label class="form-label fw-semibold">From Email Address <span class="text-danger">*</span></label>
                    <input type="email"
                           name="MAIL_FROM_ADDRESS"
                           class="form-control @error('MAIL_FROM_ADDRESS') is-invalid @enderror"
                           value="{{ $settings['MAIL_FROM_ADDRESS'] }}"
                           required />
                    @error('MAIL_FROM_ADDRESS')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                    <small class="text-muted">Must be from a verified domain in Resend</small>
                </div>

                <div class="mb-4">
                    <label class="form-label fw-semibold">From Name <span class="text-danger">*</span></label>
                    <input type="text"
                           name="MAIL_FROM_NAME"
                           class="form-control @error('MAIL_FROM_NAME') is-invalid @enderror"
                           value="{{ $settings['MAIL_FROM_NAME'] }}"
                           required />
                    @error('MAIL_FROM_NAME')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="d-flex gap-2">
                    <button type="submit" class="btn btn-primary">
                        <i class="ph-floppy-disk me-1"></i> Save Settings
                    </button>
                    <a href="{{ route('settings.clear-cache') }}" class="btn btn-outline-secondary">
                        <i class="ph-arrows-clockwise me-1"></i> Clear Cache
                    </a>
                </div>
            </form>
        </div>
    </div>

    <div class="card mt-3">
        <div class="card-header">
            <h6 class="mb-0 text-muted">Setup Checklist</h6>
        </div>
        <div class="card-body py-2">
            <ul class="list-unstyled mb-0">
                <li class="py-1"><i class="ph-check-circle text-success me-2"></i> Sign up at <strong>resend.com</strong></li>
                <li class="py-1"><i class="ph-check-circle text-success me-2"></i> Add &amp; verify your domain under <strong>Domains</strong></li>
                <li class="py-1"><i class="ph-check-circle text-success me-2"></i> Create an API key under <strong>API Keys</strong></li>
                <li class="py-1"><i class="ph-check-circle text-success me-2"></i> Paste the key above and save</li>
                <li class="py-1"><i class="ph-check-circle text-success me-2"></i> Click <strong>Clear Cache</strong> to apply changes</li>
            </ul>
        </div>
    </div>
</div>
@endsection

@section('script')
<script>
    document.getElementById('toggleKey').addEventListener('click', function () {
        const input = document.getElementById('resend_api_key');
        const icon  = document.getElementById('toggleKeyIcon');
        if (input.type === 'password') {
            input.type = 'text';
            icon.classList.replace('ph-eye', 'ph-eye-slash');
        } else {
            input.type = 'password';
            icon.classList.replace('ph-eye-slash', 'ph-eye');
        }
    });
</script>
@endsection
