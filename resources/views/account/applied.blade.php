@extends('layouts.account')

@section('content')
  <div class="account-layout border">
    <div class="account-hdr border bg-primary text-white shadow">
      My Applied Jobs
    </div>
    <div class="account-bdy p-3">
      <div class="my-2">
        <div class="table-responsive">
          <table class="table table-striped table-hover">
            <thead class="bg-light small">
              <tr>
                <th>Job Position</th>
                <th>Job Level</th>
                <th>Company</th>
                <th>No of Vacancies</th>
                <th>Apply Before</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @if($appliedJobs->count() > 0)
                @foreach ($appliedJobs as $appliedJob)
                  <tr>
                    <td><a href="{{ route('post.show', ['job' => $appliedJob->post]) }}">{{ $appliedJob->post->job_title }}</a></td>
                    <td><a href="#">{{ $appliedJob->post->job_level }}</a></td>
                    <td><a href="{{ route('account.employer', ['employer' => $appliedJob->post->company]) }}">{{ substr($appliedJob->post->company->title, 0, 14) }}..</a></td>
                    <td>{{ $appliedJob->post->vacancy_count }}</td>
                    <td>{{ date('d/m/Y', $appliedJob->post->deadlineTimestamp()) }}, {{ date('d', $appliedJob->post->remainingDays()) }} days</td>
                    <td>
                      <form action="{{ route('appliedJob.destroy', ['id' => $appliedJob]) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn secondary-outline-btn">Withdraw</button>
                      </form>
                    </td>
                  </tr>
                @endforeach
              @else
                <tr>
                  <td colspan="6">You have not applied for any jobs.</td>
                </tr>
              @endif
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
@endsection
