<?php
include('settings.php');
?>
<html>
    <head>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
        <script src="js/bootstrap.min.js"></script>
        <script>
            $(function () {
                $("#opener").click(function () {
                    $("#txtHint").addClass("newClass", 1000, callback);
                });

                function callback() {
                    setTimeout(function () {
                        $("#txtHint").removeClass("newClass");
                    }, 1500);
                }
            });
        </script>
        <script>
            $(function () {
                $("#txtHint").dialog();
                /* Scrollbar fix  */
                /* open: function(event, ui){$('body').css('overflow','hidden');$('.ui-widget-overlay').css('width','100%'); },
                 close: function(event, ui){$('body').css('overflow','auto'); } */
            });
        </script>
        <script src="jquery-2.1.4.min.js" ></script>
        <script>
            //ajax call for fetching movies data according to genre/keyword
            $(document).ready(function () {
                $('#genre').hide();
                //fetching by keyword
                $("#submit").click(function () {
		 var genreName = $('#keyword').val();
		//var letters = /^[a-zA-Z0-9]+$/;
		var letters = /^[a-z\d\-_\s]+$/i;
		var result = letters.test(genreName);
		if ($.trim(genreName) != '' && result) {
                    $.ajax({
                        type: "POST",
                        url: 'search.php',
                        data: {name: genreName},
                        success: function (data) {
                            $('#txtHint').html(data);
                            $("#txtHint").dialog();
                        }
                    });
            	}
		else if ($.trim(genreName) == '')
		{
			alert("Input required.");	
		}
		else 
		{
			alert("Special characters are not permitted");			
 		}
                });
                //fetching by genre
                $("#genre").change(function () {
                    var genreName = $('#genre').val();
                    $.ajax({
                        type: "POST",
                        url: 'genre.php',
                        data: {name: genreName},
                        success: function (data) {
                            $('#txtHint').html(data);
                            $("#txtHint").dialog();
                        }
                    });
                });
            });
        </script>
    </head>
    <body>
        <div id="txtSearch"  class="poss container-fluid">
            <div class="row text-center">
                <div><h4>Search Movie Database!!!</h4></div>
                <div class="formContent" style="width:24%;margin:auto;">
                    <div class="row">
                        <div class="form-group elementsform">
                            <div class="input-group">

                                <input class="form-control" type="text" name="keyword" id="keyword" placeholder="Enter Title or Plot or Director name">
                                <span class="input-group-addon"><button type="submit"  name="submit" class="form-control btn btn-primary submitBtn" id="submit"><span class="glyphicon glyphicon-search"></span></button></span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <select name="genre" id="genre" class="form-control">
                            <option value="">Select Genre</option>
                            <?php
                            $sql = "select id,genre from Genre";
                            $res = mysql_query($sql, $con);
                            while ($row = mysql_fetch_array($res)) {
                                $result = $row['genre'];
                                $val = $row['id'];
                                echo $result;
                                echo $val;
                                ?>
                                <option value="<?php echo $result; ?>"><?php echo $result; ?> </option>
                            <?php } ?>
                        </select>
                    </div>
                 
                    <div class="form-group">
                        <input type="radio" name="rbsearchBy" value="genre" id="rbGenre"/>Genre
                        <input type="radio" name="rbsearchBy" value="keyword" id="rbKeyword" checked/>Keyword
                    </div>
                </div>
            </div>
        </div>

        <script>
            $(function () {
                $('input[type="radio"]').click(function () {
                    if ($('#rbGenre').is(':checked'))
                    {
                        $('#keyword').hide();
                        $('#submit').hide();
                        $('.input-group-addon').hide();
                        $('#genre').show();
                        $('#txtHint').empty();

                    }
                    else if ($('#rbKeyword').is(':checked'))
                    {
                        $('#keyword').show();
                        $('#submit').show();
                        $('.input-group-addon').show();
                        $('#genre').hide();
                        $('#txtHint').empty();
                    }
                });
            });
            $(function () {
                $("#dialog1").dialog({
                    autoOpen: false
                });

                $("#opener").click(function () {
                    alert("hi");

                });
            });
        </script>
    </div>
    <div  class="scroll" ><b>Info will be listed here...</b>
        <table class="table table-responsive table-hover table-striped table-bordered" id="txtHint">
        </table>
    </div>
    <br>

    <!--<div id="dialog1" title="Dialog Title" hidden="hidden">I'm a dialog</div>-->
</body>
</html>
