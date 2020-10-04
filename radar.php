<?php
 
$dataPoints = array(
	array("label"=> "00:00", "y"=> 0),
	array("label"=> "01:00", "y"=> 1),
	array("label"=> "02:00", "y"=> 0),
	array("label"=> "03:00", "y"=> 0),
	array("label"=> "04:00", "y"=> 0),
	array("label"=> "05:00", "y"=> 0),
	array("label"=> "06:00", "y"=> 0),
	array("label"=> "07:00", "y"=> 0),
	array("label"=> "08:00", "y"=> 0),
	array("label"=> "09:00", "y"=> 0),
	array("label"=> "10:00", "y"=> 0),
	array("label"=> "11:00", "y"=> 0),
	array("label"=> "12:00", "y"=> 0),
	array("label"=> "13:00", "y"=> 0),
	array("label"=> "14:00", "y"=> 0),
	array("label"=> "15:00", "y"=> 0),
	array("label"=> "16:00", "y"=> 0),
	array("label"=> "17:00", "y"=> 0),
	array("label"=> "18:00", "y"=> 0),
	array("label"=> "19:00", "y"=> 0),
	array("label"=> "20:00", "y"=> 0),
	array("label"=> "21:00", "y"=> 0),
	array("label"=> "22:00", "y"=> 0),
	array("label"=> "23:00", "y"=> 0),
	array("label"=> "24:00", "y"=> 0)
);
	
?>
<!DOCTYPE html>
<html>
<head>
	<title>IQ Dashboard</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="Styles/background_interface.css" type="text/css" media="screen, projection">
	<link rel="stylesheet" href="Styles/background_interface1.css" type="text/css" media="screen, projection">
	<link rel="stylesheet" href="Styles/Header_White_Big.css" type="text/css" media="screen, projection">
	<script src="AC_RunActiveContent.js" language="javascript"></script>	
    <!-- Framework CSS -->


    <script language="javascript">AC_FL_RunContent = 0;</script>


    <!-- Libraries -->

    <!-- DASH-AVC/265 reference implementation -->
    <script src="js/shaka-player.js"></script>

    <!-- Framework CSS -->
    <link rel="stylesheet" href="css/screen.css" type="text/css" media="screen, projection">
    <link rel="stylesheet" href="css/wowza.css" type="text/css" />
	<link rel="stylesheet" href="Styles/bacground-gray.css" type="text/css" />
    <script>
        function supports_media_source()
        {
            "use strict";
            var hasWebKit = (window.WebKitMediaSource !== null && window.WebKitMediaSource !== undefined),
                hasMediaSource = (window.MediaSource !== null && window.MediaSource !== undefined);
            return (hasWebKit || hasMediaSource);
        }
    </script>

<script>
window.onload = function () {
 
var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	//theme: "light2",
	title:{
		text: "number of recognized objects"
	},
	axisX:{
		crosshair: {
			enabled: true,
			snapToDataPoint: true
		}
	},
	axisY:{
		title: "in Metric Tons",
		includeZero: true,
		crosshair: {
			enabled: true,
			snapToDataPoint: true
		}
	},
	toolTip:{
		enabled: false
	},
	data: [{
		type: "area",
		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();
 
}
</script>
</head>
<body>
	<div id="logining_page">
<div id="footer">
	<a href="index.php"><img src="Custom_files/Logo_white_TM.png" width="20%" height="10%" id="logo"></a><a id="BigHeder">Bysec security technology trade mark</a><img src="Custom_files/g1.png" id="menu"><img src="Custom_files/g2.png" id="menu"><img src="Custom_files/g3.png" id="menu"><img src="Custom_files/g4.png" id="menu">	

<div id="content" >

<h1 id="headerBig">Analyzing device information</h1>
<br>	
<div id="chartContainer" style="height: 370px; width: 100%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
<p class="list_info">Device manufacturer </p><strong class="info_text">Radar dont connected now.Please connect then click - "UPDATE"</strong><br>
<p class="list_info">IP adress </p><strong class="info_text">Radar dont connected now.Please connect then click - "UPDATE"</strong><br>
<p class="list_info">Port </p><strong class="info_text">Radar dont connected now.Please connect then click - "UPDATE"</strong><br>
<p class="list_info">Gateway </p><strong class="info_text">Radar dont connected now.Please connect then click - "UPDATE"</strong><br>
<p class="list_info">Netmask </p><strong class="info_text">Radar dont connected now.Please connect then click - "UPDATE"</strong><br>
<p class="list_info">Status </p><strong class="info_text">Radar dont connected now.Please connect then click - "UPDATE"</strong><br>
<p class="list_info">Firmware </p><strong class="info_text">Radar dont connected now.Please connect then click - "UPDATE"</strong><br><br><br><br>
<h1 id="headerBig">Recognized objects while moving and alert zones</h1>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2640.639413675561!2d18.174715366664984!3d48.55930102639417!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x476b4aafc6466a7b%3A0x9f7ecd930f7f48a2!2sBySec%2C%20s.r.o.!5e0!3m2!1sru!2sua!4v1601847130701!5m2!1sru!2sua" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
<br><br><br>
<h1 id="headerBig">Object tracking using CCTV cameras</h1>
<div id="Box">

    <div class="container">
        <!-- HEADER -->
        
        
 
        <!-- END HEADER -->
        <!-- EXAMPLE PLAYER: WIDTH of this player should be 630px, height will vary depending on the example-->
        <div class="span-16">
          
            <div id="supported" style="display:none">
                <div>
                    <style>
                        video {
                            background-color: #000000;
                        }
                    </style>
                    <video id="videoObj" x-webkit-airplay="allow" controls alt="Example File" width="48%" height="300" autoplay></video>
                      <style>
                        video {
                            background-color: #000000;
                        }
                    </style>
                    <video id="videoObj" x-webkit-airplay="allow" controls alt="Example File" width="48%" height="300" autoplay></video>
                </div>
                <table>
                 
                        <td>
                        	     <b>Stream URL:</b>
                            <input style="width: 25%" id="connectStr" size = "30" type="text" placeholder="" value="http://192.168.1.106:1935/Live/MyCam.stream/manifest.mpd"/>
                            <button id="connectObj" type="button" style="width:50px;background-color: black;color: white;"onclick="JavaScript:connect()">Start</button>
                             <b>Stream URL:</b>
                            <input style="width: 25%" id="connectStr1" size = "30" type="text" placeholder="" value="http://192.168.1.106:1935/Live/MyCam.stream/manifest.mpd"/>
                            <button id="connectObj1" type="button" style="width:50px;background-color: black;color: white;" onclick="JavaScript:connect1()">Start</button>
                        </td>
                    
                  
                </table>
            
                  
        
            </div>
			 <p id="box_size_height"></p>
		
         

        <script>
            if ( supports_media_source() ) {
                supported.style.display="";
                videoObj.style.display="";
            }
            else {
                notsupported.style.display="";
            }
		var video;
		var player;
		var source; 
		var estimator;

            function connect()
            {
                if(connectObj.textContent == "Stop") 
			{
			dashStop();
			connectObj.textContent = "Start";
		
                	}
                else {

                        connectObj.textContent = "Stop";
                     
                        if ( video == null )
                        { video = document.querySelector("video"); }

                        if ( player == null )
                        { player = new shaka.player.Player(video); }

                        // Attach the player to the window so that it can be easily debugged.
                        window.player = player;

                        // Listen for errors from the Player.
                        player.addEventListener('error', failed );

                        // Construct a DashVideoSource to represent the DASH manifest.
                        //var mpdUrl = 'http://turtle-tube.appspot.com/t/t2/dash.mpd';
                        if ( estimator != null )
			{ estimator=null; }
                        estimator = new shaka.util.EWMABandwidthEstimator();

                        if ( source != null )
                        { source = null; }

                        source = new shaka.player.DashVideoSource(connectStr.value, null, estimator);

                        // Load the source into the Player.
                        player.load(source);
                	}
            }

	function failed(e)
	{
	var done = false;
	if ( e.detail == 'Error: Network failure.' )
		{
		statusStr.textContent = 'Network Connection Failed.';
		done = true;
		}
        if ( e.detail.status!=200 && done == false )
                {
		switch ( e.detail.status )
			{
			case 404:
			statusStr.textContent = e.detail.url+' not found.';
			break;
			default:
	                statusStr.textContent = 'Error '+e.detail.status+' for '+e.detail.url;
			break;
                	}
		}
        }

	function dashStop()
	{
		if(player!=null)
		{
		player.unload();
		}
	connectObj.textContent = "Start";
	statusStr.textContent = "Disconnected";
	}
            </script>
        </div>
        <!-- SIDEBAR -->
        
        </div>
        <!-- END FOOTER -->
    </div>

    </div>

<p id="InfoBox">© 2020 BYSEC</p>
</div>

</div>
</body>