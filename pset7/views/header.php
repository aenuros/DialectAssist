<!DOCTYPE html>

<html>

    <head>
        <style>
            .solid {
                border-style: solid;
            }

            #right {
                position:absolute;
                left:60%;
                top:10%;
            }

             #us-map{
              display: block;
              position: absolute;
              top: 25%;
              left: 0;
              width: 60%;
              height: 60%;
            }
            
            path:hover, circle:hover {
              stroke: #d3d3d3 !important;
              stroke-width:1px;
              stroke-linejoin: round;
              fill: #d3d3d3 !important;
              cursor: pointer;
            }
            
            #path67 {
              fill: none !important;
              stroke: #A9A9A9 !important;
              cursor: default;
            }
            
            #info-box {
              display: none;
              position: absolute;
              top: 0px;
              left: 0px;
              z-index: 1;
              background-color: #ffffff;
              border: 2px solid #BF0A30;
              border-radius: 5px;
              padding: 5px;
              font-family: arial;
            }
            </style>

        
        <?php if (isset($title)): ?>
            <title><?= htmlspecialchars($title) ?></title>
        <?php endif ?>

        
    </head>
<h1>Dialectological Assistant</h1>

<a href="index.php">Survey</a> * <a href="map.php">Map</a><br />