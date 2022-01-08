<!--Custom JavaScript -->
<script src="{{asset('assets/plugins/toast-master/js/jquery.toast.js')}}"></script>

@if(Session::has('message') || isset($message) && is_array($message))
    @php
        /** @var array $message */
    $message = Session::get('message') ?: $message
    @endphp
    <script>
        $(function () {
            "use strict";

            $.toast({
                heading: '{{$message['type']}}',
                text: '{{$message['text']}}',
                position: 'top-right',
                loaderBg: '#ff6849',
                icon: '{{$message['type']}}',
                hideAfter: 3000,
                stack: 6

            });
        });

    </script>
@endif

