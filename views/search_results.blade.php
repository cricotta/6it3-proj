
@include('inc.header')

<div>
    <h1 class="mt-4 text-center text-4xl">Search Results</h1>
</div>

<div class="flex justify-center p-4">
    <form action="/order" method="POST">
        @csrf
        <div class="border-gray-300 border border-black rounded-lg shadow-lg w-[32rem] p-4 m-4">

            @if (count($searchRes) == 0)
                <h1>no results, find some <a class="underline italic text-blue-500" href="/products">here</a> </h1>
            @else
                @foreach($searchRes as $item)

                    <div class="flex items-center text-center border-b">
                    <table>
                    <tr>
                       <td><a class="underline italic text-blue-500" href="/{{$item->direct}}"><img class="rounded-md h-24 w-24 m-4" src="{{$item->gallery}}"></a>  </td>
                       <td class="w-36"> <a href="{{$item->direct}}"> <h1 class="mr-4">{{$item->product_name}}</h1> </a></td>
                        <td> <h1 class="mr-4">Price: <br>${{$item->price}}</h1> </td>
                    </tr>
                    </table>
                    </div>
                @endforeach
            @endif
        </div>
    </form>
</div>
</div>

@include('inc.footer')
