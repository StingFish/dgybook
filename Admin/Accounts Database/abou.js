var select_element = document.getElementById( "combo" );
var selected = select_element.options[ select_element.selectedIndex ].value

if(selected == "Employee"){
  document.getElementById("aa").disabled = false;
  document.getElementById("bb").disabled = true;
}
if(selected == "Student"){
  document.getElementById("aa").disabled = true;
  document.getElementById("bb").disabled = false;
}