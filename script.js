document.getElementById('myForm').addEventListener('submit', function(event) {
    var checkbox = document.getElementById('agreement');
    if (!checkbox.checked) {
      alert('Пожалуйста, примите условия соглашения.');
      event.preventDefault();
    }
  });