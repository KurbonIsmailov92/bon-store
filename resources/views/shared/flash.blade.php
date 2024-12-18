
@if (session()->has('flash_notification'))
    @foreach (session('flash_notification') as $message)
        <div class="{{ $message['level'] }} p-5">
            {{ $message['message'] }}
        </div>
    @endforeach
@endif
