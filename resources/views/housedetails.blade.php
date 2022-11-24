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
    <body class="bg-[#1A1717] flex justify-center">
        <div class="bg-black text-white fontroboto my-12">
            <div class="relative">
                <img src="/images/huis{{ $house->id }}.png">
                    <button class="font absolute text-xs bottom-0 left-0 text-white bg-[#E50E0B] p-2">{{ $house->type }}</button>
            </div>
            <div class="p-3 w-[300px]">
                <h2 class="text-xl"><b>{{ $house->address }}</b></h2>
                <p>{{ $house->city }}</p>
                <p>{{ $house->living_space }}m² wonen 
                    @if ($house->lot_space > 0)
                    <span>| {{ $house->lot_space }}m² perceel</span>
                    @endif
                </p>
                <p>{{ number_format($house->price, 0, ',', '.') }} k.k.</p>
                <p class="mt-8">{{ $house->description }}</p>
            </div>
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
