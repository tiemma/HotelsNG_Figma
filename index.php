<html>
    <head>
        <title>Hotels NG Demo</title>
        <link href="style.css" rel="stylesheet" />
    </head>

    <body>
        <div class="row">
            <div class="hours">
                <div class="header">
                    <span class="text">Time</span>
                </div>
                <div class="body-h">
                    <span class="hour"><?php echo date('H') ?></span>
                </div>
            </div>
            <div class="colon">::</div>
            <div class="minutes">
                <div class="body-m">
                    <span class="minute"><?php echo date('i') ?></span>
                </div>
                <div class="footer">
                    <span class="text"><?php echo date('a') ?><span>
                </div>
            </div>
        </div>
    </body>

</html>