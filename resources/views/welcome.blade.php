<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inria+Sans:wght@300&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Inria+Sans:wght@300&family=Roboto&display=swap" rel="stylesheet">
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body class="bg-[#1A1717]">
        <nav class="bg-black py-4 px-8 flex justify-between font">
            <img src="logo.svg" class="w-[75px]">
            <ul class="text-white items-center text-lg hidden lg:flex">
                <li class="mr-12 text-red-500 cursor-pointer">Home</li>
                <li class="mr-12 cursor-pointer">Aanbod</li>
                <li class="mr-12 cursor-pointer">Contact</li>
                <li class="mr-4 cursor-pointer">Over ons</li>
            </ul>
            <img src="menu.svg" class="block lg:hidden">
        </nav>
        <div class="flex flex-col items-center mt-12">
            <h2 class="font text-2xl text-white mb-4">KOOPHUIZEN</h2>
            @foreach ($houses as $house)
            <div class="bg-black text-white fontroboto 
            @if ($house->id > 1) mt-16 @endif
            @if ($house->id == $maxId) mb-8 @endif">
                <div class="relative">
                    <img src="/images/huis{{ $house->id }}.png">
                    <button class="font absolute text-xs bottom-0 left-0 text-white bg-[#E50E0B] p-2">{{ $house->type }}</button>
                </div>
                <div class="p-3">
                    <h2 class="text-xl"><b>{{ $house->address }}</b></h2>
                    <p>{{ $house->city }}</p>
                    <p>{{ $house->living_space }}m² wonen 
                        @if ($house->lot_space > 0)
                        <span>| {{ $house->lot_space }}m² perceel</span>
                        @endif
                    </p>
                    <p>{{ number_format($house->price, 0, ',', '.') }} k.k.</p>
                </div>
            </div>
            @endforeach
        </div>
    </body>
</html>

<style>
.font {
    font-family: 'Inria Sans', sans-serif;
    font-weight: bold;
}

.fontroboto {
    font-family: 'Roboto', sans-serif;
}
</style>
