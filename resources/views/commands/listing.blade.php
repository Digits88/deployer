@extends('layout')

@section('content')
    <div class="row">
        @include('commands._partials.list', [ 'step' => 'Before', 'commands' => $before ])
        @include('commands._partials.list', [ 'step' => 'After', 'commands' => $after ])
    </div>

    <script type="text/javascript">
        var before_commands = {!! $before->toJson() !!};
        var before_servers = {!! $before_servers !!};
        var after_commands = {!! $after->toJson() !!};
        var after_servers = {!! $after_servers !!};
    </script>

    @include('dialogs.command')
@stop