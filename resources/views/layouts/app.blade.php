<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Website</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <script src="https://kit.fontawesome.com/2ab29f499f.js" crossorigin="anonymous"></script>
</head>
    <body>
        @yield('content')
    </body>
    <script>
        function opentab(tabName, event) {
            const tabContents = document.querySelectorAll('.tab-contents');
            const tabLinks = document.querySelectorAll('.tab-links');

            tabContents.forEach(content => {
                content.classList.remove('active-tab');
            });

            tabLinks.forEach(link => {
                link.classList.remove('active-link');
            });
            
            document.getElementById(tabName).classList.add('active-tab');
            event.currentTarget.classList.add('active-link');
        }
    </script>
</html>