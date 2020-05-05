@foreach ($links as $link)
    {{action('IpController@short', $link)}}
@endforeach
