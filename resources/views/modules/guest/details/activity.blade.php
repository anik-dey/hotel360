<div class="tab-pane fade" id="account-vertical-activity" role="tabpanel" aria-labelledby="account-pill-info"
    aria-expanded="false">
    <!-- form -->
    <form class="validate-form" novalidate="novalidate">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Guest Activity</h4>
            </div>
            <div class="card-body">
                <ul class="timeline">
                    @forelse($activity as $activity)
                        <li class="timeline-item">
                            <span class="timeline-point timeline-point-info timeline-point-indicator"></span>
                            <div class="timeline-event">
                                <div class="d-flex justify-content-between flex-sm-row flex-column mb-sm-0 mb-1">
                                    <h6>{{ $activity->details }}</h6>
                                    <span
                                        class="timeline-event-time">{{ Carbon\Carbon::parse($activity->created_at)->format('d-M-Y') }}</span>
                                </div>
                            </div>
                        </li>
                    @empty
                        <h2>No activity found</h2>
                    @endforelse
                </ul>
            </div>
        </div>
    </form>
    <!--/ form -->
</div>
