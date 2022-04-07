@include('inc.header')

<div style="padding: 147px 100px;" class="bi2">
<div class="text-center ">
    <h1 class="text-6xl text-white pb-4">Contact Form</h1>
</div>
<!-- Form -->

<div class="flex justify-center">
<div class="block p-6 rounded-lg shadow-lg bg-white max-w-md border border-solid border-gray-300">

    <form action="/send" method="POST" >
        @csrf
        <div class="text-center ">
            <h1 class=" pt-4 pb-4">Please fill out the bellow form or send me an email at connorricotta@gmail.com</h1>
        </div>
        <div class="form-group mb-4 w-96">
            <input type="text" name="name" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding
                border border-solid border-gray-300 rounded transition ease-in-out m-0
                focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleInput7"
                placeholder="Name">
            <small class="ml-1 text-red-600">@error('name'){{$message}}@enderror</small>
        </div>
            <div class="form-group mb-4">
            <input type="email" name="email" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white
            bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
            id="exampleInput8" placeholder="Email address">
                <small class="ml-1 text-red-600">@error('email'){{$message}}@enderror</small>
            </div>

            <div class="flex items-center justify-center mb-6">
                <div class="relative form-floating mb-3 w-full">
                    <input type="date" name="date"
                    class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white
                    bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0
                    focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                    placeholder="Required Date" />
                    <label for="floatingInput" class="text-gray-400">Required Date</label>
                </div>
            </div>

        <div class="form-group mb-4">
        <textarea class="form-control block w-full mt-3 px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300
        rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
        name="notes"
        id="exampleFormControlTextarea13"
        rows="3"
        placeholder="Message"></textarea>
            <small class="ml-1 text-red-600">@error('notes'){{$message}}@enderror</small>
        </div>



        <button type="submit" class="w-full px-6 py-2.5 bc text-white font-medium text-xs leading-tight uppercase
        rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0
        active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out"> Send </button>
    </form>
</div>
</div>
</div>

@include('inc.footer')
