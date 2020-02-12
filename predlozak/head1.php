<?php require_once 'konfiguracija.php' ?>
<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php echo $nazivAPP; ?></title>
<style>
.tabla /* glavna talbica */
{
  background-color: rgb(39, 41, 40, 0.8);
  width: 74%;
  height: 600px;
  padding: 50px;
  border: 5px solid black;
  border-radius: 5px;
  margin: 120px;
  position: relative;
  left: 390px;
  bottom: 400px;
}

.input
{
    max-width: 80%;
    max-height: 200px;
    position: relative;
    bottom: 50px;
}

 

.cik-text
{
    width: 30%;
    padding: 70px;
    text-align: justify;
}

.text 
{
    color: rgba(216, 213, 212, 0.8);
}

b
{
    color: white;
}

.title
{
    color: white;
}
.txt1
{
    color: white;
}
body
{
    background-color: rgb(39, 41, 40, 0.801) !important;
    background-color: rgb(66, 67, 68) !important;
    background:
            -moz-radial-gradient(gray 3%, transparent 8%),
            -moz-radial-gradient(gray 3%, transparent 8%),
            rgba(0,0,0,0.7);
    background:
            -webkit-radial-gradient(gray 3%, transparent 8%),
            -webkit-radial-gradient(gray 3%, transparent 8%),
            rgba(0,0,0,0.7);

    background-position: 0 0, 80px 80px;

    -webkit-background-size:16px 16px;
    -moz-background-size:16px 16px;
    background-size:16px 16px;

}

.input-text
{
    writing-mode:tb-rl;
    text-orientation: mixed;
    color: gray;
    font-size:18px;
    position: relative;
    right: 45px;
}

.output-text
{
    writing-mode:tb-rl;
    text-orientation: mixed;
    color: gray;
    font-size:18px;
    position: relative;
    left: 410px;
    bottom: 300px;
}

input[type=number]
{
    width: 100px;
    padding: 10px 20px;
    border: 1px solid white;
    border-radius: 8px;
    color: white;
    cursor: pointer;
    -o-text-overflow: clip;
    text-overflow: clip;
    background: rgba(105,109,109,1);
    text-align: center;
    box-sizing: border-box;
}

.klik
{
  background-color: #4CAF50;
  border: 1px solid green;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  border-radius: 8px;
}

.tab /* brojevi */
{
background-color: rgb(39, 41, 40, 0.801);
width:600px;
height: 400px;
empty-cells: hide;
position: relative;
left: 1000px;
bottom: 1100px;
color: rgb(39, 41, 40, 0.801);
border-collapse: separate !important;
border-spacing: 1px ;
color: white;

}

td 
{
    background-color: rgb(39, 41, 40, 0.801);
    text-align: center;
    width:50px;
    height: 50px;
    border: 1px solid white;
    border-radius: 5px;
}

td::after
{
    content: "<-";
    color: green;
    display: inline-block;
    position: absolute;
    font-weight: bolder;
    margin-left: 10px;
    
}



</style>
<link rel="stylesheet" type="text/css" href="css/foundation.css">
<link rel="stylesheet" type="text/css" href="css/app.css">