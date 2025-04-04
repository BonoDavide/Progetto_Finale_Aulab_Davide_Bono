<x-layout>
    <div class="container">
        <div class="row pt-5 justify-content-center align-items-center text-center">
            <div class="col-12">
                <h1 class="display-5 pb-5">{{__("ui.searchResult")}}<span class="fst-italic">
                        {{ $query }}
                    </span>
                </h1>
            </div>
        </div>
        <div class="row height-custom justify-content-center align-items-center pb-3">
            @forelse ($posts as $post)
                <div class="col-4 col-md-3">
                    <x-card :post="$post"></x-card>
                </div>

            @empty
                <div class="col-12">
                    <h3 class="text-center">{{__("ui.msgNoArticles")}}</h3>
                </div>
            @endforelse
        </div>
    </div>
    <div class="d-flex justify-content-center ">
        <div>{{ $posts->links() }}</div>
    </div>
</x-layout>
