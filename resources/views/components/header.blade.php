@props([
    'title' => '',
    'description' => '',
])

<header class="sm:rounded-xl bg-base-200 p-6 w-full sm:mt-10 sm:w-xl md:w-3xl lg:w-5xl xl:w-7xl">
    <h1 class="text-2xl font-medium text-base-content">
        {{ $title ?: 'Title' }}
    </h1>

    <p class="mt-1 text-sm text-base-content/50">
        {{ $description ?: 'Description' }}
    </p>
</header>
