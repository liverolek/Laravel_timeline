<x-layout>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

   
    <h2 class="flex text-2xl justify-center font-bold uppercase mb-1 my-10">
        Memories
    </h2>
    <p class="flex justify-center my-5">
        Welcome,
        here you find some memories from our community life
    </p>

    <div class="mt-20">
        
        @foreach ($events as $event)
        <x-timeline date="{{{ $event['date'] }}}
        " title="{{{ $event['title'] }}}" process="{{{$event['process']}}}"
            description="{{{ $event['description'] }}}" logo="{{{ $event['logo'] }}}" id="{{{ $event['id'] }}}"
            status="completed" color="{{$types->find($event['type_id'])->color}}" type="{{$types->find($event['type_id'])->name}} " 
            />
        @endforeach

    </div>


</x-layout>