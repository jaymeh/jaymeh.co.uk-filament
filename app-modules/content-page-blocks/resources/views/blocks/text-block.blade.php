<div class="article-container">
    <article class="page-content">
        {!! Str::markdown($content, ['html_input' => 'strip', 'allow_unsafe_links' => false,]) !!}
    </article>
</div>