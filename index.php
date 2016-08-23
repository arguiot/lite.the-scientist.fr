<?php
//lien du fichier dans lequel se trouve votre page

$mobile = $_SERVER['HTTP_USER_AGENT'];
 
if(preg_match("(iPhone|BlackBerry|Android|HTC|LG|MOT|Nokia|Palm|SAMSUNG|SonyEricsson)",$mobile))
{
  $fichier = "mobile.php";
}
else
{
  $fichier = "main.php";
}

/***********************************************************************
Vous pouvez ajouter de la CSS et de l'HTML pour rendre la page plus joli
************************************************************************/

?>
<!DOCTYPE HTML>

<html class="data"> 
<style type="text/css">
	html, body {height: 100%}
.science {
  position: absolute;
  width: 120px; height: 120px;
  top: 50%; left: 50%;
  margin: -60px 0 0 -60px;
  transform: rotate(45deg);
}
.isthis {
  width: 100%; height: 100%;
  transform: rotate(-45deg);
}
  .thisisscienceiguess,
  .andthisistoo,
  .thisistooofcourse {
    position: absolute;
    display: block;
    width: 100%; height: 100%;
    top: 0; left: 0;
    border-width: 4px;
    border-style: solid;
    border-radius: 100%;
    opacity: .9;
  }
  .thisisscienceiguess {
    border-color: #bbb;
    animation: center 2s ease-in-out infinite;
  }
  .andthisistoo {
    border-color: #bbb;
    animation: top 2s ease-in-out infinite;
  }
  .thisistooofcourse {
    border-color: #bbb;
    animation: bottom 2s ease-in-out infinite;
  }

@keyframes center {
  0%   {transform: rotateY(0deg)}
  50%  {transform: rotateY(90deg)}
  100% {transform: rotateY(360deg)}
}
@keyframes top {
  0%   {transform: rotateY(0deg) rotateX(0deg)}
  50%  {transform: rotateY(90deg) rotateX(45deg)}
  100% {transform: rotateY(360deg) rotateX(0deg)}
}
@keyframes bottom {
  0%   {transform: rotateY(0deg) rotateX(0deg)}
  50%  {transform: rotateY(90deg) rotateX(-45deg)}
  100% {transform: rotateY(360deg) rotateX(0deg)}
}
</style>
        <script type="text/javascript">
            
            var time_set=setTimeout("window.location.replace(\"<?php echo $fichier; ?>\");", 1000)


        </script>
        <div class="science">
  <div class="isthis">
    <span class="thisisscienceiguess"></span>
    <span class="andthisistoo"></span>
    <span class="thisistooofcourse"></span>
  </div>
</div>
</html>