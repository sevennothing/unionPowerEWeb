var svgdoc,svgroot,ttrelem,tttelem,tt;

function getSVGDoc(load_evt)
{
  svgdoc = load_evt.target.ownerDocument;
  svgroot = svgdoc.documentElement;
  ttrelem = svgdoc.getElementById("ttr");
  tttelem = svgdoc.getElementById("ttt");
  // tt=svgdoc.getElementById("tooltip");
}

function ShowTooltip(e, txt)
{
  var posx, posy, curtrans, ctx, cty;
  
  posx = e.clientX;
  posy = e.clientY;
  curtrans = svgroot.currentTranslate;
  ctx = curtrans.x;
  cty = curtrans.y;
  
  tttelem.childNodes.item(0).data = txt;
  ttrelem.setAttribute("x", posx-ctx);
  ttrelem.setAttribute("y", posy-cty-20);
  tttelem.setAttribute("x", posx-ctx+5);
  tttelem.setAttribute("y", posy-cty-8);
  ttrelem.setAttribute("width", tttelem.getComputedTextLength() + 10);
  
  tttelem.setAttribute("style", "fill: #0000CC; font-size: 11px; font-weight: 600; visibility: visible;");
  ttrelem.setAttribute("style", "fill: #FFFFCC; stroke: #000000; stroke-width: 0.5px; visibility: visible;");
}

function HideTooltip()
{
  // tt.style.setProperty("visibility","hidden","");
  ttrelem.setAttribute("style", "visibility: hidden");
  tttelem.setAttribute("style", "visibility: hidden");
}

function ZoomControl()
{
  var curzoom;
  curzoom = svgroot.currentScale;
  svgdoc.getElementById("tooltip").setAttribute("transform","scale("+1/curzoom+")");
}