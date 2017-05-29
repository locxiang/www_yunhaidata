@foreach($navigation as $item)
    <li class="menu-item {{ $item['url']=='/'?'active':'' }}"><a href="{{ $item['url'] }}">{{ $item['name'] }}</a></li>
@endforeach