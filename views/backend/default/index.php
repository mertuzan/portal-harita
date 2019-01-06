<?php 
    $this->title = 'Map Module';
        
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Google Maps Module</h1>
        <p class="lead">
                Search on Google Maps : <input data-required="yes" type="text" name="search">
                <a href="http://portal.kouosl/admin/harita/default/map">Search</a>
        </p>
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

        <p>

            <p></p>
            <a class="btn btn-lg btn-success" href="http://portal.kouosl/harita/users/index">Users</a>
            <a class="btn btn-lg btn-success" href="http://portal.kouosl/harita/useropts/index">Map Settings</a>
        </p>
    </div>
</div>
