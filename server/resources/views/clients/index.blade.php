<html>
    <head>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.19.2/axios.js"></script>
    </head>
    <body>
        <table border="1">
            <thead>
                <th>ID</th>
                <th>Name</th>
                <th>Redirect Callback</th>
                <th>Secret</th>
                <th>Edit</th>
                <th>Delete</th>
            <thead>
            <tbody id="clients"></tbody>
        </table>

        <script>

            loadClientes();
            context = $(this);
            $("body").on('click', '.delete', function(){
                axios.delete('/oauth/clients/' + $(this).data('id'))
                .then(response => {
                    loadClientes();
                });
            });

            function loadClientes(){
                axios.get('/oauth/clients')
                .then(response => {
                    response.data.forEach(function(client){
                        console.log(client);
                        $("#clients").append(`
                        <tr>
                            <td>` + client.id + `</td>
                            <td>` + client.name + `</td>
                            <td>` + client.redirect + `</td>
                            <td>` + client.secret + `</td>
                            <td>Edit</td>
                            <td class="delete" data-id=" ` + client.id + ` ">Delete</td>
                        </tr>
                        `);
                    });
                });
            }

        </script>
    </body>
</html>
