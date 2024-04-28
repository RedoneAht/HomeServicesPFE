<!-- resources/views/livewire/admin/admin-dashboard-component.blade.php -->

<div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Admin Dashboard</div>

                    <div class="card-body">
                        <!-- Display the number of ServiceProviders to verify -->
                        <a href="{{route('admin.service_providers.pending')}}">
                            <div class="alert alert-info" role="alert">
                                Number of ServiceProviders to Verify: {{ $pendingServiceProvidersCount }}
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
