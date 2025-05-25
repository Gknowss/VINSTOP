<!DOCTYPE html>
<html lang="en"></html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Search</title>
  <link rel="stylesheet" href="homepage.css" />
</head>

<body>

    <h1>Search:</h1>

    <ul></ul>

    <form class="form">

        <input name="vin" type="text" placeholder="vin">

    </form>

     <script>

            const formEl = documnet.querySelector.('.form');

            formEl.addEventListener('submit', event => {
                event.preventDefault();

                const formData = new FormData(formEl);
                const data = new URLSearchParams(formData);

                fetch('127.0.0.1', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'applicatoin/json'
                    },
                    body: data
                }).then(res => res.json())
                  .then(data => console.log(data))
                  .catch(error => console.log(error))
            });

     </script>

</body>

</html>