<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .topTranslateBar{
            display:flex;
            justify-content: space-between;
            align-items: center;

            border: 1px solid black;

            width: 100%;
            height: 40px;
        }
        
        .topTranslateBar .address{
            display: flex;
            justify-content: flex-start;
            align-items: center;
            width: 50%;
        }
        .topTranslateBar .address i{
            font-size: 25px;
            padding: 10px;
        }
        .topTranslateBar .phone{
            padding: 10px;
            display: flex;
            justify-content: flex-end;
            align-items: center;
            width: 25%;
        }
        .topTranslateBar .phone i{
            font-size: 25px;
            padding: 10px;
        }
    </style>
</head>
<body>
    <div class="topTranslateBar">

        <div class="address">
            <i class="fa-solid fa-location-dot"></i>
            <p>Code: 42902, Republic of Korea.</p>
        </div>

        
        <div class="phone">
            <i class="fa-solid fa-phone"></i>
            <p>0082-53-592-8257</p>
        </div>
        <div id="google_translate_element"></div>
    </div>


    <script src="https://kit.fontawesome.com/b19824e628.js" crossorigin="anonymous"></script>

    <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({pageLanguage: 'en', includedLanguages: 'en,hi,mr,te,ko,ar', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
        }
    </script>

    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>


    
</body>
</html>