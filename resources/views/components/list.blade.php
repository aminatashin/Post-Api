
@props('listing')
  <div class="flex">
    <img
        class="hidden w-48 mr-6 md:block"
        src="{{$listing->logo ? asset('storage/'.$listing->logo) : asset('/images/no-image.png') }}"
        alt=""
    />
    <div>
        <h3 class="text-2xl">
            <a href="/listings/{{$listing->id}}">{{$listing->title}}</a>
        </h3>

    </div>
</div>