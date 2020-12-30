<form action="{{route('postform')}}" method="post" >
<!-- {{ csrf_field() }} -->
@csrf
<input type="text" name="hoten">
<input type="submit">
</form>