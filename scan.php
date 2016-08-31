<style type="text/css">
				#mainbody{
				    background: white;
				    width:100%;
				  display:none;
				}
				
				#v{
				    width:320px;
				    height:240px;
				}
				#qr-canvas{
				    display:none;
				}
				#qrfile{
				    width:320px;
				    height:240px;
				}
				#mp1{
				    text-align:center;
				    font-size:35px;
				}
				#imghelp{
				    position:relative;
				    left:0px;
				    top:-160px;
				    z-index:100;
				    font:18px arial,sans-serif;
				    background:#f0f0f0;
				  margin-left:35px;
				  margin-right:35px;
				  padding-top:10px;
				  padding-bottom:10px;
				  border-radius:20px;
				}
				.selector{
				    margin:0;
				    padding:0;
				    cursor:pointer;
				    margin-bottom:-5px;
				}
				
				#result{
				    border: solid;
				  border-width: 1px 1px 1px 1px;
				  padding:20px;
				  width:70%;
				}

				.tsel{
				    padding:0;
				}
</style>

	<link href="assets/css/bootstrap.min.css" rel="stylesheet">
	<script type="text/javascript" src="qr-js/llqrcode.js"></script>
	<script type="text/javascript" src="qr-js/webqr.js"></script>

<div class="container">
    <div class="page-section">
      <div class="row">
        <div class="col-md-9">
          <!-- Tabbable Widget -->
			<div class="tabbable paper-shadow relative" data-z="0.5">
			<br>
            <div id="main" align="center">

				<div id="mainbody">
				
					<img class="selector" id="webcamimg" src="" onclick="setwebcam()" align="left" />
					<img class="selector" id="qrimg" src="" onclick="setimg()" align="right"/>
					<div id="outdiv"></div>
					
					<img src=""/>
					<div id="as"></div>
					<br>
					
				</div>
			</div>
           	
            </div>
			
				<div id="info">
					<center><p>Please Show Your QRCode</p></center>
				</div>
			
				<canvas id="qr-canvas" width="800" height="600"></canvas>
				<center><script type="text/javascript">load();</script></center>

        </div>
      </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>  