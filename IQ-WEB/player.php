<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN"
   "http://www.w3.org/TR/html4/strict.dtd">

<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Flash HTTP Player - Live nDVR Streaming | Wowza Media Systems</title>

    <script language="javascript">AC_FL_RunContent = 0;</script>
    <script src="AC_RunActiveContent.js" language="javascript"></script>	
    <!-- Framework CSS -->
	<link rel="stylesheet" href="css/screen.css" type="text/css" media="screen, projection">
	<link rel="stylesheet" href="css/wowza.css" type="text/css" />
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
                src: "http://localhost:1935/dvr/myStream/manifest.f4m?DVR",
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
                               , 640
                               , 480
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
                               , 640
                               , 480
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


      
		<!-- END HEADER -->
		<!-- EXAMPLE PLAYER: WIDTH of this player should be 630px, height will vary depending on the example-->
        <div class="span-16">

            <table width="100%" border="0" cellspacing="5">
                <tr>
                    <td>
                        <div id="StrobeMediaPlayback">
                            <p>
                            Alternative content
                            </p>
                        </div>
                    </td>


                </tr>
                <tr>
                    <td>                
                            <script type="text/javascript">
                            
                            // Construct the HTML required to reload with any of the
                            // listed media links:
                            
                            var linkingCode = '<form > ';
                            linkingCode = linkingCode + '<b>Stream:</b>&nbsp;&nbsp;';
                            linkingCode = linkingCode + '<input type="text" name="src" size="75" value="'+unescape(parameters['src'])+'" />';
                            linkingCode = linkingCode + '<input type="submit" name="playButton" value="Connect" />  </form>';
                            
                            document.write(linkingCode);
                            </script>

                    </td>
                </tr>
                
            </table>
	       </div>

            <div class="span-16">

            <table width="100%" border="0" cellspacing="5">
                <tr>
                    <td>
                        <div id="StrobeMediaPlayback1">
                            <p>
                            Alternative content
                            </p>
                        </div>
                    </td>


                </tr>
                <tr>
                    <td>                
                            <script type="text/javascript">
                            
                            // Construct the HTML required to reload with any of the
                            // listed media links:
                            
                            var linkingCode = '<form > ';
                            linkingCode = linkingCode + '<b>Stream:</b>&nbsp;&nbsp;';
                            linkingCode = linkingCode + '<input type="text" name="src" size="75" value="'+unescape(parameters['src'])+'" />';
                            linkingCode = linkingCode + '<input type="submit" name="playButton" value="Connect" />  </form>';
                            
                            document.write(linkingCode);
                            </script>

                    </td>
                </tr>
                
            </table>
           </div>
       

</body>
</html>
