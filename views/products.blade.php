@include('inc.header')

<div class="text-center p-4">
    <h1 class="text-5xl">Products</h1>
    <h1 class="italic">*note*</h1>
    <h1>All wood products will have variations with grain, each product is unique and will differ slightly</h1>
</div>
<!-- Products -->
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 p-6">

    <div class="flex justify-center">
        <div class=" rounded-lg shadow-lg bg-white max-w-sm">
            <a href="#!">
            <img class="rounded-t-lg" src="images/walnut_charcuterie.jpg" alt=""/>
            </a>
            <div class="p-6">
            <h5 class="text-gray-900 text-2xl font-medium mb-2">Live Edge Charcuterie</h5>
            <a href="/products/live_edge_charcuterie">
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
            <img class="rounded-t-lg" src="images/paddle_board.jpg" alt=""/>
            </a>
            <div class="p-6">
            <h5 class="text-gray-900 text-2xl font-medium mb-2">Serving Trays</h5>
                <a href="/products/serving_trays">
                    <button type="button" class=" inline-block px-6 py-2.5 bc text-white font-medium text-xs leading-tight
            uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none
            focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">
                        View</button>
                </a>
            </div>
        </div>
    </div>

    <div class=" flex justify-center">
        <div class="rounded-lg shadow-lg bg-white max-w-sm">
            <a href="#!">
            <img class="rounded-t-lg" src="images/mapple_end_grain.jpg" alt=""/>
            </a>
            <div class="p-6">
            <h5 class="text-gray-900 text-2xl font-medium mb-2">Cutting Boards</h5>
                <a href="/products/cutting_boards">
                    <button type="button" class=" inline-block px-6 py-2.5 bc text-white font-medium text-xs leading-tight
            uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none
            focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">
                        View</button>
                </a>
            </div>
        </div>
    </div>


    <div class=" flex justify-center">
        <div class="rounded-lg shadow-lg bg-white max-w-sm">
            <a href="#!">
            <img class="rounded-t-lg" src="images/epoxy_lake.jpg" alt=""/>
            </a>
            <div class="p-6">
            <h5 class="text-gray-900 text-2xl font-medium mb-2">Decorations</h5>
            <button type="button" class=" inline-block px-6 py-2.5 bc text-white font-medium text-xs leading-tight
            uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none
            focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">View</button>
            </div>
        </div>
    </div>

    <div class=" flex justify-center">
        <div class="rounded-lg shadow-lg bg-white max-w-sm">
            <a href="#!">
            <img class="rounded-t-lg" src="images/wooden_ornaments.png" alt=""/>
            </a>
            <div class="p-6">
            <h5 class="text-gray-900 text-2xl font-medium mb-2">Wood Turning</h5>
            <button type="button" class=" inline-block px-6 py-2.5 bc text-white font-medium text-xs leading-tight
            uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none
            focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">View</button>
            </div>
        </div>
    </div>

</div>

@include('inc.session_status')

@include('inc.footer')
