<h4>All reviews:</h4>
@foreach ($reviews as $review)
    <li> {{ $review->text }} - {{ $review->rating }}</li>    
@endforeach