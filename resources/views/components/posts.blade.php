<div class="row">
    <div class="col-12">
        <div class="posts-grid">
            <div class="row">
                @foreach ($posts as $post)
                    <x-singlepost :post="$post"/>
                @endforeach
            </div>
        </div>
    </div>
</div>