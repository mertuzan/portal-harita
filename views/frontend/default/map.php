<?php
#$_search=$_GET['search'];
#$_search=str_replace(" ","%20",$_search);
#echo $_search;
?>
<div align="center">
<p class="lead">Google Maps Module</p>

</div>
<div class="mapouter">
            <div class="gmap_canvas">
                <iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=university%20of%20san%20francisco&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
            </div>
            <style>
                .mapouter {
                    text-align: right;
                    height: 500px;
                    width: 600px;
                    margin: auto;
                }

                .gmap_canvas {
                    overflow: hidden;
                    background: none !important;
                    height: 500px;
                    width: 600px;
                }

            </style>
        </div>
