<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EXAM</title>
    <link rel="stylesheet" href="../assets/css/tailwind.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script type="text/javascript" src="../js/product.js"></script>

</head>
<body class="bg-gray-600 flex flex-col min-h-screen">
<nav class="bg-gray-800 p-2 mt-0 w-full"> <!-- Add this to make the nav fixed: "fixed z-10 top-0" -->
        <div class="container mx-auto flex flex-wrap items-center">
            <div class="flex w-full md:w-1/2 justify-center md:justify-start text-white font-extrabold">
                <a class="text-white no-underline hover:text-black hover:no-underline" href="../../index.php">
                    <span class="text-2xl pl-2"><i class="em em-grinning"></i> SALVANI PRELIM EXAM</span>
                </a>
            </div>
            <div class="flex w-full pt-2 content-center justify-between md:w-1/2 md:justify-center">
                <ul class="list-reset flex justify-between flex-1 md:flex-none items-center">
                    <div class="flex">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8 mt-3">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                        <li class="mr-6 ">
                            <a class="text-2xl inline-block text-gray-600 no-underline hover:text-gray-200 hover:text-underline py-2 px-2 font-bold" href="customer.php">
                            Customer</a>
                        </li>
                    </div>
                    <div class="flex">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8 mt-3">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                        </svg>
                        <li class="mr-6">
                            <a class="text-2xl inline-block text-gray-600 no-underline hover:text-gray-200 hover:text-underline py-2 px-2 font-bold" href="products.php">Products</a>
                        </li>
                    </div>
                </ul>
            </div>
        </div>
    </nav>

    <div class="flex justify-center"> 
        <h1 class="mb-4 text-3xl font-extrabold text-gray-900 md:text-5xl lg:text-6xl flex">
            <span class="text-gray-900">ADD Product Form</h1>
    </div>

    <div class="flex justify-center pt-10">
        <form class="w-full max-w-4xl" role="form" id="prod-form" method="POST">
            <div class="lg:flex lg:flex-wrap lg:flex-row md:flex md:flex-wrap md:flex-row mb-4 sm:flex sm:flex-wrap sm:flex-col">
                <div class="lg:w-1/2 md:w-1/2 sm:w-4/4 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-black-700 text-s font-bold mb-2" for="grid-product-name">
                        Product Name
                    </label>
                    <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="prodname" type="text" placeholder="Enter Product Name" required>
                </div>
                <div class="lg:w-1/4 md:w-1/4 sm:w-4/4 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-black-700 text-s font-bold mb-2" for="grid-prod-manufacturer">
                        Manufacturer
                    </label>
                    <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="prodman" type="text" placeholder="Enter Manufacturer" required>
                </div>
                
                <div class="lg:w-1/4 md:w-1/4 sm:w-4/4 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-black-700 text-s font-bold mb-2" for="grid-quantity">
                        Quantity
                    </label>
                    <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="prodquan" type="int" placeholder="Enter Quantity" required>
                </div>
            </div>
            <div class="lg:flex lg:flex-wrap lg:flex-row md:flex md:flex-wrap md:flex-row mb-4 sm:flex sm:flex-wrap sm:flex-row">
                <div class="lg:w-3/5 md:w-1/2 sm:w-2/4 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-black-700 text-s font-bold mb-2" for="grid-man-address">
                        Manufacturer Address
                    </label>
                    <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="prodmanadd" type="text" placeholder="Enter Manufacturer Address" required>
                </div>
                <div class="lg:w-2/5 md:w-1/2 sm:w-2/4 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-black-700 text-s font-bold mb-2" for="grid-man-email">
                        Manufacturer Email
                    </label>
                    <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="prodmanemail" type="text" placeholder="Enter Email Address" required>
                </div>
            </div>

            <div class="flex justify-center pt-3">
                <div class="w-full max-w-4xl">
                    <div class="flex flex-wrap mb-4 justify-end">
                        <div class="w-auto bg-gray-600 h-12 flex">
                        <button type="submit" class="h-10 px-5 m-2 text-indigo-100 transition-colors duration-150 bg-gray-700 rounded-lg focus:shadow-outline hover:bg-gray-300 hover:text-black">ADD Product</button>
                        </div>
                        <div class="w-auto bg-gray-600 h-12 flex">
                        <a href="productlist.php" class="h-10 px-5 m-2 text-indigo-100 transition-colors duration-150 bg-gray-700 rounded-lg focus:shadow-outline hover:bg-gray-300 hover:text-black text-2xl font-semibold">Product List</a>
                        </div>
                    </div> 
                </div>
            </div>
        </form>
    </div>

    <footer class="p-4 bg-white rounded-lg shadow md:flex md:items-center md:justify-between md:p-6 dark:bg-gray-800 mt-auto">
    <span class="text-sm text-gray-700 sm:text-center dark:text-gray-800">© 2023 <a href="" class="hover:underline">SALVANI PRELIM EXAM</a>
    </span>
    <ul class="flex flex-wrap items-center mt-3 text-sm text-gray-700 dark:text-gray-400 sm:mt-0">
        <li>
            <a href="#" class="mr-4 hover:underline md:mr-6 ">Bachelor of Science in Information Technology</a>
        </li>
        <li>
            <a href="#" class="mr-4 hover:underline md:mr-6">C86</a>
        </li>
    </ul>
    </footer>
</body>
</html>