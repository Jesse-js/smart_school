<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://unpkg.com/franken-wc@0.0.2/dist/css/violet.min.css" />
    <script>
        // On page load or when changing themes, best to add inline in `head` to avoid FOUC
        if (
            localStorage.getItem("color-theme") === "dark" ||
            (!("color-theme" in localStorage) &&
                window.matchMedia("(prefers-color-scheme: dark)").matches)
        ) {
            document.documentElement.classList.add("dark");
        } else {
            document.documentElement.classList.remove("dark");
        }
    </script>

</head>

<body>
    <x-navbar />
    <div class="uk-container uk-container-dark">
        <p uk-margin>
            <button class="uk-button uk-button-default">Default</button>
            <button class="uk-button uk-button-ghost">Ghost</button>
            <button class="uk-button uk-button-primary">Primary</button>
            <button class="uk-button uk-button-secondary">Secondary</button>
            <button class="uk-button uk-button-danger">Danger</button>
            <button class="uk-button uk-button-text">Text</button>
            <button class="uk-button uk-button-link">Link</button>

        </p>
    </div>

    @stack('scripts')
</body>

</html>
