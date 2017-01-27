<style>
  .cls-1, .cls-3 {
    fill: #9b2828;
  }

  .cls-1, .cls-2, .cls-3 {
    stroke: #fff;
    stroke-width: 1px;
  }

  .cls-2 {
    fill: #00a651;
  }

  .cls-3 {
    stroke: black;
  }
</style>
Div: <input type="text" id="div" value="">
info: <input type="text" id="info" value="">
<div>
  Learn more about SVG's path syntax <a href="https://css-tricks.com/svg-path-syntax-illustrated-guide/" target="_blank">here</a>.
</div>
<div>
  <svg xmlns="http://www.w3.org/2000/svg" width="387" height="261" viewBox="0 0 387 261">
    <defs>

    </defs>
    <rect class="cls-1" x="30" y="30" width="150" height="40"/>
    <rect class="cls-2" x="30" y="140" width="150" height="40"/>
    <path id="line1" class="cls-3"
      d="M 105 70,l 0 70,Z"/>
  </svg>
</div>
<div class="">
  <svg xmlns="http://www.w3.org/2000/svg" width="387" height="261" viewBox="0 0 387 261">
    </defs>
    <rect class="cls-1" x="30" y="30" width="150" height="40"/>
    <rect id="moveme" class="cls-2" x="100" y="140" width="150" height="40"/>
    <path id="line2" class="cls-3"
      d="M 105 70,l 70 70,Z"/>
  </svg>
</div>

<script>

var mouseX = 0;
var mouseY = 0;
var currentDiv;
document.onclick = function(e) {
    window.currentDiv = e.target;
    console.log('Current Div: '+window.currentDiv)
    if(e.target.id != window.currentDiv){
        window.console.log('Changed to: '+window.currentDiv)
        document.getElementById('div').value = window.currentDiv
        if(window.currentDiv.nodeName == 'path'){
          id = window.currentDiv.id;
          svg = document.getElementById(id);
          // d is the attribute that defines the line
          svg_d = svg.attributes.d.value;
          svg_d = svg_d.split(',');
          svg_l = svg_d[1].split(' ');
          l = svg_l[0]
          lx = parseInt(svg_l[1]) + 10
          ly = svg_l[2]
          d = svg_d[0]+',l '+lx+' '+ly+','+svg_d[2]
          svg.attributes.d.value = d
          document.getElementById('info').value = d
        }
    }
}

</script>
