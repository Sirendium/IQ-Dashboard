<!DOCTYPE html>
<html>
<head>
	<title>Live View</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="Styles/live1.css">
	<script src="AC_RunActiveContent.js" language="javascript"></script>	
    <!-- Framework CSS -->
	<link rel="stylesheet" href="Styles/screen.css" type="text/css" media="screen, projection">
	<link rel="stylesheet" href="Styles/wowza.css" type="text/css" />
	<link rel="stylesheet" href="Styles/bacground-gray.css" type="text/css" />
            <script type="text/javascript" src="lib/swfobject.js">
            </script>
        <script type="text/javascript" src="lib/ParsedQueryString.js">
            </script>
         <script type="text/javascript">
            
            // Collect query parameters in an object that we can
            // forward to SWFObject:
            
            var pqs = new ParsedQueryString();
            var parameterNames = pqs.params(false);
            var parameters = {
                src: "http://192.168.1.106:1935/Live/MyCam.stream/manifest.f4m",
                autoPlay: "false",
                verbose: true,
                controlBarAutoHide: "false",
                controlBarPosition: "bottom"
            };
            
            for (var i = 0; i < parameterNames.length; i++) {
                var parameterName = parameterNames[i];
                parameters[parameterName] = pqs.param(parameterName) ||
                parameters[parameterName];
            }
            
            // Escape the ampersands so any URL params pass through OSMF into Wowza
            s = parameters['src'];
            s = escape(s);
            parameters['src'] = s; 
            
            var wmodeValue = "direct";
            var wmodeOptions = ["direct", "opaque", "transparent", "window"];
            if (parameters.hasOwnProperty("wmode"))
            {
                if (wmodeOptions.indexOf(parameters.wmode) >= 0)
                {
                    wmodeValue = parameters.wmode;
                }                            
                delete parameters.wmode;
            }
            
            // Embed the player SWF:                    
            swfobject.embedSWF(
                               "StrobeMediaPlayback.swf"
                               , "StrobeMediaPlayback"
                               , 300
                               , 200
                               , "10.3.0"
                               , "expressInstall.swf"
                               , parameters
                               , {
                               allowFullScreen: "true",
                               wmode: wmodeValue
                               }
                               , {
                               name: "StrobeMediaPlayback"
                               }
                               );

                   // Embed the player SWF:                    
            swfobject.embedSWF(
                               "StrobeMediaPlayback1.swf"
                               , "StrobeMediaPlayback1"
                               , 300
                               , 200
                               , "10.3.0"
                               , "expressInstall.swf"
                               , parameters
                               , {
                               allowFullScreen: "true",
                               wmode: wmodeValue
                               }
                               , {
                               name: "StrobeMediaPlayback1"
                               }
                               );
                     // Embed the player SWF:                    
            swfobject.embedSWF(
                               "StrobeMediaPlayback2.swf"
                               , "StrobeMediaPlayback2"
                               , 300
                               , 200
                               , "10.3.0"
                               , "expressInstall.swf"
                               , parameters
                               , {
                               allowFullScreen: "true",
                               wmode: wmodeValue
                               }
                               , {
                               name: "StrobeMediaPlayback2"
                               }
                               );
                     // Embed the player SWF:                    
            swfobject.embedSWF(
                               "StrobeMediaPlayback3.swf"
                               , "StrobeMediaPlayback3"
                               , 300
                               , 200
                               , "10.3.0"
                               , "expressInstall.swf"
                               , parameters
                               , {
                               allowFullScreen: "true",
                               wmode: wmodeValue
                               }
                               , {
                               name: "StrobeMediaPlayback3"
                               }
                               );
            
            /* Uncomment this code to be notified of playback errors in JavaScript: 
             
             function onMediaPlaybackError(playerId, code, message, detail)            
             {
             alert(playerId + "\n\n" + code + "\n" + message + "\n" + detail);            
             }
             
             */
            
            </script>
        <style type="text/css">
            <!-- .Verdana {
                font-family: Verdana, Geneva, sans-serif;
            }
            -->
            </style>
</head>
<body>
<div id="Top">
<a href="index.php"><img src="Images/menu1.png" width="50px" height="50px"></a><strong id="Text">LIVE VIEW</strong>
<img id="grid_1" src="Images/grid1.png" width="50px" height="50px">
<img id="grid_2" src="Images/grid2.png" width="50px" height="50px">
<img id="grid_3" src="Images/grid3.png" width="50px" height="50px">
<img id="grid_4" src="Images/grid4.png" width="50px" height="50px">
</div>
<div id="Top_2">
<img src="Images/alarms.png "width="50px" height="50px"><strong id ="Text">ALARMS</strong>
<img  id="logo_t" src="Images/logo_white.png" width="150px" height="50px">
</div>
<br><br><br><br>
<div id="Box">
<div class="span-16">

            <table width="48%" border="0" cellspacing="0">
                <tr>
                    <td>
                        <div id="StrobeMediaPlayback">
                            <p>
                            Alternative content
                            </p>
                        </div>

                          <div id="StrobeMediaPlayback1">
                            <p>
                            Alternative content
                            </p>
                        </div>
                        <br>
                          <div id="StrobeMediaPlayback2">
                            <p>
                            Alternative content
                            </p>
                        </div>

                          <div id="StrobeMediaPlayback3">
                            <p>
                            Alternative content
                            </p>
                        </div>
                    </td>


                </tr>
                <tr>
                    <td style="border: none;background-color: silver;">                
                            <script type="text/javascript">
                            
                            // Construct the HTML required to reload with any of the
                            // listed media links:
                            
                            var linkingCode = '<form style="background-color: silver;color: white; border:none;"> ';
                            linkingCode = linkingCode + '<b style="color:black;font-size: 14px;">Stream:</b>&nbsp;&nbsp;';
                            linkingCode = linkingCode + '<input style="background-color: gray;color: white; font-size: 14px" type="text" name="src" size="20" value="'+unescape(parameters['src'])+'" />';
                            linkingCode = linkingCode + '<input style="background-color: black;color:white;" type="submit" name="playButton" value="Connect" />  </form>';
                            
                            document.write(linkingCode);
                            </script>
                            <script type="text/javascript">
                            
                            // Construct the HTML required to reload with any of the
                            // listed media links:
                            
                                  var linkingCode = '<form style="background-color: silver;color: white; border:none;"> ';
                            linkingCode = linkingCode + '<b style="color:black;font-size: 14px;">Stream:</b>&nbsp;&nbsp;';
                            linkingCode = linkingCode + '<input style="background-color: gray;color: white; font-size: 14px" type="text" name="src" size="20" value="'+unescape(parameters['src'])+'" />';
                            linkingCode = linkingCode + '<input style="background-color: black;color:white;" type="submit" name="playButton" value="Connect" />  </form>';
                            
                            
                            document.write(linkingCode);
                            </script>

                    </td>
                </tr>
                
            </table>
           </div>

            
</div>
<div id="Box_1">
<p id="box_size_height_1"></p>
</div><br><br>
<div id="bottom_s">
<img src="Images/image.png" width="50px" height="50px">
<img src="Images/status.png" width="50px" height="50px">
<img src="Images/Logs.png" width="50px" height="50px">
</div>


</body>
</html>