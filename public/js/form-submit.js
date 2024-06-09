// public/js/form-submit.js
document.querySelector('form').addEventListener('submit', function (e) {
    e.preventDefault();
    let formData = new FormData(this);
    fetch(this.action, {
        method: 'POST',
        body: formData,
        headers: {
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
        }
    })
    .then(response => response.json())
    .then(data => {
        console.log(data);
        // Handle the response accordingly
    })
    .catch(error => console.error('Error:', error));
});
