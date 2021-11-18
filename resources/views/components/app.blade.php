<html>
<head>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://unpkg.com/@github/include-fragment-element" type="module" defer></script>
    <script src="https://cdn.skypack.dev/@hotwired/turbo" type="module" defer></script>
</head>

<body class="bg-gray-400 py-24">
    <div class="mx-auto w-1/2">
        <x-nav />

        {{ $slot }}
    </div>

</body>
</html>
