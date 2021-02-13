<!-- Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

<!-- Set "active" class -->
<script>
    var path = location.pathname;
    document.querySelectorAll('[href]').forEach(element => {
        if (element.getAttribute('href') === path || '/' + element.getAttribute('href') === path) {
            element.classList.add('active');
        }
    });
</script>

</body>
</html>