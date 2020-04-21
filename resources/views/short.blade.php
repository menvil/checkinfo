@for ($i = 0 ; $i <=  255 ; $i++)
    <a href="{{ action('IpController@show', ['ip' => $range.'.'.$i]) }}">{{$range}}.{{ $i }}</a><br/>
@endfor
