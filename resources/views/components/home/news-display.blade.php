<a
    @class([
        "flex justify-between p-7 border-2 border-green-700 rounded-md mb-7",
        "hover:bg-green hover:text-white hover:cursor-pointer transition-colors"
    ])
    href="{{ route("newsArticle.show", [ "noutati" => $id ]) }}"
>
    <div class="flex-grow">
        <h2 class="text-xl">{{ $title }}</h2>
        <p>{{ strlen($description) > 30 ? substr($description, 30) : $description }}</p>
    </div>
    <p class="ms-auto">{{ $createdAt }}</p>
</a>
