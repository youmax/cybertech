@error($name)
<div class="flex mt-4 bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative animate__animated" role="alert"
    x-data="{ open: true }"
    x-show="open"
    x-bind:class="{ 'animate__pulse': open}"
    x-transition:leave="transition animate__fadeOut duration-300"
    x-bind:class="{ '': open,  'animate__fadeOut': !open }">
    <strong class="font-bold"> {{ $message }}</strong>
    <span class="relative ml-auto">
        <svg class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 20 20" @click="open = false">
            <title>Close</title>
            <path
                d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z" />
        </svg>
    </span>
</div>
@enderror