
@include('inc.header')

<div>
    <h1 class="mt-4 text-center text-4xl">Cart</h1>
</div>


<div class="flex justify-center p-4">
    <form action="/order" method="POST">
        @csrf
    <div class="border-gray-300 border border-black rounded-lg shadow-lg w-[32rem] p-4 m-4">



        @if (count($products) == 0)
            <h1>Your Cart is empty, start searching <a class="underline italic text-blue-500" href="/products">here</a> </h1>
            @else
            <h1 class="hidden">{{$total = 0}}</h1>
            <h1 class="hidden">{{$order_cont = ''}}</h1>
            @foreach($products as $item)

            <div class="flex items-center text-center border-b">
                <table>
                    <tr>

                        <td> <img class="rounded-md h-24 w-24 m-4" src="{{$item->gallery}}"> </td>

                        <td class="w-36"> <h1 class="mr-4">{{$item->product_name}}</h1> </td>

                        <td> <h1 class="mr-4">Price: <br>${{$item->price}}</h1> </td>

                        <td> <h1 class="mr-4">Quantity: <br>{{$item->quantity}}</h1> </td>

                        <td> <h1 class="mr-4">Total: <br>${{$tot = $item->price * $item->quantity}}</h1> </td>

                        <td> <a href="/removecart/{{$item->cart_id}}" style="min-width: 75px; max-width: 100px;" class="
                                w-full px-6 py-2.5 bc text-white font-medium text-xs leading-tight uppercase rounded shadow-md
                                hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none
                                focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out h-8
                                Justify-center">
                            Remove</a> </td>
                            <h1 class="hidden">{{$total = $total + $tot}} </h1>
                            <h1 class="hidden">{{$order_cont = $order_cont.$item->product_name.' '.'x'.' '.$item->quantity.','. ' ' }} </h1>

                    </tr>
                </table>
            </div>

        @endforeach
                <div class="Justify-center text-center p-4 m-4">
                    <h1 >Order Total: ${{$total}}</h1> <br>
                        <input class="hidden" name="order_cont" value="{{$order_cont}} " >
                    <input class="hidden" name="order_total" value="{{$total}} " >
                    <input class="hidden" name="user_id" value="{{Session::get('user')['Id']}} " >


                    <div class="flex items-center justify-center">
                        <div class="relative form-floating mb-3 w-full">
                            <input type="date" name="date_required"
                                   class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white
                                    bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0
                                    focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                   placeholder="Required Date"/>
                            <label for="floatingInput" class="text-gray-400">Required Date</label>
                        </div>
                    </div>

                    <div class="form-group mb-6">
                     <textarea class="form-control block w-full mt-3 px-3 py-1.5 text-base font-normal text-gray-400 bg-white bg-clip-padding border border-solid border-gray-300
                        rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                          name="order_notes"
                          rows="3"
                          placeholder="Order Notes"></textarea>
                    </div>

                    <button style="min-width: 75px; max-width: 150px;" type="submit" class="
                        w-full px-6 py-2.5 bc text-white font-medium text-xs leading-tight uppercase rounded shadow-md
                        hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none
                        focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out h-8">
                        Order</button>
                </div>

        @endif

    </div>

        </form>
    </div>
</div>






@include('inc.footer')

