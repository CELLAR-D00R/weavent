<?php include ("vote_conn.php") ?>
<!DOCTYPE html>
<html>
<head>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/elusive-icons.min.css">
    <link rel="stylesheet" href="css/materialize.min.css">
    <link rel="stylesheet" href="css/bar-ui.css">
    <link rel="stylesheet" href="css/weavent.css">
    <link rel="stylesheet" href="css/calendar.css">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta charset="UTF-8">

</head>
<body>
<header>

</header>
<main>
    <section class="masonry-container">
        <div class="masonry">
            <div class="masonry-sizer"></div>
            <div class="gutter-sizer"></div>
            <!-- Bloc 33 -->
            <div class="masonry-item m1r1c">
                <div class="row r1">
                    <div class="col s12 text">
                        <div class="title-area">
                            <h2 class="title">Résultats</h2>
                        </div>
                        <div class="content-area">
                            
                        </div>
                    </div>
                </div>
            </div>
            <!-- Bloc 34 -->
            <div class="masonry-item m1r1c">
                <div class="row r1">
                    <div class="col s12 text">
                        <?php
                            $query = mysql_query("SELECT * FROM vote WHERE id = 1");
                            while ($vote = mysql_fetch_object($query)):
                        ?>
                        <div class="title-area">
                            <h2 class="title"><?php echo $vote->title; ?></h2>
                        </div>
                        <div class="content-area">
                            <div id="vote-area">
                                <div class="valign-wrapper">
                                    <div class="valign vote-item">
                                        <p><?php echo $vote->text; ?></p>
                                        <div class="vote-options" id="<?php echo $vote->id; ?>">
                                            <a class="btn" id="yes">Oui</a>
                                            <a class="btn" id="no">Non</a>
                                            <a class="btn" id="noanswer">NSP</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="vote-results">
                                <canvas id="resultats" width="266" height="155"></canvas>
                            </div>    
                        </div>
                        <?php endwhile; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<footer></footer>

<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>
<script src="js/masonry.pkgd.min.js"></script>
<script src="js/Chart.min.js"></script>
<script src="js/jquery.calendario.js"></script>
<script>
    $('.masonry').masonry({
        // set itemSelector so .grid-sizer is not used in layout
        itemSelector: '.masonry-item',
        // use element for option
        columnWidth: '.masonry-sizer',
        percentPosition: true,
        gutter: '.gutter-sizer'
    });
    $(document).ready(function(){
        $('.sliderSmall').slider({
            full_width: true,
            height: 248
        });
        $('.sliderBig').slider({
            full_width: true,
            height: 508
        });
        $('.modal-trigger').leanModal();
        $('.lean-overlay').click(function(){
            $("video").each(function ()
            {
                logger.debug("PAUSE VIDEO");
                this.pause();
                this.src = "";
            });
        });
    });
</script>
<script>
    function init()
    {
        var cusid_ele = document.getElementsByClassName('live-canvas');
        for (var i = 0; i < cusid_ele.length; ++i) {
            var canvas = cusid_ele[i];
            if(canvas.getContext)
            {
                var ctx = canvas.getContext("2d");
// Draw triangle
                ctx.fillStyle="#FABE00";
                ctx.beginPath();
// Draw a triangle location for each corner from x:y 100,110 -> 200,10 -> 300,110 (it will return to first point)
                ctx.moveTo(72,72);
                ctx.lineTo(0,0);
                ctx.lineTo(72,0);
                ctx.closePath();
                ctx.fill();

                ctx.rotate(Math.PI / 4);
                ctx.font = 'italic 16pt Arial';
                ctx.fillStyle="#000000";
                ctx.fillText("Live", 33, -7);
            }
        }
    }
    onload=init;
</script>

<script>
$(function($) {
    var getVoteResults = function(){
        $.get("vote_results.php", function(data, status){
            var parsedData = JSON.parse(data);
            var resultData = [parsedData[0].yes, parsedData[0].no, parsedData[0].noanswer];
            var ctx = document.getElementById("resultats");
            var myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ["oui", "non", "nsp"],
                    datasets: [{
                        label: '# of Votes',
                        backgroundColor: "rgba(198,43,130,1)",
                        borderColor: "rgba(198,43,130,1)",
                        borderWidth: 1,
                        hoverBackgroundColor: "rgba(0,0,0,1)",
                        hoverBorderColor: "rgba(0,0,0,1)",
                        data: resultData
                    }]
                },
                options: {
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero:true
                            }
                        }]
                    }
                }
            });
            $('#vote-area').toggle();
        });
    }
    $(".vote-options a").click(function() {
        var id = $(this).parent("div").attr("id");
        var type = $(this).attr("id");
        $.post("vote.php", {id: id, type: type}, function(answer) {
            getVoteResults();
        });

    }); 
});
</script>
<script type="text/javascript" src="js/soundmanager2.js"></script>
<script src="js/bar-ui.js"></script>
</body>
</html>
