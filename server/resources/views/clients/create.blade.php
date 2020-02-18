<html>
    <head>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.19.2/axios.js"></script>
    </head>
    <body>
        <form action="/oauth/clients" method="post">
            @csrf
            <input name="name" type="text" placeholder="Name"/>
            <input name="redirect" type="text" placeholder="Redirect URL"/>
            <input type="submit" value="send" />
        </form>

        <script>
            // const data = {
            //     name: 'Client Name',
            //     redirect: 'http://example.com/callback'
            // };

            // axios.post('/oauth/clients', data)
            // .then(response => {
            //     console.log(response.data);
            // })
            // .catch (response => {
            //     // List errors on response...
            // });
        </script>
    </body>
</html>
