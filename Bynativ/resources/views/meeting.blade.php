<link rel="stylesheet" href="{{ asset('css/meeting.css') }}">

<h1>Meeting</h1>
{{session('errors')}}
<p>{{$meeting->user}}</p>
<p>{{$meeting->phone ?? ''}}</p>
<p>{{$meeting->email}}</p>
<p>{{$meeting->time}}</p>
<p>{{$meeting->message ?? ''}}</p>
