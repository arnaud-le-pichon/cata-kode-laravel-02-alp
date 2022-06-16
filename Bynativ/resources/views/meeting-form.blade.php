<link rel="stylesheet" href="{{ asset('css/meeting.css') }}">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.20.1/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment-timezone/0.5.14/moment-timezone-with-data-2012-2022.min.js"></script>
<script>
    $( document ).ready(function() {
        $('#timezone').val(moment.tz.guess())
    });        
</script>


<h1>Meeting Creation Form</h1>
{{session('errors')}}
@if (isset($successMessage))
    <p>Success</p>
    <a href="{{route('get-meeting', $id)}}">Consulter votre demande de rendez-vous</a>
@endif
<form method="POST" action="{{route('save-meeting')}}">
    @csrf
    <div class="form-content">
        <input type="hidden" name="timezone" id="timezone">
        <label>Nom<input type="text" name="user" class="form-input" required></label>
        <label>Téléphone<input type="text" name="phone" class="form-input"></label>
        <label>Email<input type="text" name="email" class="form-input" required></label>
        <label>Date et heure du rendez-vous<input type="datetime-local" name="time"></label>
        <label>Message<textarea name="message"></textarea></label>
        <input type="submit">
    </div>
</form>