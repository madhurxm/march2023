<html>

<head>
    <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>

    <script>
        $(document).ready(function() {

            jQuery("button").click(function() {
                var fn = $("#fname").val();
                var ln = $("#lname").val();
                jQuery.ajax({
                    url: "store.php",
                    type: "POST",
                    data: jQuery("form").serialize(),
                    success: function(data) {
                        alert("hello");
                        jQuery("p").append(data);
                        alert(jQuery("form").serialize());
                    }
                });
            });

            jQuery.ajax({
                url: "https://jsonplaceholder.typicode.com/posts",
                type: "GET",
                success: function(data) {
                    console.log(data);
                    // alert(data.title);
                }
            });

            jQuery.getJSON(
                "https://jsonplaceholder.typicode.com/comments",
                function(data) {
                    $.each(data, function(key, val) {
                        jQuery("#load_data").append(key);
                    });
                });

        });
    </script>

</head>

<body>

    <form>
        <input type="text" id="fname" name="fname">
        <input type="text" id="lname" name="lname">
        <button type="button">Submit</button>
    </form>
    <p></p>
    <div id="load_data"></div>
</body>

</html>