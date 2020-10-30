<h1>{{ $concert->title }}</h1>
<h2>{{ $concert->subtitle }}</h2>
<p>Doors at {{ $concert->formatted_date }}</p>
<p>Doors at {{ $concert->date }}</p>
<p>{{ number_format($concert->ticket_price/100, 2) }}</p>
<p>{{ $concert->venue }}</p>
<p>{{ $concert->venue_address }}</p>|
<p>{{ $concert->city }}, {{ $concert->state }}.  {{ $concert->zip }}</p>|
<p>{{ $concert->additional_information }}</p>|
