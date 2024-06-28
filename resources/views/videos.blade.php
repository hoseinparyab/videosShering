@foreach($data as $name)
<li>{{$name}}</li>
@endforeach


@if($is_admin)
<h1>Profile</h1>
@endif
