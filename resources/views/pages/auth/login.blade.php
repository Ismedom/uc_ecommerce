<x-layouts.layout>
        <div class="flex min-h-screen flex-col justify-center items-center px-6 py-12 lg:px-8">
            <div class="sm:mx-auto sm:w-full sm:max-w-sm">
            <img class="mx-auto h-10 w-auto" src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=600" alt="Your Company">
            <h2 class="mt-10 text-center text-2xl/9 font-bold tracking-tight text-gray-300">Sign in to your account</h2>
            </div>
        
            <div class="mt-8 w-[calc(100%-20px)] sm:mx-auto sm:w-full sm:max-w-sm">
                <form class="space-y-5" method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="">
                        <label for="email" class="block text-sm/6 font-medium text-gray-300">Email address</label>
                        <div>
                            <input type="email" name="email" id="email" 
                                autocomplete="email" 
                                required 
                                placeholder="example@gmail.com"
                                class="block w-full rounded-md bg-gray-700 px-3 py-1.5 text-base text-gray-300 outline-1 -outline-offset-1 outline-gray-500 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                        </div>
                    </div>
            
                    <div>
                    <div class="flex items-center justify-between mt-1">
                        <label for="password" class="block text-sm/6 font-medium text-gray-300">Password</label>
                    </div>
                    <div>
                        <input type="password" name="password" id="password" 
                            autocomplete="current-password" 
                            required 
                            placeholder="password"
                            class="block w-full rounded-md bg-gray-700 px-3 py-1.5 text-base text-gray-300 outline-1 -outline-offset-1 outline-gray-500 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                    </div>
                    </div>

                    <div class="text-sm mb-2">
                        <a href="#" class="font-semibold text-indigo-600 hover:text-indigo-500">Forgot password?</a>
                    </div>

                    <div>
                        <button 
                            type="submit" 
                            class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm/6 font-semibold text-gray-200 shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 cursor-pointer">Sign in</button>
                    </div>
                </form>
            
                <p class="mt-4 text-center text-sm/6 text-gray-500">
                    Don't have an account?
                    <a href="#" class="font-semibold text-indigo-600 hover:text-indigo-500">Register</a>
                </p>
            </div>
        </div>
</x-layouts.layout>