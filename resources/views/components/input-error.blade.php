@props(['messages'])

@if ($messages)
    <ul {{ $attributes->merge(['class' => 'text-sm text-red-600 dark:text-red-400 space-y-1']) }}>
        @foreach ((array) $messages as $message)
            <li>{{ $message }}</li>
        @endforeach

        {{-- 追加 --}}
        {{-- @if(empty($errors->first('image')))
        <li>画像ファイルがあれば、再度選択して下さい。</li>
        @endif --}}
    </ul>
@endif
