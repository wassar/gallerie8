<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Gallerie8</title>
        <style media="screen">
            .container{
                width: 1140px;
            }
            .search-form {
                max-width: 700px;
                position: fixed;
                  top: 50%;
                  left: 50%;
                  transform: translate(-50%, -50%);
            }

            .search-input{
                width: 600px;
                border: 0;
                padding: 18px 27px 18px 5px;

            }
            .search-btn{
                position: relative;
                left: -54px;
                bottom: -11px;
                background: transparent;
                border: 0;
                outline: 0;

            }

        </style>
    </head>
    <body>
        <div class="container">
            <form class="search-form" action="gallerie8.php" method="post">
                <input type="text" class="search-input" name="search" placeholder="What are you looking for?" autofocus required>
                <button type="submit" name="search_submit">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 50 50" version="1.1" width="32px" height="32px">
                    <g id="surface1">
                    <path style=" " d="M 21 3 C 11.621094 3 4 10.621094 4 20 C 4 29.378906 11.621094 37 21 37 C 24.710938 37 28.140625 35.804688 30.9375 33.78125 L 44.09375 46.90625 L 46.90625 44.09375 L 33.90625 31.0625 C 36.460938 28.085938 38 24.222656 38 20 C 38 10.621094 30.378906 3 21 3 Z M 21 5 C 29.296875 5 36 11.703125 36 20 C 36 28.296875 29.296875 35 21 35 C 12.703125 35 6 28.296875 6 20 C 6 11.703125 12.703125 5 21 5 Z "/>
                    </g>
                    </svg>

                </button>
            </form>
        </div>
    </body>
</html>
