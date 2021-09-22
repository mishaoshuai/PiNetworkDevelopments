<!DOCTYPE html>
<html>
	<head>
        <?php
            if(!isset($_GET['mobile']))
            {
        ?>
            <!--<script type="text/javascript">
                const isMobile = /Mobi/.test(window.navigator.userAgent);
                
                if(isMobile == false)
                    location.href="https://latin-chain.com/weblatin";
            </script>-->
        <?php
            }
        ?>
        
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>LatinChain Platform</title>
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, user-scalable=yes">
        
        <!-- ios support -->
        <meta name="apple-mobile-web-app-status-bar" content="#db4938" />
        <meta name="theme-color" content="#db4938" />
        
        <meta name="application-name" content="LatinChain Platform"/>
        
        <link href="https://latin-chain.com/latin-chain-logo.jpeg" rel="shortcut icon" />
        
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        
        <script src="https://latin-chain.com/modals/colorbox/jquery.colorbox.js"></script>
        <link rel="stylesheet" href="https://latin-chain.com/modals/colorbox/example1/colorbox.css" />
        
        <script src="https://sdk.minepi.com/pi-sdk.js"></script>

        <script type="text/javascript">
            $( document ).ready(function() {                
                const Pi = window.Pi;
                Pi.init({ version: "2.0" });
                
                async function auth() {
                    try {
                        // Identify the user with their username / unique network-wide ID, and get permission to request payments from them.
                        const scopes = ['username', 'payments'];
                        function onIncompletePaymentFound(payment) {
                            
                        }; // Read more about this in the SDK reference

                        Pi.authenticate(scopes, onIncompletePaymentFound).then(function(auth) {
                            $("#username").html(" " + auth.user.username);
                        }).catch(function(error) {
                            //Pi.openShareDialog("Error", error);
                            //alert(err);
                            console.error(error);
                        });
                    } catch (err) {
                        //Pi.openShareDialog("Error", err);
                        //alert(err);
                        console.error(err);
                        // Not able to fetch the user
                    }
                }
                
                auth();
                
                const shareData = {
                    title: 'LatinChain Platform',
                    text: 'Hi. Check it out this Pi App: LatinChain Platform (Pi Network Games from Latin America). Try it in Pi Browser. #PiNetwork #PiApps https://latin-chain.com/',
                    //url: 'https://latin-chain.com/',
                }

                //$("#social_div").css("visibility", "visible");
                const btn = document.querySelector('#button1');
                //const resultPara = document.querySelector('.result');
                
                // Must be triggered some kind of "user activation"
                btn.addEventListener('click', async () => {
                    if (!navigator.share) {
                        Pi.openShareDialog(shareData.title, shareData.text);
                    }else
                    {
                      try {
                        await navigator.share(shareData);
                        //resultPara.textContent = 'MDN shared successfully'
                      } catch(err) {
                        //alert('Error: ' + err);
                      }
                    }
                });
                
                $( "#vote" ).click(function() {
                    $.colorbox({href:"https://latin-chain.com/modals/vote_pi.html", iframe:true, width: "80%", height: "80%", maxWidth: "80%", maxHeight: "80%"});
                });
            });

        </script>
	</head>
	<body>
 		<div class="container" style="text-align:center">
            <br/>Hi<strong><span id="username"></span></strong>. Welcome to Pi Network Games from Latin America (LatinChain). 
            <button id="vote" class="btn btn-info">How to vote?</button><br/><br/>
            <ul class="nav nav-tabs" id="myTab" role="tablist" style="background-color: #e3f2fd;">
              <li class="nav-item" role="presentation">
                <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Apps</button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Dev</button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Info</button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link" id="video-tab" data-bs-toggle="tab" data-bs-target="#video" type="button" role="tab" aria-controls="video" aria-selected="false">Video</button>
              </li>
            </ul>
            <div class="tab-content" id="myTabContent">
              <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                <br/>Choose your app (Test our game Chess):<br/><br/>
            
                <div class="container" style="text-align:center">
                    <div class="row">
                        <div class="col"><a href="https://latin-chain.com/chess/main.html" class="btn btn-success">CHESS</a></div>
                        <div class="col"><a href="https://latin-chain.com/sudoku/main.html" class="btn btn-primary">SUDOKU</a></div>
                        <div class="col"><a href="https://latin-chain.com/snake/main.html" class="btn btn-primary">SNAKE</a></div>
                    </div>
                    <br/>
                    <div class="row">
                        <div class="col"><a href="https://latin-chain.com/piapp-example/main.html" class="btn btn-primary">PIAPP EXAMPLE</a></div>
                        <div class="col"></div>
                        <div class="col"></div>
                    </div>
                </div>
              </div>
              <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                <br/>Other developments:<br/><br/>
                <div class="container" style="text-align:center">
                    <div class="row">
                        <div class="col"><a href="https://apps.odoo.com/apps/modules/14.0/website_pinetwork_odoo/" class="btn btn-secondary">ODOO APP</a></div>
                        <div class="col"><a href="https://apps.odoo.com/apps/modules/14.0/website_pinetwork_games_odoo/" class="btn btn-secondary">PLATFORM IN ODOO</a></div>
                        <div class="col"><a href="https://github.com/rockcesar/PiNetworkDevelopments" target="_blank" class="btn btn-secondary">GITHUB REPO</a></div>
                    </div>
                </div>
              </div>
              <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                <br/>INFO:<br/><br/>
            
                <img src="https://latin-chain.com/latin-chain-logo.jpeg" alt="LatinChain" class="img-fluid" style="width: 100px; height: 100px;" /><br/><br/>
                <a href="https://latin-chain.com/weblatin" class="btn btn-link">LATINCHAIN</a><br/><br/>
                <a href="https://dev-rockcesar.blogspot.com/2021/05/pi-apps-published.html" class="btn btn-link" >MORE INFO</a>
              </div>
              <div class="tab-pane fade" id="video" role="tabpanel" aria-labelledby="video-tab">
                <br/>Video presentation:<br/><br/>
                <iframe width="270px" height="170px" src="https://www.youtube.com/embed/9KqcyAoCZzo" frameborder="0" allowfullscreen></iframe>
              </div>
            </div>
			<!--<br/>Hi<strong><span id="username"></span></strong>. Welcome to Pi Network Games from Latin America (LatinChain). Choose your app.<br/><br/>
            
            <div class="container">
                <div class="row">
                    <div class="col"><a href="https://latin-chain.com/sudoku/main.html" class="btn btn-primary">SUDOKU</a></div>
                    <div class="col"><a href="https://latin-chain.com/snake/main.html" class="btn btn-primary">SNAKE</a></div>
                    <div class="col"><a href="https://latin-chain.com/chess/main.html" class="btn btn-primary">CHESS</a></div>
                </div>
                <br/>
                <div class="row">
                    <div class="col"><a href="https://latin-chain.com/piapp-example/main.html" class="btn btn-primary">PIAPP EXAMPLE</a></div>
                    <div class="col"></div>
                    <div class="col"></div>
                </div>
            </div><br/><br/>
            Other developments:<br/><br/>
            <a href="https://apps.odoo.com/apps/modules/14.0/website_pinetwork_odoo/" class="btn btn-secondary">WATCH OUR ODOO APP</a><br/><br/>
            <a href="https://apps.odoo.com/apps/modules/14.0/website_pinetwork_games_odoo/" class="btn btn-secondary">PIAPP GAMES PLATFORM IN ODOO</a><br/><br/>
            INFO:<br/><br/>-->
            
            <!--
            <img src="https://latin-chain.com/latin-chain-logo.jpeg" alt="LatinChain" class="img-fluid" style="width: 100px; height: 100px;" /><br/><br/>
            <a href="https://latin-chain.com/weblatin" class="btn btn-link">MAIN PAGE OF LATINCHAIN</a><br/><br/>
            <a href="https://dev-rockcesar.blogspot.com/2021/05/pi-apps-published.html" class="btn btn-link" >MORE INFO</a><br/><br/>-->
            <br/><br/>
            <div id="social_div">Share in Social Networks:<br/><br/>
            <button id="button1" class="btn btn-primary">Share</button><br/><br/>
            </div>
		</div>
	</body>
</html>
