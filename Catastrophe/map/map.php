
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" type="image/png" href="C:\Users\oussa\OneDrive\Bureau\Semestre 3\Optimisation et interaction Homme Machine\Catastrophe\Images\BIBDA_LOGO.png">
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css" integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ==" crossorigin="">
    <script defer src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js" integrity="sha512-gZwIG9x3wUXg2hdXF6+rVkLF/0Vi9U8D2Ntg4Ga5I5BZpVkVxlJWbSQtXPSiUTtC0TjtGOmxa1AJPuV0CPthew==" crossorigin=""></script>
    <link rel="stylesheet" href="./map.css">
    <script defer src="./map.js"></script>
    <title>Map | SafeHomes</title>
</head>
<body>
    <div class="preloader-container"><img class="preloader" src="../Images/preloader.gif" alt=""></div>
    <div class="sidebar">
        <img src="C:\Users\oussa\OneDrive\Bureau\Semestre 3\Optimisation et interaction Homme Machine\Catastrophe\Images\BIBDA_LOGO.png" alt="Logo" class="logo" />
        <ul class="workouts">
            <form class="form hidden">
                <div class="form__row">
                    <label class="form__label">Owner :</label>
                    <input class="form__input form__input--task" placeholder="Name" />
                </div>
                <div class="form__row">
                    <label class="form__label">Location</label>
                    <input class="form__input form__input--location" placeholder="Address" />
                </div>
                <div class="form__row">
                    <label class="form__label">Phone</label>
                    <input class="form__input form__input--timing" type="number" pattern="" placeholder="Phone no." />
                </div>
                <div class="form__row">
                    <label class="form__label">Facility</label>
                    <input class="form__input form__input--duration" placeholder="facility" />
                </div>
                <button class="form__btn">OK</button>
            </form>
            <form class="form red-zone-area hidden">
                <input type="number" id="red-zone-latitude" placeholder="Latitude">
                <input type="number" id="red-zone-longtitude" placeholder="Longtitude">
                <input type="number" id="red-zone-radius" placeholder="Radius of area">
                <button class="red-zone-area-btn">Submit</button>
                <button class="red-zone-area-mine">🔴</button>
            </form>
        </ul>
        <div class="all-btn">
            <button class="add-red-zone-btn">Add Red Zone Area</button>
            <p class="reset"><button>CLEAR ALL</button></p>
        </div>
    </div>
    <div id="map"></div>
</body>
</html>
