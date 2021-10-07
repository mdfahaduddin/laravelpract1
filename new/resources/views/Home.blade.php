@foreach ($CountryDataKey as $CountryName)

@if($loop->last)
{{$CountryName}}
@break
@endif
@endforeach


