<input disabled class="grid-column-switch" data-size="small" {{ $checked }} type="checkbox" data-color="{{ $color }}"/>

<script require="@switchery">
    var swt = $('.grid-column-switch'),
        that;
    function initSwitchery() {
        swt.parent().find('.switchery').remove();
        swt.each(function () {
            that = $(this);
            new Switchery(that[0], that.data())
        })
    }
    initSwitchery();

</script>