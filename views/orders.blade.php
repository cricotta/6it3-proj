
@include('inc.header')

<div>
    <h1 class="mt-4 text-center text-4xl">Orders</h1>
</div>

<div class="flex justify-center p-4">
    <form action="/order" method="POST">
        @csrf
        <div class="border-gray-300 border border-black rounded-lg shadow-lg w-[32rem] p-4 m-4">

            @if (count($products) == 0)
                <h1> No orders, find something <a class="underline italic text-blue-500" href="/products">HERE!</a> </h1>
            @else
                <div class="flex items-center text-center ">
                <table>
                <tr class="border-b">
                    <td class="w-56"> <h1 class="mr-4">Order: </h1> </td>
                    <td> <h1 class="mr-4">Notes: </h1> </td>
                    <td> <h1 class="mr-4">Order Total: </h1> </td>
                    <td> <h1 class="mr-4">Date Required:</h1> </td>
                </tr>
                @foreach($products as $item)
                            <tr class="h-24 border-b">
                                <td class="w-56"> <h1 class="mr-4"> {{$item->order_cont}}</h1> </td>
                                <td> <h1 class="mr-4">{{$item->order_notes}}</h1> </td>
                                <td> <h1 class="mr-4">${{$item->order_total}}</h1> </td>
                                <td> <h1 class="mr-4">{{$item->date_required}}</h1> </td>
                            </tr>
                @endforeach
                </table>
                </div>
            @endif
        </div>
    </form>
</div>
</div>

@include('inc.footer')
