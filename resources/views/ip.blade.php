<table >
    <tr>
        <td>
            @for ($i = 0 ; $i <=  255 ; $i++)
                <a href="{{ action('IpController@show', ['ip' => $ip.'.'.$i]) }}">{{$ip}}.{{ $i }}</a><br/>
            @endfor
        </td>
        <td valign="top">
            Ip Information: <br/>
                Ip: {{$info['ip']['address']}}<br/>
                Version: {{$info['ip']['version']}}<br/>
            <br/><br/>
            Country: <br/>
                Name: {{ $info['country']['locales'][app()->getLocale()] ?? $info['country']['name'] }} <br/>
                Iso code: {{ $info['country']['iso_code'] }} <br/>
                European Union: {{ $info['country']['is_in_european_union'] == true ? 'Yes' : 'No' }} <br/>
            <br/><br/>
            City: <br/>
                Name: {{ $info['city']['locales'][app()->getLocale()] ?? $info['city']['name'] }} <br/>

        </td>
    </tr>
</table>
