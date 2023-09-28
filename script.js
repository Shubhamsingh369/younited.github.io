
// const searchFun = () => {
function searchFun(){
  let filter = document.getElementById('myInput').value.toUppercase();
  let mytable = document.getElementById('mytable');
  let tr = mytable.getElementsByTagName('tr'); 

  for (var i = 0; i < tr.length; i++) {
    let td = tr[i].getElementsByTagName('td')[0];

    if (td) {
      lettextvalue = td.textContent || td.innerHTML;
      if (textvalue.toUppercase().indexOf(filter >-1)) {
        tr[i].style.display = "";
      }
      else {
      tr[i].style.display = "NONE"
      }
    }
  }
}