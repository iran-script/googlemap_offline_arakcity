<!DOCTYPE html>
<html>
    <head>
    </head>
        <script src="https://canvasjs.com/assets/script/jquery-1.11.1.min.js"></script>
    <body>
        <div class="render-form">
            <script>
                $(document).ready(function() {
                    $.ajax({
                        type: 'GET',
                        headers:{    
                            'Accept': 'application/json',
                            'Content-Type': 'application/json',
                            'Access-Control-Allow-Origin': '*' 
                        },
                        url: 'https://sina.post.ir/post-search/web/compact-parcel-public/34.07423049853907;49.671527110810075',
                        dataType: 'json',
                        success: function (data) {
                            alert(JSON.stringify(data));
                        }
                    });
                })
            </script>
        </div>
    </body>
</html>