
@include('inc.header')

    <div class="flex-col ">
            <div class="bg-gray text-gray-800 py-6 text-6xl text-center" >
                <h1 class=""> Live Edge charcuterie </h1>
            </div>
            <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 p-6">
            <div class="flex justify-center">
                <div class=" rounded-lg shadow-lg bg-white max-w-sm">
                    <a href="#!">
                    <img class="rounded-t-lg" src="/images/walnut_charcuterie3.jpg" alt="fix spelling"/>
                    </a>
                    <div class="p-6">
                    <h5 class="text-gray-900 text-2xl font-medium mb-2">Walnut Charcuterie</h5>
                    <a href="/product_pages/walnut_charcuterie">
                    <button type="button" class=" inline-block px-6 py-2.5 bc text-white font-medium text-xs leading-tight
                    uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none
                    focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">
                    View</button>
                    </a>
                    </div>
                </div>
            </div>

            <div class="flex justify-center">
                <div class=" rounded-lg shadow-lg bg-white max-w-sm">
                    <a href="#!">
                    <img class="rounded-t-lg" src="/images/hornbeam_charcuterie.jpg" alt=""/>
                    </a>
                    <div class="p-6">
                    <h5 class="text-gray-900 text-2xl font-medium mb-2">Hornbeam Charcuterie </h5>
                    <a href="/product_pages/hornbeam_charcuterie">
                        <button type="button" class=" inline-block px-6 py-2.5 bc text-white font-medium text-xs leading-tight
                        uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none
                        focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">View</button>
                    </a>
                    </div>
                </div>
            </div>

            <div class=" flex justify-center">
                <div class="rounded-lg shadow-lg bg-white max-w-sm">
                    <a href="">
                    <img class="rounded-t-lg" src="/images/cherry_charcuterie.jpg" alt=""/>
                    </a>
                    <div class="p-6">
                    <h5 class="text-gray-900 text-2xl font-medium mb-2">Cherry Charcuterie</h5>
                        <a href="/product_pages/cherry_charcuterie">
                    <button type="button" class="inline-block px-6 py-2.5 bc text-white font-medium text-xs leading-tight
                    uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none
                    focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">View</button>
                        </a>
                    </div>
                </div>
            </div>

    </div>

@include('inc.footer')
