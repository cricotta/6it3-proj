

@include('inc.header')
<div class="flex justify-center mb-4">
    <div style="max-width: 768px;" class=" mt-12 grid sm:grid-cols-1 md:grid-cols-2 justify-center border border-gray-300 rounded-md shadow-lg">
        <div class="flex m-4 justify-center text-xl">

            <div style="min-width: 383px; max-width: 385px; " class="ml-4">

                <div class="m-4">
                    <img style="height: 350px; width: 350px" id="imageBox" class="rounded-md" src="/images/hornbeam_charcuterie.jpg" alt=""/>
                </div>

                <div class="flex justify-center">
                    <img class="rounded-md opacity-60 op h-24 w-24 m-4" src="/images/hornbeam_charcuterie.jpg" onclick="myFunction(this)"/>
                    <img class="rounded-md opacity-60 op h-24 w-24 m-4" src="/images/hornbeam_charcuterie2.jpg" onclick="myFunction(this)"/>
                    <img class="rounded-md opacity-60 op h-24 w-24 m-4" src="/images/hornbeam_charcuterie3.jpg" onclick="myFunction(this)"/>
                </div>

            </div>
        </div>

        <div style="min-width: 383px; max-width: 385px;" class="justify-center m-4">
            <form action="/AddToCart" method="POST">
                @csrf
            <div>
                <h1 class="mt-4 italic text-2xl"> Hornbeam Charcuterie Board</h1>
                <p class="text-xl">Description:</p>
                <ul class="list-disc ml-6 text-lg">
                    <li>thing 1</li>
                    <li>thing 2</li>
                    <li>thing 3</li> <br>
                </ul>
                <div class="flex">
                <div class="mb-3 xl:w-96">


                    <label class="text-2xl">
                        Price Per (CAD$): $55
                    </label> <br>


                <div>
                    <label class="text-xl">
                        Quantity:
                    </label>

                    <select required name="quantity" style="min-width: 75px; max-width: 150px;" class="border text-xl ml-1 mt-3 w-12 border-solid border-gray-300 rounded" aria-label="Default select example">
                        <option selected value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                    </select> <br>

                </div>


                    <input name="product_id" type="number" value="1" class="hidden">

                    <button style="min-width: 75px; max-width: 150px;" type="submit" class="
                        w-full px-6 mt-4 py-2.5 bc text-white font-medium text-xs leading-tight uppercase rounded shadow-md
                        hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg
                        transition duration-150 ease-in-out">Add To Cart</button>


                </div>
                </div>
            </div>
            </form>
        </div>
    </div>
</div>



        <script>
            function myFunction(smallImg)
            {
                var fullImg = document.getElementById("imageBox");
                fullImg.src = smallImg.src;
            }
        </script>

@include('inc.footer')
