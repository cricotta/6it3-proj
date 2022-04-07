@include('inc.header')

<!-- Form -->
<div style="padding: 201px 100px;" class="bi2">

    <div class="text-center">
        <h1 class="text-6xl text-white pb-4">Login</h1>
    </div>

<div class="flex justify-center ">
    <div class="block pt-6 p-6 rounded-lg shadow-lg bg-white wf border border-solid border-gray-300">

        <div class="text-center ">
            <h1 class=" pt-4 pb-4">Login is required to add and access your cart.<br>
                (no emails or notifications will be sent unless requested) <br>
            </h1>
        </div>
        <form action="login" method="POST">
            @csrf


            <div class="form-group mb-6">
                <input type="email" name="email" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white
                    bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white
                    focus:border-blue-600 focus:outline-none"
                       id="exampleInput8" placeholder="Email">
                <small class="ml-1 text-red-600">@error('email'){{$message}}@enderror</small>
            </div>


            <div class="form-group mb-6">
                <input type="password" name="pwd" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding
                    border border-solid border-gray-300 rounded transition ease-in-out m-0
                    focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleInput7"
                       placeholder="Password">
                <small class="ml-1 text-red-600">@error('pwd'){{$message}}@enderror {{ session('status') }}</small>
            </div>


            <div>
                <button type="submit" name="submit" class="w-full px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase
                    rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0
                    active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out "> Login </button>
            </div> <br>
            <div>
                Don't have an account? Create one <a class="underline italic text-blue-500" href="/signup">here</a>
            </div>
        </form>

    </div>
</div>
</div>

@include('inc.footer')

