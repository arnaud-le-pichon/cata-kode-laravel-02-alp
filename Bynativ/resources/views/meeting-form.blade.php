<link rel="stylesheet" href="{{ asset('css/meeting.css') }}">

<h1>Meeting Creation Form</h1>
{{session('errors')}}
@if (isset($successMessage))
    <p>$success</p>
    <a href="/meeting/{{$meetingId}}">Consulter votre demande de rendez-vous</a>
@endif
<form method="POST" action="/meeting">
    @csrf
    <div class="form-content">
        <label>Nom<input type="text" name="user" class="form-input" required></label>
        <label>Téléphone<input type="text" name="phone" class="form-input"></label>
        <label>Email<input type="text" name="email" class="form-input" required></label>
        <label>Date et heure du rendez-vous<input type="datetime-local" name="time"></label>
        <label>Message<textarea name="message"></textarea></label>
        <input type="submit">
    </div>
</form>