
const searchForm = document.querySelector('#search-form');
const searchResults = document.querySelector('#search-results');
src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"
searchForm.addEventListener('submit', (event) => {
    event.preventDefault();

    const formData = new FormData(searchForm);

    fetch('/search-courses?' + new URLSearchParams(formData))
        .then(response => response.json())
        .then(data => {
            searchResults.innerHTML = '';

            if (data.results.length > 0) {
                data.results.forEach(result => {
                    const li = document.createElement('li');
                    li.textContent = result.name;
                    searchResults.appendChild(li);
                });
            } else {
                const li = document.createElement('li');
                li.textContent = 'No results found.';
                searchResults.appendChild(li);
            }
        });
});