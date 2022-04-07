@include('inc.header')

<div style="padding: 143px 100px;" class="bi2">

<div class="text-center ">
    <h1 class="text-6xl text-white pt-4 pb-4">Sign-Up</h1>
</div> <br>

<div class="flex justify-center ">
    <div class="block p-6 rounded-lg shadow-lg bg-white wf border border-solid border-gray-300">

        <form action="signup" method="POST" id="form">
            @csrf

                <div class="form-group mb-6">
                    <input type="text" name="name" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding
                        border border-solid border-gray-300 rounded transition ease-in-out m-0
                        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleInput7"
                           placeholder="Full Name">
                    <small class="ml-1 text-red-600">@error('name'){{$message}}@enderror</small>
                </div>

                <div class="form-group mb-6">
                    <input type="text" name="uid" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding
                    border border-solid border-gray-300 rounded transition ease-in-out m-0
                    focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleInput7"
                    placeholder="Username">
                    <small class="ml-1 text-red-600">@error('uid'){{$message}}@enderror</small>
                </div>

                <div class="form-group mb-6">
                    <input type="email" name="email" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white
                    bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white
                    focus:border-blue-600 focus:outline-none"
                    id="exampleInput8" placeholder="Email address">
                    <small class="ml-1 text-red-600">@error('email'){{$message}}@enderror</small>
                </div>

                <div class="form-group mb-6">
                    <input type="password" name="pwd" id="pwd" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding
                    border border-solid border-gray-300 rounded transition ease-in-out m-0
                    focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                    placeholder="Password">
                    <small class="ml-1 text-red-600">@error('pwd'){{$message}}@enderror</small>
                </div>

                <div class="form-group mb-6 form-control">
                    <input type="password" name="pwdrepeat" id="password2" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding
                        border border-solid border-gray-300 rounded transition ease-in-out m-0
                        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                           placeholder="Confirm Password">
                    <small class="ml-1 text-red-600">@error('pwdrepeat'){{$message}}@enderror</small>
                </div>

                <div>
                <button type="submit" name="submit"  class="w-full px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase
                    rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0
                    active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out"> Submit </button>
                </div>
        </form>

    </div>
</div>
</div>

<script src="/public/js/pwdCnfrm.js"></script>


@include('inc.footer')
