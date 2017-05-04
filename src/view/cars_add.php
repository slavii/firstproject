<script
        src="https://code.jquery.com/jquery-2.2.4.min.js"
        integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
        crossorigin="anonymous"></script>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
      integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
      integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>

<?php
$script = file_get_contents($_SERVER['DOCUMENT_ROOT'] . 'public/js/cars_add.js');
$style = file_get_contents($_SERVER['DOCUMENT_ROOT'] . 'public/css/cars_add.css');
echo '<script>' . $script . '</script>';
echo '<style>' . $style . '</style>';
?>

<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="/">Home</a>
            <a class="navbar-brand" href="/registration">Registration</a>
            <a class="navbar-brand" href="/contactus">Contact Us</a>
            <a class="navbar-brand" href="/signin">Sign In</a>
            <a class="navbar-brand" href="/cars">Cars</a>
        </div>
</nav>

<form method="POST" action="/submitcar" name="new-car" id="new-car" enctype="multipart/form-data">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-md-offset-2 selectContainer">
                <select class="form-control" name="Make" id="make">
                    <option value="">Make</option>
                    <optgroup label="A"/>
                    <option value="AC">AC</option>
                    <option value="Acura">Acura</option>
                    <option value="Aixam">Aixam</option>
                    <option value="Alfa romeo">Alfa romeo</option>
                    <option value="Aston martin">Aston martin</option>
                    <option value="Audi">Audi</option>
                    <option value="Austin">Austin</option>
                    </optgroup>

                    <optgroup label="B">
                        <option value="Bentley">Bentley</option>
                        <option value="Berliner">Berliner</option>
                        <option value="Bmw">Bmw</option>
                        <option value="Borgward">Borgward</option>
                        <option value="Brilliance">Brilliance</option>
                        <option value="Bugatti">Bugatti</option>
                        <option value="Buick">Buick</option>
                    </optgroup>

                    <optgroup label="C">
                        <option value="Cadillac">Cadillac</option>
                        <option value="Chevrolet">Chevrolet</option>
                        <option value="Chrysler">Chrysler</option>
                        <option value="Citroen">Citroen</option>
                        <option value="Corvette">Corvette</option>
                    </optgroup>

                    <optgroup label="D">
                        <option value="Dacia">Dacia</option>
                        <option value="Daewoo">Daewoo</option>
                        <option value="Daihatsu">Daihatsu</option>
                        <option value="Daimler">Daimler</option>
                        <option value="Datsun">Datsun</option>
                        <option value="Dkw">Dkw</option>
                        <option value="Dodge">Dodge</option>
                        <option value="Dr">Dr</option>
                    </optgroup>

                    <optgroup label="E">
                        <option value="Eagle">Eagle</option>
                    </optgroup>

                    <optgroup label="F">
                        <option value="FSO">FSO</option>
                        <option value="Ferrari">Ferrari</option>
                        <option value="Fiat">Fiat</option>
                        <option value="Ford">Ford</option>
                    </optgroup>

                    <optgroup label="G">
                        <option value="Geo">Geo</option>
                        <option value="Great Wall">Great Wall</option>
                    </optgroup>

                    <optgroup label="H">
                        <option value="Heinkel">Heinkel</option>
                        <option value="Honda">Honda</option>
                        <option value="Hyundai">Hyundai</option>
                    </optgroup>

                    <optgroup label="I">
                        <option value="Ifa">Ifa</option>
                        <option value="Infiniti">Infiniti</option>
                        <option value="Innocenti">Innocenti</option>
                        <option value="Isuzu">Isuzu</option>
                    </optgroup>

                    <optgroup label="J">
                        <option value="Jaguar">Jaguar</option>
                    </optgroup>

                    <optgroup label="K">
                        <option value="Kia">Kia</option>
                    </optgroup>

                    <optgroup label="L">
                        <option value="Lada">Lada</option>
                        <option value="Lamborghini">Lamborghini</option>
                        <option value="Lancia">Lancia</option>
                        <option value="Lexus">Lexus</option>
                        <option value="Lifan">Lifan</option>
                        <option value="Lincoln">Lincoln</option>
                        <option value="Lotus">Lotus</option>
                    </optgroup>

                    <optgroup label="M">
                        <option value="Maserati">Maserati</option>
                        <option value="Matra">Matra</option>
                        <option value="Maybach">Maybach</option>
                        <option value="Mazda">Mazda</option>
                        <option value="McLaren">McLaren</option>
                        <option value="Mercedes">Mercedes</option>
                        <option value="Mercury">Mercury</option>
                        <option value="Mg">Mg</option>
                        <option value="Mini">Mini</option>
                        <option value="Mitsubishi">Mitsubishi</option>
                        <option value="Morgan">Morgan</option>
                        <option value="Moskvich">Moskvich</option>
                    </optgroup>

                    <optgroup label="N">
                        <option value="Nissan">Nissan</option>
                    </optgroup>

                    <optgroup label="O">
                        <option value="Oldsmobile">Oldsmobile</option>
                        <option value="Opel">Opel</option>
                    </optgroup>

                    <optgroup label="P">
                        <option value="Perodua">Perodua</option>
                        <option value="Peugeot">Peugeot</option>
                        <option value="Pgo">Pgo</option>
                        <option value="Plymouth">Plymouth</option>
                        <option value="Polonez">Polonez</option>
                        <option value="Pontiac">Pontiac</option>
                        <option value="Porsche">Porsche</option>
                        <option value="Proton">Proton</option>
                    </optgroup>

                    <optgroup label="R">
                        <option value="Renault">Renault</option>
                        <option value="Rolls-Royce">Rolls-Royce</option>
                        <option value="Rover">Rover</option>
                    </optgroup>

                    <optgroup label="S">
                        <option value="SECMA">SECMA</option>
                        <option value="Saab">Saab</option>
                        <option value="Samand">Samand</option>
                        <option value="Saturn">Saturn</option>
                        <option value="Scion">Scion</option>
                        <option value="Seat">Seat</option>
                        <option value="Shatenet">Shatenet</option>
                        <option value="Shuanghuan">Shuanghuan</option>
                        <option value="Simca">Simca</option>
                        <option value="Skoda">Skoda</option>
                        <option value="Smart">Smart</option>
                        <option value="Ssang yong">Ssang yong</option>
                        <option value="Subaru">Subaru</option>
                        <option value="Suzuki">Suzuki</option>
                    </optgroup>

                    <optgroup label="T">
                        <option value="Talbot">Talbot</option>
                        <option value="Tata">Tata</option>
                        <option value="Tavria">Tavria</option>
                        <option value="Tazzari">Tazzari</option>
                        <option value="Terberg">Terberg</option>
                        <option value="Tesla">Tesla</option>
                        <option value="Tofas">Tofas</option>
                        <option value="Toyota">Toyota</option>
                        <option value="Trabant">Trabant</option>
                        <option value="Triumph">Triumph</option>
                    </optgroup>

                    <optgroup label="V">
                        <option value="VROMOS">VROMOS</option>
                        <option value="Volga">Volga</option>
                        <option value="Volvo">Volvo</option>
                        <option value="Vw">Vw</option>
                    </optgroup>

                    <optgroup label="W">
                        <option value="Warszawa">Warszawa</option>
                        <option value="Wartburg">Wartburg</option>
                        <option value="Wiesmann">Wiesmann</option>
                    </optgroup>

                    <optgroup label="X">
                        <option value="Xinshun">Xinshun</option>
                    </optgroup>

                    <optgroup label="Z">
                        <option value="Zastava">Zastava</option>
                        <option value="Zaz">Zaz</option>
                    </optgroup>

                    <optgroup label="Д">
                        <option value="Други">Други</option>
                    </optgroup>

                    <optgroup label="П">
                        <option value="Победа">Победа</option>
                    </optgroup>

                    <optgroup label="С">
                        <option value="София">София</option>
                    </optgroup>

                    <optgroup label="Ч">
                        <option value="Чайка">Чайка</option>
                    </optgroup>
                </select>
            </div>
            <div class="col-md-3 selectContainer">
                <select class="form-control" name="Model" id="model" disabled>
                    <option value="">Model</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 col-md-offset-2 selectContainer">
                <select class="form-control" name="Year" id="year">
                    <option value="">Year</option>
                    <option value="1995">1995</option>
                    <option value="1996">1996</option>
                    <option value="1997">1997</option>
                    <option value="1998">1998</option>
                    <option value="1999">1999</option>
                    <option value="2000">2000</option>
                    <option value="2001">2001</option>
                    <option value="2002">2002</option>
                    <option value="2003">2003</option>
                    <option value="2004">2004</option>
                    <option value="2005">2005</option>
                </select>
            </div>
            <div class="col-md-3 selectContainer">
                <select class="form-control" name="Fuel" id="fuel">
                    <option value="">Fuel</option>
                    <option value="Gasoline">Gasoline</option>
                    <option value="Diesel">Diesel</option>
                    <option value="Hybrid">Hybrid</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 col-md-offset-2 selectContainer">
                <select class="form-control" name="Gears" id="gears">
                    <option value="">Gears</option>
                    <option value="Auto">Auto</option>
                    <option value="Manual">Manual</option>
                </select>
            </div>
            <input type="text" class="col-md-2 form-control" name="Price" id="price"/>
        </div>
        <div class="row">
            <input type="file" class="col-md-4 col-md-offset-3" name="image" id="image">
        </div>
        <div class="row">
            <div class="col-md-4 col-md-offset-3 not-empty hidden">Not all required fields are filled!</div>
        </div>
        <div class="row">
            <input type="submit" class="col-md-2 col-md-offset-4 btn btn-success" name="submit" value="SUBMIT"
                   id="submit"/>
        </div>
        <div class="row">
            <div class="col-md-4 col-md-offset-3 hidden" id="result"></div>
        </div>
    </div>

</form>