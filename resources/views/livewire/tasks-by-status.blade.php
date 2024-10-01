<div class="flex justify-center mt-4">
    <div class="w-full p-4 flex justify-between rounded-md bg-indigo-200 shadow-md">
        @foreach($tasksByStatus as $status)
            <div class="flex flex-col justify-center items-center">
{{--                PLEASE NOTE w-16 h-16 will make it round  --}}
                <span @class=(['w-16 h-16 flex justify-center items-center rounded-full text-lg text-black border-2',
                $status->status->color() => $status->status ])>
                    {{ $status->count }}
                </span>
                <span>{{ Str::of($status->status->value)->headline() }}</span>
{{--                The above line gives us the status Enum value in string format --}}
            </div>

        @endforeach
    </div>
</div>


