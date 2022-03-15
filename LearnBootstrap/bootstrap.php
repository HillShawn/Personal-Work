<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<script>    
    function displaytable()
    {   
        //jQuery AJAX to send a service request to get all data from the database
        $.ajax({
            url: "https://anime4games.com/FateGrandOrder/select3.php",
            success: function(resultfromurl){
                console.log(resultfromurl);
                
                var array = resultfromurl;
                //loop through array & create <tr> tag
                $.each(array, function(index, value){
                    
                    //declare variables of database values
                    var name = value["NAME"];
                    var id = value["SERVANTID"];
                    var classification = value["CLASS"];
                    var bio = value["BIO"];
                    var chapter = value["SINGULARITY"];
                    var card = value["imageurl"];
                    
                    console.log(index + " " + value["SERVANTID"]);
                    
                    //jquery HTML in servants table
                    var image = "<img src="+card+">";
                    //HTML popover containing character biographies
                    var popover = "<a href='#' data-toggle='popover' title='"+bio+"'>Bio</a>";
                    $("#servants").append("<tr><td>"+image+"</td><td>"+name+"</td><td>"+classification+"</td><td>"+popover+"</td><td>"+chapter+"</td></tr>");
                });
            }
        });
    }
</script>

<script>
    //call the displaytable() function to display the table
    $(document).ready(function(){
        displaytable();
    });
</script>

<script>
    //popover function
    $(document).ready(function(){
      $('[data-toggle="popover"]').popover({trigger: 'hover click'});
    });
</script>

<script>
    //filtered search function
    $(document).ready(function(){
        $("#myInput").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $("#servants tr").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
            });
        });
    });
</script>

<link rel="icon" href="FGOIcon.png" type="icon"/>
<link href="style2.css" rel="stylesheet"/>

<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head> 
    
    <body class="container">
        <div id="background_wrap"></div>
        <div> 
            <input id="myInput" type="text" placeholder="Search..">
            <br>
            <br> 
            <table id="servants" class="table table-bordered">
                <tr>
                    <th>Icon</th>
                    <th>Servant Name</th>
                    <th>Class</th>
                    <th>Bio</th>
                    <th>Singularity</th>
                </tr>      
            </table>
        </div>
    </body>
</html>