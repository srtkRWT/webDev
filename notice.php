<div class="col-sm-2 sidenav" style="height:200%; overflow:auto; word-wrap: break-word; ">
    <!-- add php here -->
    <h1>NOTICE</h1> <br>
    <?php
    require "./connection.php";
    
    $sql = "SELECT title, author, post_date, notice_data FROM Notice";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            printf("<div class=\"well bg-transparent text-light\">");
            printf("<h4><u> %s </u></h4>", $row["title"]);
            printf("<p> %s, %s</p>", $row["author"], $row["post_date"]);
            printf("<p> %s </p>", $row["notice_data"]);
            printf("</div>");
        }
    } else {
        echo "0 results";
    }
    ?>
</div>