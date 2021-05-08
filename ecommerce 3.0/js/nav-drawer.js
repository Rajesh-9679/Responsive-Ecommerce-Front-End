var deviceWidth = window.matchMedia("(max-width: 532px)")
//var drawerWidth = (window.screen.width*2)/3;
/* Set the width of the side navigation to 250px */
function openSideNav() {
  if (deviceWidth.matches) {
      document.getElementById("cat-menu").style.width = "160px";
      document.getElementById("cat-menu").style.boxShadow = ".05rem .1rem 1rem #cfd8dc";
  }else{
      document.getElementById("cat-menu").style.width = "100%";
      document.getElementById("cat-menu").style.boxShadow = "none";
  }
}

/* Set the width of the side navigation to 0 */
function closeSideNav() {
    if (deviceWidth.matches) {
     document.getElementById("cat-menu").style.width = "0";
    }
}
