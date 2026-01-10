<h2>{{ $job->title }}</h2>

<p>Congrats! Your job is now live on our website.</p>

{{-- 
  When the user receives this email, they're not
  on our website, so we need to provide the full URL.

  This will work for local and production environment.
  --}}
<a href="{{ url('/jobs/' . $job->id) }}">View you job listing</a>