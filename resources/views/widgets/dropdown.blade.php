@if(! empty($button['text']) || $click)
<span class="dropdown">
    <a class="dropdown-toggle {{ $button['class'] }}" style="{{ $button['style'] }}" id="{{ $buttonId }}" data-bs-toggle="dropdown" aria-expanded="false">
        <stub>{!! $button['text'] !!}</stub>
        <span class="caret"></span>
    </a>
    <ul class="dropdown-menu" aria-labelledby="{{ $buttonId }}">
        {!! $options !!}
    </ul>
</span>
@else
    <ul class="dropdown-menu" aria-labelledby="{{ $buttonId }}">
        {!! $options !!}
    </ul>
@endif

@if($click)
    <script>
        var $btn = $('#{{ $buttonId }}'),
            $a = $btn.parent().find('ul li a'),
            text = String($btn.text());

        $a.on('click', function () {
            $btn.find('stub').html($(this).html() + ' &nbsp;');
        });

        if (text.replace(/(^\s*)|(\s*$)/g,"")) {
            $btn.find('stub').html(text + ' &nbsp;');
        } else {
            (!$a.length) || $btn.find('stub').html($($a[0]).html() + ' &nbsp;');
        }
    </script>
@endif
