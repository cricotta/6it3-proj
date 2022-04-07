@include('inc.header')

<div class="m-6">

    <div class="">
        <h1 class="text-3xl mb-6">Joins:</h1>

        <h1 class="text-xl">Left Join:</h1>

        @foreach($left as $L)

            <div class="flex items-center text-center border-b">
                <table>
                    <tr>

                        <td>{{$L->uid}}</td>

                        <td class="w-36"> <h1 class="mr-4">{{$L->cart_id}}</h1> </td>

                        <td> <h1 class="mr-4">quantity: <br>{{$L->quantity}}</h1> </td>


                    </tr>
                </table>
            </div>

        @endforeach
    </div> <br>

    <h1 class="text-3xl mb-6">Video:</h1>
    <div>
        <iframe width="420" height="315"
                src="https://www.youtube.com/embed/tgbNymZ7vqY">
        </iframe>
    </div>

</div>


@include('inc.footer')
