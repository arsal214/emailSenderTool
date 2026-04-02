<div id="modal_create_customer" class="modal fade" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add New Customer</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <form action="{{ route('customers.store') }}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label class="form-label">First Name <span class="text-danger">*</span></label>
                            <input type="text" name="first_name" class="form-control" required value="{{ old('first_name') }}" />
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Last Name</label>
                            <input type="text" name="last_name" class="form-control" value="{{ old('last_name') }}" />
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Email <span class="text-danger">*</span></label>
                            <input type="email" name="email" class="form-control" required value="{{ old('email') }}" />
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Phone Number</label>
                            <input type="text" name="phone_number" class="form-control" value="{{ old('phone_number') }}" />
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Department</label>
                            <input type="text" name="department" class="form-control" value="{{ old('department') }}" />
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Job Related</label>
                            <input type="text" name="job_related" class="form-control" value="{{ old('job_related') }}" />
                        </div>
                        <div class="col-md-12">
                            <label class="form-label">Profile Headline</label>
                            <input type="text" name="profile_headline" class="form-control" value="{{ old('profile_headline') }}" />
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Company Website</label>
                            <input type="text" name="company_website" class="form-control" value="{{ old('company_website') }}" />
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Company Website Changes</label>
                            <input type="text" name="company_website_changes" class="form-control" value="{{ old('company_website_changes') }}" />
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-link" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">
                        <i class="ph-plus me-1"></i> Add Customer
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
