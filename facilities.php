<html>
    <head>
        <title>Kenya Health Information System</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <!-- END META SECTION -->

        <script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.2.min.js"></script>
        <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
        <link rel="stylesheet" type="text/css" id="theme" href="template/css/theme-light.css"/>
        <link href="Bootstrap/dist/css/bootstrap.css" rel="stylesheet">
        <link href="Bootstrap/dist/css/jquery-ui.min.css" rel="stylesheet">
        <link href="pagecss/page.css" rel="stylesheet">
        <script type="text/javascript" src="template/js/plugins/datatables/jquery.dataTables.min.js"></script> 
        <!--<script type="text/javascript" src="js/md5.js"></script>  -->   

        <script>
            $(function() 
            {

                for(var count =1;count<=100;count++)
                {
                    var url = "http://test.hiskenya.org/api/organisationUnits.jsonp?page="+count+"&callback=?";
                    $.getJSON( url, 
                    function(data) 
                    {
                        $.each(data.organisationUnits, function(s, values) 
                        {
                            var query = values.href+".jsonp?callback=?";
                            $.getJSON( query, 
                            function(response)
                            {
                                if(response.level==4)
                                {
                                    $.post
                                    (
                                        'insert_facilities.php',
                                        {id:response.id,name:response.name,parent:response.parent.id},
                                        function(message)
                                        {
                                            if(message == 0)
                                            {
                                                //alert("SUCCESS");
                                                var tblRow = "<tr>" + "<td style = 'color:blue;font-weight:bold'>" + response.id + "</td>" + "<td>" + response.name + "</td>" + "<td style = 'color:green'>" + "INSERTED" + "</td>" + "</tr>"
                                                $(tblRow).appendTo("#entrydata tbody");
                                                $(function()
                                                {
                                                    $("#entrydata").dataTable();
                                                })
                                            }

                                            else if(message == 1)
                                            {
                                                //alert("EXISTS");
                                                var tblRow = "<tr>" + "<td style = 'color:blue;font-weight:bold'>" + response.id + "</td>" + "<td>" + response.name + "</td>" + "<td style = 'color:orange'>" + "EXISTS" + "</td>" + "</tr>"
                                                $(tblRow).appendTo("#entrydata tbody");
                                                $(function()
                                                {
                                                    $("#entrydata").dataTable();
                                                })
                                            }

                                            else if(message == -1)
                                            {
                                                //alert("ERROR");
                                                var tblRow = "<tr>" + "<td style = 'color:blue;font-weight:bold'>" + response.id + "</td>" + "<td>" + response.name + "</td>" + "<td style = 'color:red'>" + "ERROR" + "</td>" + "</tr>"
                                                $(tblRow).appendTo("#entrydata tbody");
                                                $(function()
                                                {
                                                    $("#entrydata").dataTable();
                                                })
                                            }
                                        }
                                    );
                                }

                            });

                        });

                        $(function()
                        {
                            $("#entrydata").dataTable();
                        })
                    });

                }
            });
        </script>
    </head>

<body>
    <div class="page-container">
        <div class = "navbar navbar-inverse navbar-static-top" id = "header" style = "background-color: #276696">

            <div class = "header_container" id = "container-fluid">

                <a href="" class="navbar-brand" id = "logo">
                    <p style = "color:white;font-weight:bold;margin-left:40px;font-size:16pt">dhis<b style = "color:#7ec0ee;font-size:18pt">2</b><b style = "margin-left:100px">Kenya Health Information System</p>

                </a>
            </div>
        </div>

         <div class = "row">
            <div class = "col-md-11" style = "margin-left:30px;margin-top:10px;border-radius:5px">
                <div class="panel panel-default">
                    <div class="panel-heading">                                
                        <h3 class="panel-title">DHIS2 Facilities</h3>                              
                    </div>

                    <div class="panel-body">
                        <table id= "entrydata" style = "border-radius:5px">
                            <thead>
                                <th style = "font-weight:bold">ID</th>
                                <th style = "font-weight:bold">Name</th>  
                                <th style = "font-weight:bold">Status</th>                                
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>