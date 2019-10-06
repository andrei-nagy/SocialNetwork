<form method="POST" action="/profile/reallydelete">
    <input type="hidden" name="_method" value="DELETE">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <button>*Really* delete your profile?</button>
</form>