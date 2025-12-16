<table id="tb_blog">
    <thead>
        <tr>
            <th>ID</th>
            <th>Comment</th>
            <th>Edit</th>
            <th>Del</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Loading...</td>
        </tr>
    </tbody>
</table>

<script>
    $.getjason("/php/blog_api.php",function(jsonDATA))
</script>