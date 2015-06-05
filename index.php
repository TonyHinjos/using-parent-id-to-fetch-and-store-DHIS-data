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
        <link rel="stylesheet" href="Date/pagestyle.css" media="screen, projection" />
        <link rel="stylesheet" href="Date/slimpicker.css" media="screen, projection" />
        <link href="Bootstrap/dist/css/bootstrap.css" rel="stylesheet">
        <link href="Bootstrap/dist/css/jquery-ui.min.css" rel="stylesheet">
        <link href="pagecss/page.css" rel="stylesheet">
        <script type="text/javascript" src="template/js/plugins/datatables/jquery.dataTables.min.js"></script> 
        <!--<script type="text/javascript" src="js/md5.js"></script>  -->   

        <script>
            $(function() 
            {
                //http://test.hiskenya.org/api/dataSets.jsonp?callback=?
                var url = "http://test.hiskenya.org/api/organisationUnits.jsonp?callback=?";
                $.getJSON( url, 
                function(data) 
                {
                    $.each(data.organisationUnits, function(s, values) 
                    {
                        var id = md5(values.id);
                        var tblRow = "<tr>" + "<td style = 'color:blue;font-weight:bold'>" + values.id + "</td>" + "<td>" + values.created + "</td>" + "<td>" + values.name + "</td>"+ "<td>" + values.lastUpdated + "</td>"+ "<td style = 'color:green'><a href='"+values.href+".json'>" + values.href + "</a></td>" + "</tr>"
                        $(tblRow).appendTo("#entrydata tbody");

                    });
                    $(function()
                    {
                        $("#entrydata").dataTable();
                    })
                });

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
                        <h3 class="panel-title">DHIS2 Datasets</h3>                              
                    </div>

                    <div class="panel-body">
                        <table id= "entrydata" style = "border-radius:5px">
                        <thead>
                                <th style = "font-weight:bold">ID</th>
                                <th style = "font-weight:bold">Created</th>
                                <th style = "font-weight:bold">Name</th>
                                <th style = "font-weight:bold">Last Updated</th>
                                <th style = "font-weight:bold;color:blue;">Link</th>
                                
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