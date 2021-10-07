@if($LoginStatusKey == true)
<h1>You are Logged In</h1>
@elseif($LoginStatusKey == false)
<h1>You are not Logged In</h1>
@else
<h1>Not found login status</h1>
@endif



