<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>
        </title>
        <link rel="stylesheet" href="http://code.jquery.com/mobile/1.0.1/jquery.mobile-1.0.1.min.css" />
        <style>
            /* App custom styles */
        </style>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js">
        </script>
        <script src="http://code.jquery.com/mobile/1.0.1/jquery.mobile-1.0.1.min.js">
        </script>
    </head>
    <body>
        <div data-role="page" id="page1">
            <div data-role="content">
                <div data-role="navbar" data-iconpos="top">
                    <ul>
                        <li>
                            <a href="#page1" data-theme="" data-icon="" class="ui-btn-active">
                                1
                            </a>
                        </li>
                        <li>
                            <a href="#page1" data-theme="" data-icon="">
                                2
                            </a>
                        </li>
                        <li>
                            <a href="#page1" data-theme="" data-icon="">
                                3
                            </a>
                        </li>
                    </ul>
                </div>
                <h2>
                    HTML5 TEST
                </h2>
                <div style="width: 288px; height: 100px; position: relative; background-color: #fbfbfb; border: 1px solid #b8b8b8;">
                    <img src="http://codiqa.com/static/images/v2/image.png" alt="image" style="position: absolute; top: 50%; left: 50%; margin-left: -16px; margin-top: -18px" />
                </div>
                <div data-role="collapsible-set" data-theme="" data-content-theme="">
                    <div data-role="collapsible" data-collapsed="">
                        <h3>
                            Section Header
                        </h3>
                    </div>
                </div>
            </div>
            <div data-theme="a" data-role="footer">
                <h3>
                    Footer
                </h3>
            </div>
        </div>
        <script>
            //App custom javascript
        </script>
    </body>
</html>