@forelse($CountryDataKey as $Country)

<li>{{ $Country }}</li>

@empty
<p>Data No Found</p>

@endforelse



