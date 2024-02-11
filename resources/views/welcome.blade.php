@extends('ice')
@section('content')

<div class="p-6">
    <h1 class="text-3xl font-bold mb-4">Latest Cybersecurity News</h1>
    
    <!-- News Feed -->
    <div class="divide-y divide-gray-200">
        <!-- Fetch news using JavaScript and push into this div -->
        <div id="cybersecurity-news" class="py-4">
            <!-- News items will be dynamically loaded here -->
        </div>
    </div>
</div>

<script>
    // Fetching cybersecurity news using NewsAPI
    fetch('https://newsapi.org/v2/everything?q=cybersecurity&apiKey=cae43a1fffc3425da4f2e02425c8213e')
    .then(response => response.json())
    .then(data => {
        const newsDiv = document.getElementById('cybersecurity-news');

        data.articles.forEach(article => {
            const newsItem = document.createElement('div');
            newsItem.classList.add('py-4');

            const title = document.createElement('h2');
            title.classList.add('text-xl', 'font-semibold', 'mb-2');
            title.textContent = article.title;

            const description = document.createElement('p');
            description.classList.add('text-gray-600');
            description.textContent = article.description;

            const link = document.createElement('a');
            link.classList.add('text-blue-500', 'mt-2', 'inline-block');
            link.href = article.url;
            link.textContent = 'Read more';

            newsItem.appendChild(title);
            newsItem.appendChild(description);
            newsItem.appendChild(link);

            newsDiv.appendChild(newsItem);
        });
    })
    .catch(error => {
        console.error('Error fetching cybersecurity news:', error);
    });
</script>


@endsection