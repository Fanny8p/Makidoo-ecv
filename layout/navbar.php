<section class="status-bar">
  <div class="container end">
    <a class="status" href="#"><img src="img/reception.svg"></a>
    <a class="status" href="#"><img src="img/battery.svg"></a>
    <a class="status" id="div_horloge" href="#"></a>
</div>
</section>

<div id="div_horloge"></div>
 
<script type="text/javascript">
window.onload=function() {
  horloge('div_horloge');
};
 
function horloge(el) {
  if(typeof el=="string") { el = document.getElementById(el); }
  function actualiser() {
    var date = new Date();
    var str = date.getHours();
    str += ':'+(date.getMinutes()<10?'0':'')+date.getMinutes();
    el.innerHTML = str;
  }
  actualiser();
  setInterval(actualiser,1000);
}
</script>